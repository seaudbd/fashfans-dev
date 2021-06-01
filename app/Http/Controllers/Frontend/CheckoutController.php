<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\CheckoutRequest;
use App\Models\BusinessSetting;
use App\Models\Country;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Stripe\Exception\ApiConnectionException;
use Stripe\Exception\ApiErrorException;
use Stripe\Exception\AuthenticationException;
use Stripe\Exception\CardException;
use Stripe\Exception\InvalidRequestException;
use Stripe\Exception\RateLimitException;
use Stripe\StripeClient;
use \Exception;

class CheckoutController extends Controller
{
    public function index() {
        $cartItems = Session::get('cart_items');
        $countries = Country::get();
        $bKashNumber = null;
        if (BusinessSetting::where('type', 'bkash_merchant_number_activation')->first()->value === '1') {
            $bKashNumber = BusinessSetting::where('type', 'bkash_merchant_number')->first()->value;
        } elseif (BusinessSetting::where('type', 'bkash_personal_number_activation')->first()->value === '1') {
            $bKashNumber = BusinessSetting::where('type', 'bkash_personal_number')->first()->value;
        }
        return view('Frontend.checkout', compact('cartItems', 'countries', 'bKashNumber'));
    }

    public function checkAccountLoginStatus() {
        if (Session::has('account_login_status')) {
            return response()->json(['account_login_status' => true]);
        } else {
            return response()->json(['account_login_status' => false]);
        }
    }

    public function checkoutAsGuest() {
        Session::put('checkout_type', 'guest');
        return response()->json(['success' => true]);
    }

    public function executeCheckout(CheckoutRequest $request) {
        $shippingInformation = $request->all(['name', 'email', 'address', 'country', 'city', 'postal_code', 'phone']);
        Session::put('shipping_information', $shippingInformation);

        if ($request->get('payment_method') === 'Card') {
            $cardInformation = $request->all(['card_number', 'card_cvc', 'expiry_month', 'expiry_year']);
            Session::put('card_information', $cardInformation);
        }

        if ($request->payment_method === 'PayPal') {
            $this->initiatePaypal();
        } elseif ($request->payment_method === 'Card') {
            return response()->json($this->initiateCard());
        } else {

            $cartTotal = 0;
            $shippingCostTotal = 0;
            $taxTotal = 0;
            $cartItems = Session::get('cart_items');

            foreach ($cartItems as $key => $cartItem) {
                $cartTotal += $cartItem->purchase_price * $cartItem->quantity;
                $shippingCostTotal += $cartItem->shipping_cost * $cartItem->quantity;
                $taxTotal += $cartItem->tax * $cartItem->quantity;
            }
            $checkoutTotal = $cartTotal + $shippingCostTotal + $taxTotal;
            $shippingInformation = Session::get('shipping_information');

            $order = new Order();
            if (Session::get('checkout_type') === 'guest') {
                $order->guest_id = mt_rand(100000, 999999);
            } else {
                $order->user_id = Session::get('user_id');
            }
            $order->shipping_address = $shippingInformation;
            $order->payment_type = 'bKash';
            $order->payment_status = 'unpaid';
            $order->payment_details = 'bKash';
            $order->grand_total = $checkoutTotal;
            $order->code = date('Ymd-His').rand(10,99);
            $order->date = strtotime('now');
            $order->save();


            foreach ($cartItems as $key => $cartItem) {
                $orderDetail = new OrderDetail();
                $orderDetail->order_id = $order->id;
                $orderDetail->seller_id = $cartItem->user_id;
                $orderDetail->product_id = $cartItem->id;
                $orderDetail->price = $cartItem->purchase_price * $cartItem->quantity;
                $orderDetail->tax = $cartItem->tax * $cartItem->quantity;
                $orderDetail->shipping_cost = $cartItem->shipping_cost*$cartItem->quantity;
                $orderDetail->quantity = $cartItem->quantity;
                $orderDetail->save();
            }

            Session::forget(['cart_items', 'shipping_information', 'card_information', 'checkout_type']);
            return ['success' => true, 'message' => $order];
        }
    }



    public function initiateCard()
    {
        $stripeConf = Config::get('stripe');
        $stripe = new StripeClient(
            $stripeConf['secret']
        );
        $cardInformation = Session::get('card_information');
        try {
            $token = $stripe->tokens->create([
                'card' => [
                    'number' => $cardInformation['card_number'],
                    'exp_month' => intval($cardInformation['expiry_month']),
                    'exp_year' => intval($cardInformation['expiry_year']),
                    'cvc' => $cardInformation['card_cvc'],
                ],
            ]);



            if ( ! isset($token->id)) {
                return ['success' => false, 'message' => 'Failed to Initiate Payment'];
            }

            $cartTotal = 0;
            $shippingCostTotal = 0;
            $taxTotal = 0;
            $cartItems = Session::get('cart_items');

            foreach ($cartItems as $key => $cartItem) {
                $cartTotal += $cartItem->purchase_price * $cartItem->quantity;
                $shippingCostTotal += $cartItem->shipping_cost * $cartItem->quantity;
                $taxTotal += $cartItem->tax * $cartItem->quantity;
            }
            $checkoutTotal = $cartTotal + $shippingCostTotal + $taxTotal;

            $charge = $stripe->charges->create([
                'currency' => 'USD',
                'amount' => $checkoutTotal * 100,
                'source' => $token->id,
                'description' => 'Checkout',
            ]);

            if($charge->status == 'succeeded') {
                $shippingInformation = Session::get('shipping_information');

                $order = new Order();
                if (Session::get('checkout_type') === 'guest') {
                    $order->guest_id = mt_rand(100000, 999999);
                } else {
                    $order->user_id = Session::get('user_id');
                }
                $order->shipping_address = $shippingInformation;
                $order->payment_type = 'stripe';
                $order->payment_status = 'paid';
                $order->payment_details = $charge;
                $order->grand_total = $checkoutTotal;
                $order->code = date('Ymd-His').rand(10,99);
                $order->date = strtotime('now');
                $order->save();


                foreach ($cartItems as $key => $cartItem) {
                    $orderDetail = new OrderDetail();
                    $orderDetail->order_id = $order->id;
                    $orderDetail->seller_id = $cartItem->user_id;
                    $orderDetail->product_id = $cartItem->id;
                    $orderDetail->price = $cartItem->purchase_price * $cartItem->quantity;
                    $orderDetail->tax = $cartItem->tax * $cartItem->quantity;
                    $orderDetail->shipping_cost = $cartItem->shipping_cost*$cartItem->quantity;
                    $orderDetail->quantity = $cartItem->quantity;
                    $orderDetail->save();
                }





                Session::forget(['cart_items', 'shipping_information', 'card_information', 'checkout_type']);
                return ['success' => true, 'message' => $order];
            } else {
                return ['success' => false, 'message' => 'Failed to Charge the Payment'];
            }

        } catch(CardException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        } catch (RateLimitException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        } catch (InvalidRequestException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        } catch (AuthenticationException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        } catch (ApiConnectionException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        } catch (ApiErrorException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        } catch (Exception $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }




    }


    public function checkoutSuccess($orderId)
    {


        $order = Order::where('id', $orderId)->with(['orderDetails.product'])->first();
        return view('Frontend.checkout_success', compact('order'));
    }
}
