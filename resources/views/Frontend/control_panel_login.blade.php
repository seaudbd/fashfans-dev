<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link name="favicon" type="image/x-icon" href="{{asset('img/favicon.png')}}" rel="shortcut icon" />

    <title>{{ config('app.name', 'Laravel') }} | Login</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!--Font Awesome [ OPTIONAL ]-->
    <link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <!--active-shop Stylesheet [ REQUIRED ]-->
    <link href="{{ asset('css/active-shop.min.css')}}" rel="stylesheet">

    <!--active-shop Premium Icon [ DEMONSTRATION ]-->
    <link href="{{ asset('css/demo/active-shop-demo-icons.min.css')}}" rel="stylesheet">

    <!--Demo [ DEMONSTRATION ]-->
    <link href="{{ asset('css/demo/active-shop-demo.min.css') }}" rel="stylesheet">

    <!--Theme [ DEMONSTRATION ]-->
    <link href="{{ asset('css/themes/type-c/theme-navy.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">



    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--jQuery [ REQUIRED ]-->
    <script src=" {{asset('js/jquery.min.js') }}"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>


    <!--active-shop [ RECOMMENDED ]-->
    <script src="{{ asset('js/active-shop.min.js') }}"></script>

    <!--Alerts [ SAMPLE ]-->
    <script src="{{asset('js/demo/ui-alerts.js') }}"></script>



</head>
<body>
@php
    $generalsetting = \App\Models\GeneralSetting::first();
@endphp
<div id="container" class="blank-index"
     @if ($generalsetting->admin_login_background != null)
     style="background-image:url('{{ asset($generalsetting->admin_login_background) }}');"
     @else
     style="background-image:url('{{ asset('img/bg-img/login-bg.jpg') }}');"
        @endif>
    <div class="cls-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel">
                        <div class="panel-body pad-no">
                            @php
                                $generalsetting = \App\Models\GeneralSetting::first();
                            @endphp

                            <div class="flex-row">
                                <div class="flex-col-xl-6 blank-index d-flex align-items-center justify-content-center"
                                     @if ($generalsetting->admin_login_sidebar != null)
                                     style="background-image:url('{{ asset($generalsetting->admin_login_sidebar) }}');"
                                     @else
                                     style="background-image:url('{{ asset('img/bg-img/login-box.jpg') }}');"
                                        @endif>

                                </div>
                                <div class="flex-col-xl-6">
                                    <div class="pad-all">
                                        <div class="text-center">
                                            <br>
                                            @if($generalsetting->logo != null)
                                                <img loading="lazy"  src="{{ asset($generalsetting->logo) }}" class="" height="44">
                                            @else
                                                <img loading="lazy"  src="{{ asset('frontend/images/logo/logo.png') }}" class="" height="44">
                                            @endif

                                            <br><br>

                                        </div>

                                        <div id="login_form_message" class="text-danger text-center" style="height: 50px;"></div>

                                        <form id="login_form">

                                            <div class="form-group">
                                                <input id="email" type="email" class="form-control" name="email" autofocus placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="checkbox pad-btm text-left">
                                                        <input class="magic-checkbox" type="checkbox" id="remember_me">
                                                        <label for="demo-form-checkbox">
                                                            {{ __('Remember Me') }}
                                                        </label>
                                                    </div>
                                                </div>
                                                {{--@if(env('MAIL_USERNAME') != null && env('MAIL_PASSWORD') != null)--}}
                                                    {{--<div class="col-sm-6">--}}
                                                        {{--<div class="checkbox pad-btm text-right">--}}
                                                            {{--<a href="{{ route('password.request') }}" class="btn-link">{{__('Forgot password')}} ?</a>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--@endif--}}
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                                {{ __('Login') }}
                                            </button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script language="JavaScript">


    $(document).on('submit', '#login_form', function(event) {
        event.preventDefault();

        $('#login_form_submit').addClass('disabled');
        $('#login_form_submit_text').addClass('sr-only');
        $('#login_form_submit_processing').removeClass('sr-only');
        $('#login_form_message').empty().removeClass('mb-3');

        let formData = new FormData($('#login_form')[0]);

        formData.append('_token', '{{ csrf_token() }}');
        formData.append('remember_me', $('#remember_me').prop('checked') ? 1 : 0);
        $.ajax({
            method: 'post',
            url: '{{ url('authenticate/admin/login') }}',
            data: formData,
            contentType: false,
            processData: false,
            cache: false,
            global: false,
            success: function (result) {
                console.log(result);
                $('#login_form_submit').removeClass('disabled');
                $('#login_form_submit_text').removeClass('sr-only');
                $('#login_form_submit_processing').addClass('sr-only');
                if (result.success === true) {
                    location = '{{ url('admin/dashboard') }}';
                } else {
                    $('#login_form_message').text(result.message).addClass('mb-3');
                }
            },
            error: function (xhr) {
                console.log(xhr);
                $('#login_form_submit').removeClass('disabled');
                $('#login_form_submit_text').removeClass('sr-only');
                $('#login_form_submit_processing').addClass('sr-only');
                if (xhr.responseJSON.hasOwnProperty('errors')) {
                    if (xhr.responseJSON.errors.hasOwnProperty('email') || xhr.responseJSON.errors.hasOwnProperty('password')) {
                        $('#login_form_message').text('Unauthorized Access!').addClass('mb-3');
                    }
                }
            }
        });


    });
</script>




</body>
</html>



























