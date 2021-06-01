<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index() {
        $cartItems = Session::get('cart_items');
        return view('Frontend.cart', compact('cartItems'));
    }

    public function getCartItems() {
        return response()->json(Session::get('cart_items'));
    }

    public function addToCart(Request $request) {

        $product = Product::where('id', $request->product_id)->first();
        $product['quantity'] = 1;
        $pushableItem = true;
        if (Session::get('cart_items')) {
            foreach (Session::get('cart_items') as $item){
                if ($item->id == $product->id){
                    $pushableItem = false;
                    break;
                }
            }
        }
        if ($pushableItem){
            Session::push('cart_items', $product);
        }

        view()->share('cartCounter', count(Session::get('cart_items')));
        return response()->json(['message' => 'Cart Updated Successfully', 'data' => Session::get('cart_items'), 'addedItem' => $product]);
    }


}
