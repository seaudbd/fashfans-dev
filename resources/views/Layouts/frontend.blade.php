<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('storage/images/application/favicon.png') }}">
    <title>FashFans - Online Shopping</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>

    <style type="text/css">
        body {
            font-family: 'Quicksand';
        }


        label {
            color: #636363;
            font-size: 14px;
        }

        .form-control {
            color: #636363;
            font-size: 14px;
        }

        .form-select {
            color: #636363;
            font-size: 14px;
        }

        input[type="text"]:focus, input[type="password"]:focus, select:focus, textarea:focus {
            border-color: rgba(82, 168, 236, 0.8);
            outline: none !important;
            -webkit-box-shadow: none !important;
            -moz-box-shadow: none !important;
            box-shadow: none !important;
        }

        .form-floating>.form-select {
            padding-top: 1.625rem;
            padding-bottom: .25rem;
            color: #636363;
        }

        .input_group_text_invalid_border_color {
            border-color: #dc3545 !important;
        }


        .search_for_anything::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: #cdcdcd;
            font-weight: 500;
            opacity: 1; /* Firefox */
        }

        .search_for_anything:-ms-input-placeholder { /* Internet Explorer 10-11 */
            color: #cdcdcd;
            font-weight: 500;
        }

        .search_for_anything::-ms-input-placeholder { /* Microsoft Edge */
            color: #cdcdcd;
            font-weight: 500;
        }

        .col-xxl-12 {
            max-width: 1400px !important;
        }
        .dropdown_content {
            display: none;
            position: absolute;
            background-color: #ffffff;
            width: 80%;
            left: 10%;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            z-index: 1;
        }
        .nav-item:hover .dropdown_content {
            display: block;
        }

        .nav-link:hover {
            color: darkblue !important;
        }


        .content_column {
            float: left;
            width: auto;
            padding: 50px 15px;
            background-color: #fff;
            height: auto;
        }


        .content_column a {
            float: none;
            color: black;
            padding: 10px 0;
            text-decoration: none;
            display: block;
            text-align: left;
        }


        .content_column a:hover {
            background-color: #ffffff;
            color: darkblue;
        }


        .content_row:after {
            content: "";
            display: table;
            clear: both;
        }

        .popover {
            max-width: 350px !important;
            border: 1px solid #d8d8d8 !important;
            border-radius: 5px !important;
            font-family: 'Quicksand';
        }

        .popover-body {
            padding: 0 0 !important;
            color: #212529;
        }

    </style>
</head>
<body style="padding-top: 80px;">

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-xl-12 col-xxl-11 mx-auto">
            <nav class="navbar navbar-expand-lg fixed-top navbar-light" style="padding: 20px 60px; background-color: #ffffff;">
                <div class="container-fluid">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('storage/images/application/logo_1.png') }}" alt="" width="140" height="25" class="d-inline-block align-top">
                    </a>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            @foreach ($categories as $key => $category)
                                <li class="nav-item">
                                    <a class="nav-link" style="font-size: 13px; font-weight: 800; color: rgba(19,2,2,0.95);" href="#">{{ $category->name }}</a>
                                    <div class="dropdown_content">
                                        <div class="content_row">
                                            @foreach($category->subcategories as $subcategory)
                                                <div class="content_column">
                                                    <div style="font-size: 13px; font-weight: 800; color: #000000; margin-bottom: 15px;">{{ $subcategory->name }}</div>
                                                    @foreach($subcategory->subsubcategories as $subsubcategory)
                                                        <a href="{{ url('shop/' . $subsubcategory->id) }}" style="font-size: 13px; font-weight: 600; color: #000000;">{{ $subsubcategory->name }}</a>
                                                    @endforeach
                                                </div>
                                            @endforeach
                                        </div>

                                    </div>
                                </li>
                            @endforeach

                        </ul>
                        <div class="d-flex">
                            <div class="input-group me-4">
                                <input type="text" class="form-control search_for_anything" style="border-right: 0;" placeholder="Search for anything" aria-label="Search for anything" aria-describedby="search_for_anything">
                                <span class="input-group-text bg-white" style="border-left: 0;" id="search_for_anything"><img src="{{ asset('storage/images/application/search.png') }}" width="21" height="20"></span>
                            </div>
                            <div class="me-4 pt-1"><img src="{{ asset('storage/images/application/categories.png') }}" width="20" height="20"></div>
                            <div class="me-3 pt-1">
                                <div id="cart_icon" style="cursor: pointer;"><i class="fas fa-shopping-cart"></i></div>
                                <div id="cart_icon_hidden_area"></div>
                                <div id="cart_counter_label" style="margin-top: -35px; margin-left: 20px; background-color: gainsboro; padding: 0 8px; border-radius: 5px; font-size: 12px;">{{ $cartCounter }}</div>
                            </div>
                            <div class="me-4 pt-1">
                                <img src="{{ asset('storage/images/application/love.png') }}" width="20" height="20">
                            </div>
                            <div class="me-4 pt-1">
                                <img src="{{ asset('storage/images/application/user.png') }}" width="20" height="20" id="user_icon" style="cursor: pointer;">
                            </div>
                            <div class="pt-1"><img src="{{ asset('storage/images/application/logo_5.png') }}" width="20" height="20"></div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>





@yield('content')


<div class="container-fluid" style="background-color: #f8f8f8;">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 px-5 py-5 mx-auto">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="py-2" style="color: #4a4a4a; font-size: 20px;">FashFans</div>
                    <div class="py-2" style="color: #4a4a4a;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla gravida.</div>
                    <div class="py-2">
                        <i class="fab fa-instagram me-3"></i>
                        <i class="fab fa-facebook-f me-3"></i>
                        <i class="fab fa-pinterest-p me-3"></i>
                        <i class="fab fa-twitter"></i>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                            <ul class="list-unstyled">
                                <li style="color: #4a4a4a;">Home</li>
                                <li style="color: #4a4a4a;">Shop</li>
                                <li style="color: #4a4a4a;">Categories</li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                            <ul class="list-unstyled">
                                <li style="color: #4a4a4a;">Designers</li>
                                <li style="color: #4a4a4a;">Fashion</li>
                                <li style="color: #4a4a4a;">Accessories</li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                            <ul class="list-unstyled">
                                <li style="color: #4a4a4a;">Cart</li>
                                <li style="color: #4a4a4a;">Saved Items</li>
                                <li style="color: #4a4a4a;">Become a Brand</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-bottom: 70px;">
                <div class="col text-center">
                    <span style="color:#b1b0b9; font-size: 12px;">&copy; FashFans {{ date('Y') }}</span>
                </div>
            </div>
        </div>
    </div>
</div>





<style type="text/css">
    .btn-google {
        color: #fff;
        background-color: #dd4b39;
        border-color: #dd4b39;
    }

    .btn-facebook {
        color: #fff;
        background-color: #3b5998;
        border-color: #3b5998;
    }

    .btn-twitter {
        color: #fff;
        background-color: #00aced;
        border-color: #00aced;
    }

    .btn-icon--2 {
        position: relative;
        padding-left: 40px !important;
    }

    .btn-styled {
        padding: 0.6rem 1.5rem;
        font-weight: 600;
        letter-spacing: 0;
        text-transform: capitalize;
    }
    .btn-block {
        display: block;
        width: 100%;
    }

    .btn-icon--2 .icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        left: 0;
        top: 0;
        width: 40px;
        height: 100%;
        background: rgba(0, 0, 0, 0.2);
    }
</style>

<div class="modal" tabindex="-1" id="go_to_checkout_modal">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Log in</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="row mt-3">
                    <div class="col pe-5">
                        <div class="card border-0">
                            <div class="card-body">
                                <div id="login_form_message" class="text-center text-danger"></div>
                                <form id="login_form">
                                    <div class="form-floating mb-4">
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="form-floating mb-5">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                        <label for="password">Password</label>
                                    </div>
                                    <div class="row">
                                        <div class="col pt-2"><a href="#" style="text-decoration: none;">Forgot Password?</a></div>
                                        <div class="col text-end"><button type="submit" class="btn btn-primary" style="background-color: #377dff !important; border-color: #377dff !important; border-radius: 2px !important;">Log in</button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col ps-5">
                        <div class="card border-0">
                            <div class="card-body">
                                <div style="width: 100%; text-align: center; border-bottom: 1px solid #dee2e6; line-height: 0.1em; margin: 10px 0 20px;"><span style="background:#fff; padding:0 10px; ">Or Log in with</span></div>


                                <a href="#" class="btn btn-styled btn-block btn-google btn-icon--2 btn-icon-left px-4 my-4">
                                    <i class="icon fab fa-google"></i> Google
                                </a>
                                <a href="http://fashfans.testingscb.com/social-login/redirect/facebook" class="btn btn-styled btn-block btn-facebook btn-icon--2 btn-icon-left px-4 my-4">
                                    <i class="icon fab fa-facebook-f"></i> Facebook
                                </a>

                                <a href="http://fashfans.testingscb.com/social-login/redirect/twitter" class="btn btn-styled btn-block btn-twitter btn-icon--2 btn-icon-left px-4 my-4">
                                    <i class="icon fab fa-twitter"></i> Twitter
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-4">
                <div class="col">
                    <div style="width: 100%; text-align: center; border-bottom: 1px solid #dee2e6; line-height: 0.1em; margin: 10px 0 20px;"><span style="background:#fff; padding:0 10px; ">Or</span></div>
                    <div class="mt-3 text-center"><button type="button" class="btn btn-primary" id="guest_checkout" style="background-color: #377dff !important; border-color: #377dff !important; border-radius: 2px !important;">Guest Checkout</button></div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="modal" tabindex="-1" id="user_login_modal" >
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="border: 0; border-radius: 5px;">

            <div id="user_login_modal_content">
                <div class="modal-header" style="border-bottom: 0;">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center text-white fw-bold" style="font-size: 30px;">FashFans</div>

                    <div class="mt-5 text-center">
                        <a href="{{ url('auth/facebook/redirect') }}" class="btn btn-outline-info" style="border-color: #7d80a27a; color: #ffffff; padding: 8px 35px; font-size: 13px;">
                            <div><i class="fab fa-facebook-f" style="color: #3b5998; font-size: 80px;"></i></div>
                            <div class="mt-2">LOG IN WITH FACEBOOK</div>
                        </a>
                    </div>
                    <div class="text-center mt-2"><span style="font-size: 10px; color: #ffffff;">OR</span></div>
                    <div class="mt-2 text-center">
{{--                        <a href="{{ url('auth/google/redirect') }}" class="btn btn-outline-info" style="border-color: #ff9191; color: #ffffff; padding: 8px 35px; font-size: 13px;"><i class="fab fa-google me-3" style="color: #4285F4; font-size: 20px;"></i> LOG IN WITH GOOGLE</a>--}}
                        <a href="{{ url('auth/google/redirect') }}" class="btn btn-outline-info" style="border-color: #ff979166; color: #ffffff; padding: 8px 35px; font-size: 13px;">
                            <div><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="LgbsSe-Bz112c"><g><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path><path fill="none" d="M0 0h48v48H0z"></path></g></svg></div>
                            <div class="mt-2">LOG IN WITH GOOGLE</div>
                        </a>
                    </div>

                    <div class="mb-5"></div>
                    <hr>
                    <div class="mt-3 text-center">
                        <span style="color: #ffffff; font-size: 12px;">TERMS OF USE</span>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>

<style type="text/css">
    #user_login_modal_content {

        background: linear-gradient(315deg, #FA4A6F 0%, #FA4A6F 41.34%, #FFA7E7 78.78%, #FFA7E7 100%);


    }

</style>



<script type="text/javascript">

    $(document).on('click', '#user_icon', function () {
        $.ajax({
            method: 'get',
            url: '{{ url('is/user/logged/in') }}',
            success: function (result) {
                console.log(result);
                if (result.is_user_logged_in === true) {
                    location = '{{ url('account/dashboard') }}';
                } else {
                    $('#user_login_modal').modal('show');
                }
            },
            error: function (xhr) {
                console.log(xhr)
            }
        });
    });

    let popover;
    $(document).on('click', '#cart_icon', function () {
        $.ajax({
            method: 'get',
            url: '{{ url('get/cart/items') }}',
            success: function (result) {
                console.log(result);
                let cartContent;
                if ($.isEmptyObject(result)) {
                    cartContent = '<div class="container-fluid"><div class="row bg-light"><div class="col-9 py-2"><span style="font-weight: 600;">No Items Found</span></div><div class="col-3 text-end py-2"><button type="button" class="btn-close cart_close" aria-label="Close"></button></div></div></div></div>';
                } else {
                    cartContent = '<div class="container-fluid"><div class="row bg-light"><div class="col-4 py-2"><span style="font-weight: 600;">' + result.length + ' Item(s)</span></div><div class="col-4 text-center py-2"><a href="{{ url('cart') }}" style="text-decoration: none !important;">View Cart</a></div><div class="col-4 text-end py-2"><button type="button" class="btn-close cart_close" aria-label="Close"></button></div></div></div>';
                    cartContent += '<div style="max-height: 600px; overflow-y: auto;">';
                    let orderTotal = 0;
                    $.each(result, function (key, product) {
                        let imgPath = '{{ asset('storage') }}/' + product.thumbnail_img;
                        cartContent += '<div class="container-fluid border-bottom pb-3 mt-4"><div class="row"><div class="col-4"><img src="' + imgPath + '" height="100" width="100%" class="border rounded px-2 py-2"></div><div class="col-8"><div class="row"><div class="col-9 p-0"><div style="font-weight: 600; color: #020101;">' + product.name + '</div></div><div class="col-3 text-end"><div style="color: #b1b0b9;">$' + product.unit_price + '</div></div></div><div class="row mt-3"><div class="col-9 p-0"><select style="background-color: #f1f1f1; padding: 2px 10px; font-size: 14px; font-weight: 800; border-color: #cccccc;"><option>1</option><option>2</option></select></div><div class="col-3 text-end"><i class="far fa-trash-alt" style="font-size: 20px;"></i></div></div></div></div></div>';
                        orderTotal += parseFloat(product.purchase_price);
                    });
                    cartContent += '</div>';
                    cartContent += '<div class="container-fluid bg-white"><div class="row bg-light"><div class="col py-2"><span style="font-weight: 600; color: #020101;">Order Total</span></div><div class="col py-2 text-end"><span style="color: #020101; font-weight: 600;">$' + orderTotal + '</span></div></div><div class="row mt-3"><div class="col text-center"><button type="button" id="go_to_checkout" style="height: 57px; width: 248px; border-radius: 5.65px; border: none; background: linear-gradient(270deg, #FA4A6F 0%, #FFA7E7 100%); color: #ffffff;">Checkout</button></div></div><div class="row mt-2"><div class="col pb-3 text-center"><span style="color: #3B5998;">30 Days free return and refund</span></div></div></div>';
                }

                popover = new bootstrap.Popover(document.querySelector('#cart_icon_hidden_area'), {
                    container: 'body',
                    trigger: 'manual',
                    html: true,
                    title: '',
                    sanitize: false,
                    content: cartContent,
                    placement: 'bottom'
                });
                popover.update();
                popover.show();



            },
            error: function (xhr) {
                console.log(xhr);
            }
        });
    });

    $(document).on('click', '.cart_close', function () {
        popover.hide();
    });



    $(document).on('click', '#go_to_checkout', function () {
        if (popover !== undefined) {
            popover.hide();
        }

        $.ajax({
            method: 'get',
            url: '{{ url('is/user/logged/in') }}',
            success: function (result) {
                console.log(result);
                if (result.is_user_logged_in === true) {
                    location = '{{ url('checkout') }}';
                } else {
                    $('#user_login_modal').modal('show');
                }
            },
            error: function (xhr) {
                console.log(xhr)
            }
        });
    });

    $(document).on('click', '#guest_checkout', function () {
        $.ajax({
            method: 'get',
            url: '{{ url('checkout/as/guest') }}',
            success: function (result) {
                console.log(result);
                location = '{{ url('checkout') }}';
            },
            error: function (xhr) {
                console.log(xhr)
            }
        });
    });



</script>

</body>
</html>
