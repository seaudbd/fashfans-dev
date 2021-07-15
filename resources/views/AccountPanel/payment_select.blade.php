@extends('frontend.layouts.app')

@section('content')

    <div id="page-content">
        <section class="slice-xs sct-color-2 border-bottom">
            <div class="container container-sm">
                <div class="row cols-delimited justify-content-center">
                    <div class="col-3">
                        <div class="icon-block icon-block--style-1-v5 text-center">
                            <div class="block-icon c-gray-light mb-0">
                                <i class="la la-shopping-cart"></i>
                            </div>
                            <div class="block-content d-none d-md-block">
                                <h3 class="heading heading-sm strong-300 c-gray-light text-capitalize">1. {{__('My Cart')}}</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="icon-block icon-block--style-1-v5 text-center">
                            <div class="block-icon c-gray-light mb-0">
                                <i class="la la-truck"></i>
                            </div>
                            <div class="block-content d-none d-md-block">
                                <h3 class="heading heading-sm strong-300 c-gray-light text-capitalize">2. {{__('Shipping info')}}</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="icon-block icon-block--style-1-v5 text-center">
                            <div class="block-icon mb-0 c-gray-light">
                                <i class="la la-truck"></i>
                            </div>
                            <div class="block-content d-none d-md-block">
                                <h3 class="heading heading-sm strong-300 c-gray-light text-capitalize">3. {{__('Delivery info')}}</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="icon-block icon-block--style-1-v5 text-center active">
                            <div class="block-icon mb-0">
                                <i class="la la-credit-card"></i>
                            </div>
                            <div class="block-content d-none d-md-block">
                                <h3 class="heading heading-sm strong-300 c-gray-light text-capitalize">3. {{__('Payment')}}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <section class="py-3 gry-bg">
            <div class="container">
                <div class="row cols-xs-space cols-sm-space cols-md-space">
                    <div class="col-lg-8">
                        <form action="{{ route('payment.checkout') }}" class="form-default" data-toggle="validator" role="form" method="POST" id="checkout-form">
                            @csrf
                            <div class="card">
                                <div class="card-title px-4 py-3">
                                    <h3 class="heading heading-5 strong-500">
                                        {{--{{__('Select a payment option')}}--}}
                                        Payment
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            {{--<div class="row">--}}
                                                {{--<div class="col-4">--}}
                                                    {{--<img src="{{ asset('frontend/images/icons/cards/bkash-logo.png') }}" class="img-fluid">--}}
                                                {{--</div>--}}
                                                {{--<div class="col-8">--}}
                                                    {{--<div style="font-size: 14px; color: #020101;">Please pay to the following bKash number.</div>--}}
                                                    {{--<div style="color: #020101;" class="mt-3">--}}
                                                        {{--<span style="color: #020101;">--}}
                                                            {{--Payment Type--}}
                                                        {{--</span>--}}
                                                        {{--:--}}
                                                        {{--<span style="font-weight: 700; color: #fe540f;">--}}
                                                            {{--@if (\App\BusinessSetting::where('type', 'bkash_merchant_number_activation')->first()->value === '1')--}}
                                                                {{--Make Payment--}}
                                                            {{--@elseif (\App\BusinessSetting::where('type', 'bkash_personal_number_activation')->first()->value === '1')--}}
                                                                {{--Send Money--}}
                                                            {{--@endif--}}
                                                        {{--</span>--}}
                                                    {{--</div>--}}
                                                    {{--<div style="color: #020101;" class="mt-1">--}}
                                                        {{--<span style="color: #020101;">--}}
                                                            {{--Number--}}
                                                        {{--</span>--}}
                                                        {{--:--}}
                                                        {{--<span style="font-weight: 700; color: #fe540f;">--}}
                                                            {{--@if (\App\BusinessSetting::where('type', 'bkash_merchant_number_activation')->first()->value === '1')--}}
                                                                {{--{{ \App\BusinessSetting::where('type', 'bkash_merchant_number')->first()->value }}--}}
                                                            {{--@elseif (\App\BusinessSetting::where('type', 'bkash_personal_number_activation')->first()->value === '1')--}}
                                                                {{--{{ \App\BusinessSetting::where('type', 'bkash_personal_number')->first()->value }}--}}
                                                            {{--@endif--}}
                                                            {{--[@if (\App\BusinessSetting::where('type', 'bkash_merchant_number_activation')->first()->value === '1')--}}
                                                                    {{--Merchant--}}
                                                                {{--@elseif (\App\BusinessSetting::where('type', 'bkash_personal_number_activation')->first()->value === '1')--}}
                                                                    {{--Personal--}}
                                                                {{--@endif]--}}
                                                        {{--</span>--}}
                                                    {{--</div>--}}
                                                    {{--<div style="color: #020101;" class="mt-1">--}}
                                                        {{--<span style="color: #020101;">Reference</span>--}}
                                                        {{--:--}}
                                                        {{--<span style="font-weight: 700; color: #fe540f;">{{ session()->get('order_code') }}</span>--}}
                                                    {{--</div>--}}
                                                    {{--<div style="color: #020101;" class="mt-1">--}}
                                                        {{--<span style="color: #020101;">Amount</span>--}}
                                                        {{--:--}}
                                                        {{--<span style="font-weight: 700; color: #fe540f;">--}}
                                                            {{--@if (\App\BusinessSetting::where('type', 'bkash_merchant_number_activation')->first()->value === '1')--}}
                                                                {{--{{ single_price($total) }}--}}
                                                            {{--@elseif (\App\BusinessSetting::where('type', 'bkash_personal_number_activation')->first()->value === '1')--}}
                                                                {{--{{ single_price($total + (($total * 1.85)/100)) }}--}}
                                                            {{--@endif--}}
                                                        {{--</span>--}}
                                                    {{--</div>--}}


                                                {{--</div>--}}
                                            {{--</div>--}}

                                            <div class="row">
                                                @if(\App\BusinessSetting::where('type', 'paypal_payment')->first()->value == 1)
                                                    <div class="col-6">
                                                        <label class="payment_option mb-4" data-toggle="tooltip" data-title="Paypal">
                                                            <input type="radio" id="" name="payment_option" value="paypal" checked>
                                                            <span>
                                                                <img loading="lazy"  src="{{ asset('frontend/images/icons/cards/paypal.png')}}" class="img-fluid">
                                                            </span>
                                                        </label>
                                                    </div>
                                                @endif
                                                @if(\App\BusinessSetting::where('type', 'stripe_payment')->first()->value == 1)
                                                    <div class="col-6">
                                                        <label class="payment_option mb-4" data-toggle="tooltip" data-title="Stripe">
                                                            <input type="radio" id="" name="payment_option" value="stripe" checked>
                                                            <span>
                                                                <img loading="lazy"  src="{{ asset('frontend/images/icons/cards/stripe.png')}}" class="img-fluid">
                                                            </span>
                                                        </label>
                                                    </div>
                                                @endif
                                                @if(\App\BusinessSetting::where('type', 'sslcommerz_payment')->first()->value == 1)
                                                    <div class="col-6">
                                                        <label class="payment_option mb-4" data-toggle="tooltip" data-title="sslcommerz">
                                                            <input type="radio" id="" name="payment_option" value="sslcommerz" checked>
                                                            <span>
                                                                <img loading="lazy"  src="{{ asset('frontend/images/icons/cards/sslcommerz.png')}}" class="img-fluid">
                                                            </span>
                                                        </label>
                                                    </div>
                                                @endif
                                                @if(\App\BusinessSetting::where('type', 'instamojo_payment')->first()->value == 1)
                                                    <div class="col-6">
                                                        <label class="payment_option mb-4" data-toggle="tooltip" data-title="Instamojo">
                                                            <input type="radio" id="" name="payment_option" value="instamojo" checked>
                                                            <span>
                                                                <img loading="lazy"  src="{{ asset('frontend/images/icons/cards/instamojo.png')}}" class="img-fluid">
                                                            </span>
                                                        </label>
                                                    </div>
                                                @endif
                                                @if(\App\BusinessSetting::where('type', 'razorpay')->first()->value == 1)
                                                    <div class="col-6">
                                                        <label class="payment_option mb-4" data-toggle="tooltip" data-title="Razorpay">
                                                            <input type="radio" id="" name="payment_option" value="razorpay" checked>
                                                            <span>
                                                                <img loading="lazy"  src="{{ asset('frontend/images/icons/cards/rozarpay.png')}}" class="img-fluid">
                                                            </span>
                                                        </label>
                                                    </div>
                                                @endif
                                                @if(\App\BusinessSetting::where('type', 'paystack')->first()->value == 1)
                                                    <div class="col-6">
                                                        <label class="payment_option mb-4" data-toggle="tooltip" data-title="Paystack">
                                                            <input type="radio" id="" name="payment_option" value="paystack" checked>
                                                            <span>
                                                                <img loading="lazy"  src="{{ asset('frontend/images/icons/cards/paystack.png')}}" class="img-fluid">
                                                            </span>
                                                        </label>
                                                    </div>
                                                @endif
                                                @if(\App\BusinessSetting::where('type', 'voguepay')->first()->value == 1)
                                                    <div class="col-6">
                                                        <label class="payment_option mb-4" data-toggle="tooltip" data-title="VoguePay">
                                                            <input type="radio" id="" name="payment_option" value="voguepay" checked>
                                                            <span>
                                                                <img loading="lazy"  src="{{ asset('frontend/images/icons/cards/vogue.png')}}" class="img-fluid">
                                                            </span>
                                                        </label>
                                                    </div>
                                                @endif
                                                @if(\App\BusinessSetting::where('type', 'cash_payment')->first()->value == 1)
                                                    <div class="col-6">
                                                        <label class="payment_option mb-4" data-toggle="tooltip" data-title="Cash on Delivery">
                                                            <input type="radio" id="" name="payment_option" value="cash_on_delivery" checked>
                                                            <span>
                                                                <img loading="lazy"  src="{{ asset('frontend/images/icons/cards/cod.png')}}" class="img-fluid">
                                                            </span>
                                                        </label>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    @if (Auth::check() && \App\BusinessSetting::where('type', 'wallet_system')->first()->value == 1)
                                        <div class="or or--1 mt-2">
                                            <span>or</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-xxl-6 col-lg-8 col-md-10 mx-auto">
                                                <div class="text-center bg-gray py-4">
                                                    <i class="fa"></i>
                                                    <div class="h5 mb-4">Your wallet balance : <strong>{{ single_price(Auth::user()->balance) }}</strong></div>
                                                    @if(Auth::user()->balance < $total)
                                                        <button type="button" class="btn btn-base-2" disabled>Insufficient balance</button>
                                                    @else
                                                        <button  type="button" onclick="use_wallet()" class="btn btn-base-1">Pay with wallet</button>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="row align-items-center pt-4">
                                <div class="col-6">
                                    <a href="{{ route('home') }}" class="link link--style-3">
                                        <i class="ion-android-arrow-back"></i>
                                        {{__('Return to shop')}}
                                    </a>
                                </div>
                                <div class="col-6 text-right">
                                    <button type="submit" class="btn btn-styled btn-base-1">{{__('Complete Order')}}</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-4 ml-lg-auto">
                        @include('frontend.partials.cart_summary')
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        function use_wallet(){
            $('input[name=payment_option]').val('wallet');
            $('#checkout-form').submit();
        }
    </script>
@endsection
