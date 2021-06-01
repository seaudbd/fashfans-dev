@extends('Layouts.frontend')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mx-auto">
                <div style="font-size: 12px; margin-bottom: 15px;">
                    <a href="{{ url('/') }}" class="text-decoration-none text-dark">Home</a> > <a href="{{ url('shop') }}" class="text-decoration-none text-dark">Shop</a> > <span style="color: #b1b0b9;">Cart</span>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-11 col-xxl-10 mx-auto">

                        @if($cartItems)
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-8 pe-lg-5">
                                    @php
                                        $cartTotal = 0;
                                    @endphp
                                    @foreach($cartItems as $key => $cartItem)
                                        <div class="row mb-5">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-3 text-center">
                                                <img src="{{ asset('storage/' . $cartItem->thumbnail_img) }}" class="img-thumbnail img-fluid">
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                                                <div class="mb-1" style="font-size: 20px; font-weight: 600; color: #020101;">{{ $cartItem->name }}</div>
                                                <div class="mb-3" style="font-size: 14px; color: #b1b0b9;">{{ substr($cartItem->meta_description, 0, 100) }}</div>
                                                <div class="mb-2">
                                                    <div class="d-inline-block me-5">
                                                        <div style="font-size: 14px; color: #b1b0b9;">Size</div>
                                                        <select style="background-color: #f1f1f1; padding: 2px 10px; font-size: 14px; font-weight: 800; border-color: #cccccc;">
                                                            <option value="M">M</option>
                                                            <option value="L">L</option>
                                                            <option value="XL">XL</option>
                                                            <option value="XXL">XXL</option>
                                                        </select>
                                                    </div>
                                                    <div class="d-inline-block">
                                                        <div style="font-size: 14px; color: #b1b0b9;">Color</div>
                                                        <select style="background-color: #f1f1f1; padding: 2px 10px; font-size: 14px; font-weight: 800; border-color: #cccccc;">
                                                            <option value="Red">Red</option>
                                                            <option value="Green">Green</option>
                                                            <option value="Blue">Blue</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div>
                                                    <div style="font-size: 14px; color: #b1b0b9;" class="mb-1">Quantity</div>
                                                    <select style="background-color: #f1f1f1; padding: 2px 10px; font-size: 14px; font-weight: 800; border-color: #cccccc;">
                                                        <option>1</option>
                                                        <option>2</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-2">
                                                <div style="font-size: 18px; font-weight: 600; color: #FA4A6F;">${{ $cartItem->purchase_price }}</div>
                                                <div style="margin-top: 139px;"><i class="far fa-trash-alt" style="font-size: 20px;"></i></div>
                                            </div>
                                        </div>

                                        <div style="border-bottom: 1px solid #f1f1f1;" class="mb-5"></div>
                                        @php
                                            $cartTotal += $cartItem->purchase_price;
                                        @endphp
                                    @endforeach
                                </div>


                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 ps-lg-5">
                                    <div class="row border rounded-top rounded-bottom">
                                        <div class="col">
                                            <div class="row px-3" style="background-color: #f1f1f1;">
                                                <div class="col py-3" style="font-size: 18px; font-weight: 600; color: #020101;">Summary</div>
                                                <div class="col py-3 text-end" style="color: #020101;">{{ count($cartItems) }} Item(s)</div>
                                            </div>
                                            <div class="row px-3">
                                                <div class="col py-3" style="color: #020101;">Sub-Total</div>
                                                <div class="col py-3 text-end" style="color: #020101;">${{ $cartTotal }}</div>
                                            </div>
                                            <div class="row px-3 border-bottom">
                                                <div class="col py-3" style="color: #020101;">Shipping</div>
                                                <div class="col py-3 text-end" style="color: #020101;">$10</div>
                                            </div>
                                            <div class="row border-bottom px-3">
                                                <div class="col py-3" style="font-weight: 600; color: #020101;">Total</div>
                                                <div class="col py-3 text-end" style="font-weight: 600; color: #020101;">${{ $cartTotal + 10 }}</div>
                                            </div>
                                            <div class="row">
                                                <div class="col py-5 text-center">
                                                    <button type="button" style="height: 57px; width: 248px; border-radius: 5.65px; border: none; background: linear-gradient(270deg, #FA4A6F 0%, #FFA7E7 100%); color: #ffffff;" id="go_to_checkout">Checkout</button>
                                                    <div style="color: #3B5998;" class="mt-2">30 Days free return and refund</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        @else
                            <div class="alert alert-warning text-center">No Item Found!</div>

                        @endif


                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="mb-5"></div>






@endsection