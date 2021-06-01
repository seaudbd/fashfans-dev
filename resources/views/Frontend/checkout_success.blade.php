@extends('Layouts.frontend')
@section('content')

    <div class="container-fluid">

        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-8 col-xxl-6 mx-auto">


                <div class="row mt-3">
                    <div class="col">
                        Congrats! Your Order is Confirmed.
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        Hi <span class="fw-bold">{{ $order->shipping_address['name'] }}</span>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col text-justify">
                        Thank you so much for shopping with us. We will email you the order confirmation soon. Estimated delivery: {{ date('F d, Y', strtotime('+7 days', strtotime(date('Y-m-d')))) }} - {{ date('F d, Y', strtotime('+10 days', strtotime(date('Y-m-d')))) }}.
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        Order Number: <span class="fw-bold">{{ $order->code }}</span>
                        <p><a href="{{ url('/') }}">Track My Order</a></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        @php
                            $orderTotal = 0;
                            $taxTotal = 0;
                            $shippingTotal = 0;
                        @endphp


                        @foreach($order->orderDetails as $key => $orderDetail)
                            <div class="row my-3">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-2 text-center">
                                    <img src="{{ asset('storage/' . $orderDetail->product->thumbnail_img) }}" class="img-thumbnail img-fluid">
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                                    <div class="mb-1" style="color: #020101;">{{ $orderDetail->product->name }} X {{ $orderDetail->quantity }}</div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-2 text-end">
                                    <div style="font-size: 18px; font-weight: 600; color: #FA4A6F;">${{ $orderDetail->product->purchase_price * $orderDetail->quantity }}</div>
                                </div>
                            </div>
                            @php
                                $orderTotal += $orderDetail->price;
                                $taxTotal += $orderDetail->tax;
                                $shippingTotal += $orderDetail->shipping_cost;
                            @endphp
                        @endforeach




                        <div class="row px-3 border-top">
                            <div class="col py-3" style="color: #020101;">Sub-Total</div>
                            <div class="col py-3 text-end" style="color: #020101;">${{ $orderTotal }}</div>
                        </div>
                        <div class="row border-top px-3 border-bottom">
                            <div class="col py-3" style="color: #020101;">Shipping</div>
                            <div class="col py-3 text-end" style="color: #020101;">${{ $shippingTotal }}</div>
                        </div>
                        <div class="row border-top px-3 border-bottom">
                            <div class="col py-3" style="color: #020101;">Tax</div>
                            <div class="col py-3 text-end" style="color: #020101;">${{ $taxTotal }}</div>
                        </div>
                        <div class="row border-bottom px-3">
                            <div class="col py-3" style="font-weight: 600; color: #020101;">Total</div>
                            <div class="col py-3 text-end" style="font-weight: 600; color: #020101;">${{ $orderTotal + $shippingTotal + $taxTotal }}</div>
                        </div>
                    </div>

                </div>












            </div>
        </div>
    </div>
    <div class="mt-3"></div>






@endsection
