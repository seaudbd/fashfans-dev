@extends('Layouts.frontend')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mx-auto">
                <div style="font-size: 12px; margin-bottom: 15px;">
                    <a href="{{ url('/') }}" class="text-decoration-none text-dark">Home</a> > <a href="{{ url('shop') }}" class="text-decoration-none text-dark">Shop</a> > <span style="color: #b1b0b9;">Checkout</span>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-11 col-xxl-10 mx-auto">

                        @if($cartItems)
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-8 pe-lg-5">


                                    <form id="checkout_form">
                                        <div class="mb-4 text-center" style="font-weight: 600; color: #020101;">Shipping Information</div>

                                        <div class="row mb-4">
                                            <div class="col-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                                    <label for="name">Name</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                                                    <label for="name">Email</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-4">
                                            <textarea class="form-control" id="address" name="address" placeholder="Address"></textarea>
                                            <label for="address">Address</label>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-6">
                                                <div class="form-floating">
                                                    <select class="form-select" id="country" name="country">
                                                        <option value="">Select Country</option>
                                                        @foreach($countries as $country)
                                                            <option value="{{ $country->name }}">{{ $country->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <label for="country">Country</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="city" name="city" placeholder="City">
                                                    <label for="city">City</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="postal_code" name="postal_code" placeholder="Postal Code">
                                                    <label for="postal_code">Postal Code</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
                                                    <label for="phone">Phone</label>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="mb-4 text-center" style="font-weight: 600; color: #020101;">Payment Method</div>

                                        {{--<div class="row">--}}
                                            {{--<div class="col-4">--}}
                                                {{--<img src="{{ asset('storage/images/application/bkash-logo.png') }}" class="img-fluid">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-8 pt-4">--}}
                                                {{--<span style="font-size: 18px; color: #020101;">bKash Number:</span> <span style="font-size: 20px; font-weight: 600; color: #b1b0b9;">{{ $bKashNumber }}</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}

                                        <div class="col text-danger" id="payment_method_error_message"></div>
                                        <div class="border mb-3 py-3 px-3">
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="form-check mb-2">
                                                        <input type="radio" class="form-check-input payment_method" id="payment_method_paypal" name="payment_method" value="PayPal">
                                                        <label class="form-check-label font-italic" for="payment_method_paypal" style="font-weight: 600;">
                                                            PayPal
                                                        </label>
                                                    </div>
                                                    <div style="color: #91a1a5; font-size: small; padding-left: 20px;">You will be redirected to PayPal website to complete your purchase securely.</div>
                                                </div>
                                                <div class="col-4">
                                                    <i class="fab fa-paypal fa-3x" style="color: #3b7bbf;"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border  py-3 px-3">
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input payment_method" id="payment_method_card" name="payment_method" value="Card">
                                                        <label class="form-check-label font-italic" for="payment_method_card" style="font-weight: 600;">
                                                            Debit or Credit Card
                                                        </label>
                                                    </div>
                                                    <div style="color: #91a1a5; font-size: small; padding-left: 20px;">Safe money transfer using Visa, Maestro, Discover, American Express.</div>
                                                </div>
                                                <div class="col-4">
                                                    <i class="fab fa-cc-visa fa-3x me-2" style="color: #192061;"></i>
                                                    <i class="fab fa-cc-mastercard fa-3x me-2" style="color: #ff5f00;"></i>
                                                    <i class="fab fa-cc-amex fa-3x me-2" style="color: #629F86;"></i>
                                                    <i class="fab fa-cc-discover fa-3x" style="color: #F9A021;"></i>
                                                </div>
                                            </div>
                                            <div class="row mt-3" id="payment_method_card_details">
                                                <div class="col">


                                                    <div class="input-group mb-4">
                                                        <div class="form-floating" style="width: 95%;">
                                                            <input autocomplete="off" class="form-control" type="text" name="card_number" id="card_number" placeholder="Card Number" style="border-right: none;">
                                                            <label for="card_number">Card Number</label>
                                                        </div>
                                                        <div class="input-group-text" style="width: 5%; font-size: small; border-left: none; background: none; justify-content: flex-end;"><i class="far fa-credit-card text-info"></i></div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="input-group">
                                                                <div class="input-group-text" style="width: 20%;">Expiry</div>
                                                                <div class="form-floating" style="width: 40%;">
                                                                    <input type="text" aria-label="month" class="form-control" name="expiry_month" id="expiry_month" placeholder="MM">
                                                                    <label for="expiry_month">MM</label>
                                                                </div>
                                                                <div class="form-floating" style="width: 40%;">
                                                                    <input type="text" aria-label="year" class="form-control" name="expiry_year" id="expiry_year" placeholder="YYYY">
                                                                    <label for="expiry_year">YYYY</label>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="input-group">
                                                                <div class="form-floating" style="width: 90%;">
                                                                    <input autocomplete="off" class="form-control" size="4" type="text" name="card_cvc" id="card_cvc" placeholder="CVC" style="border-right: none;">
                                                                    <label for="card_cvc">CVC Code</label>
                                                                </div>
                                                                <div class="input-group-text" style="width: 10%; font-size: small; border-left: none; background: none; cursor: pointer; justify-content: flex-end;"><i class="far fa-question-circle text-info" title="CVC CODE"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-5 text-end">
                                            <button type="submit" style="padding: 15px 100px; border-radius: 5px; border: none; background: linear-gradient(270deg, #FA4A6F 0%, #FFA7E7 100%); color: #ffffff;">Confirm Order</button>
                                        </div>
                                    </form>

                                </div>


                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 ps-lg-5">

                                    <div class="row mt-5 border rounded-top rounded-bottom">
                                        <div class="col">
                                            <div class="row px-3" style="background-color: #f1f1f1;">
                                                <div class="col py-3" style="font-size: 18px; font-weight: 600; color: #020101;">Summary</div>
                                                <div class="col py-3 text-end" style="color: #020101;">{{ count($cartItems) }} Item(s)</div>
                                            </div>

                                            @php
                                                $cartTotal = 0;
                                                $shippingCostTotal = 0;
                                                $taxTotal = 0;
                                            @endphp
                                            @foreach($cartItems as $key => $cartItem)
                                                <div class="row my-3">
                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-2 text-center">
                                                        <img src="{{ asset($cartItem->thumbnail_img) }}" class="img-thumbnail img-fluid">
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                                                        <div class="mb-1" style="color: #020101;">{{ $cartItem->name }} X {{ $cartItem->quantity }}</div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-2">
                                                        <div style="font-size: 18px; font-weight: 600; color: #FA4A6F;">${{ $cartItem->purchase_price * $cartItem->quantity }}</div>
                                                    </div>
                                                </div>
                                                @php
                                                    $cartTotal += $cartItem->purchase_price * $cartItem->quantity;
                                                    $shippingCostTotal += $cartItem->shipping_cost * $cartItem->quantity;
                                                    $taxTotal += $cartItem->tax * $cartItem->quantity;
                                                @endphp
                                            @endforeach




                                            <div class="row px-3 border-top">
                                                <div class="col py-3" style="color: #020101;">Sub-Total</div>
                                                <div class="col py-3 text-end" style="color: #020101;">${{ $cartTotal }}</div>
                                            </div>
                                            <div class="row border-top px-3 border-bottom">
                                                <div class="col py-3" style="color: #020101;">Shipping</div>
                                                <div class="col py-3 text-end" style="color: #020101;">${{ $shippingCostTotal }}</div>
                                            </div>
                                            <div class="row border-top px-3 border-bottom">
                                                <div class="col py-3" style="color: #020101;">Tax</div>
                                                <div class="col py-3 text-end" style="color: #020101;">${{ $taxTotal }}</div>
                                            </div>
                                            <div class="row border-bottom px-3">
                                                <div class="col py-3" style="font-weight: 600; color: #020101;">Total</div>
                                                <div class="col py-3 text-end" style="font-weight: 600; color: #020101;">${{ $cartTotal + $shippingCostTotal + $taxTotal }}</div>
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





    <script type="text/javascript">

        $(document).ready(function () {
            $('#payment_method_card_details').hide();
            $('#card_number').attr('disabled', true);
            $('#card_cvc').attr('disabled', true);
            $('#expiry_month').attr('disabled', true);
            $('#expiry_year').attr('disabled', true);
        });


        $(document).on('click', '.payment_method', function () {
            $('#card_number').val('').attr('disabled', true);
            $('#card_cvc').val('').attr('disabled', true);
            $('#expiry_month').val('').attr('disabled', true);
            $('#expiry_year').val('').attr('disabled', true);
            if ($(this).val() === 'Card') {
                $('#card_number').val('').removeAttr('disabled');
                $('#card_cvc').val('').removeAttr('disabled');
                $('#expiry_month').val('').removeAttr('disabled');
                $('#expiry_year').val('').removeAttr('disabled');
                $('#payment_method_card_details').show(1000);
            } else {
                $('#payment_method_card_details').hide(1000);
            }
        });

        $(document).on('submit', '#checkout_form', function (event) {
            event.preventDefault();
            let formData = new FormData(this);
            formData.append('_token', '{{ csrf_token() }}');

            $.ajax({
                method: 'post',
                url: '{{ url('execute/checkout') }}',
                data: formData,
                processData: false,
                contentType: false,
                success: function (result) {
                    console.log(result);
                    if (result.success === false) {
                        $('#payment_method_error_message').text(result.message);
                    } else if (result.success === true) {
                        location = '{{ url('checkout/success') }}/' + result.message.id;
                    }
                },
                error: function (xhr) {
                    console.log(xhr);
                    if (xhr.hasOwnProperty('responseJSON')) {
                        if (xhr.responseJSON.hasOwnProperty('errors')) {
                            $.each(xhr.responseJSON.errors, function (key, value) {

                                if (key !== 'payment_method' && key !== 'card_number' && key !== 'expiry_month' && key !== 'expiry_year' && key !== 'card_cvc') {
                                    $('#' + key).after('<div class="invalid-feedback"></div>');
                                    $('#' + key).addClass('is-invalid');
                                    $.each(value, function (k, v) {
                                        $('#' + key).parent().find('.invalid-feedback').append(v + ' ');
                                    });
                                } else {

                                    if (key === 'card_number' || key === 'expiry_month' || key === 'expiry_year' || key === 'card_cvc') {
                                        if ($('#' + key).parent().parent().parent().find('.invalid-feedback').length === 0) {
                                            $('#' + key).parent().parent().after('<div class="invalid-feedback d-block"></div>');
                                        }
                                        $('#' + key).addClass('is-invalid');
                                        $('#' + key).parent().parent().find('.input-group-text').addClass('input_group_text_invalid_border_color');
                                        $.each(value, function (k, v) {
                                            $('#' + key).parent().parent().parent().find('.invalid-feedback').append('<p>' + v + '</p>');
                                        });
                                    }
                                    if (key === 'payment_method') {

                                        $('#payment_method_error_message').text('Please Select a Payment Method');
                                    }

                                }

                            });
                        }
                    }
                }
            });
        });
    </script>




@endsection