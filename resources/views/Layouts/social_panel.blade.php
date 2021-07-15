<!DOCTYPE html>
@if(App\Models\Language::where('code', Session::get('locale', Config::get('app.locale')))->first()->rtl == 1)
    <html dir="rtl">
@else
    <html>
@endif
<head>

@php
    $seosetting = App\Models\SeoSetting::first();
@endphp

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="index, follow">
<meta name="description" content="@yield('meta_description', $seosetting->description)" />
<meta name="keywords" content="@yield('meta_keywords', $seosetting->keyword)">
<meta name="author" content="{{ $seosetting->author }}">
<meta name="sitemap_link" content="{{ $seosetting->sitemap_link }}">
<meta name="csrf-token" content="{{ csrf_token() }}">

@yield('meta')

@if(!isset($product))
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="{{ config('app.name', 'Laravel') }}">
    <meta itemprop="description" content="{{ $seosetting->description }}">
    <meta itemprop="image" content="{{ asset(App\Models\GeneralSetting::first()->logo) }}">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:title" content="{{ config('app.name', 'Laravel') }}">
    <meta name="twitter:description" content="{{ $seosetting->description }}">
    <meta name="twitter:creator" content="@author_handle">
    <meta name="twitter:image" content="{{ asset(App\Models\GeneralSetting::first()->logo) }}">

    <!-- Open Graph data -->
    <meta property="og:title" content="{{ config('app.name', 'Laravel') }}" />
    <meta property="og:type" content="Ecommerce Site" />
    <meta property="og:url" content="{{ route('home') }}" />
    <meta property="og:image" content="{{ asset(App\Models\GeneralSetting::first()->logo) }}" />
    <meta property="og:description" content="{{ $seosetting->description }}" />
    <meta property="og:site_name" content="{{ env('APP_NAME') }}" />
@endif

<!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('storage/images/application/favicon.png') }}">

<title>@yield('meta_title', config('app.name', 'Laravel'))</title>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

{{-- Social CSS --}}
<link rel="stylesheet" href="{{asset('frontend/social/css/main.min.css')}}">
<link rel="stylesheet" href="{{asset('frontend/social/css/style.css')}}">
<link rel="stylesheet" href="{{asset('frontend/social/css/color.css')}}">
<link rel="stylesheet" href="{{asset('frontend/social/css/responsive.css')}}">
<link rel="stylesheet" href="{{asset('frontend/social/css/jquery-confirm.css')}}">

<!-- Bootstrap -->
<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" type="text/css">

<!-- Icons -->
<link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('frontend/css/line-awesome.min.css') }}" type="text/css">

<link type="text/css" href="{{ asset('frontend/css/bootstrap-tagsinput.css') }}" rel="stylesheet">
<link type="text/css" href="{{ asset('frontend/css/jodit.min.css') }}" rel="stylesheet">
<link type="text/css" href="{{ asset('frontend/css/sweetalert2.min.css') }}" rel="stylesheet">
<link type="text/css" href="{{ asset('frontend/css/slick.css') }}" rel="stylesheet">
<link type="text/css" href="{{ asset('frontend/css/xzoom.css') }}" rel="stylesheet">
<link type="text/css" href="{{ asset('frontend/css/jquery.share.css') }}" rel="stylesheet">

<!-- Global style (main) -->
<link type="text/css" href="{{ asset('frontend/css/active-shop.css') }}" rel="stylesheet" media="screen">

<!--Spectrum Stylesheet [ REQUIRED ]-->
<link href="{{ asset('css/spectrum.css')}}" rel="stylesheet">

<!-- Custom style -->
<link type="text/css" href="{{ asset('frontend/css/custom-style.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('frontend/social/css/social.css')}}">

@if(App\Models\Language::where('code', Session::get('locale', Config::get('app.locale')))->first()->rtl == 1)
     <!-- RTL -->
    <link type="text/css" href="{{ asset('frontend/css/active.rtl.css') }}" rel="stylesheet">
@endif

<!-- Facebook Chat style -->
<link href="{{ asset('frontend/css/fb-style.css')}}" rel="stylesheet">

<!-- color theme -->
<link href="{{ asset('frontend/css/colors/'.App\Models\GeneralSetting::first()->frontend_color.'.css')}}" rel="stylesheet">

<!-- jQuery -->
<script src="{{ asset('frontend/js/vendor/jquery.min.js') }}"></script>


@if (App\Models\BusinessSetting::where('type', 'google_analytics')->first()->value == 1)
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ env('TRACKING_ID') }}"></script>

    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', {{ env('TRACKING_ID') }});
    </script>
@endif

@if (App\Models\BusinessSetting::where('type', 'facebook_pixel')->first()->value == 1)
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', {{ env('FACEBOOK_PIXEL_ID') }});
  fbq('track', 'PageView');
</script>
<noscript>
  <img height="1" width="1" style="display:none"
       src="https://www.facebook.com/tr?id={{ env('FACEBOOK_PIXEL_ID') }}/&ev=PageView&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
@endif

</head>
<body>


<!-- MAIN WRAPPER -->
<div class="body-wrap shop-default shop-cards shop-tech gry-bg">

    <div class="postoverlay"></div>

    <!-- Header -->
    @include('AccountPanel.inc.nav')

    @yield('content')

    @include('AccountPanel.inc.footer')

    @include('AccountPanel.partials.modal')

    @if (App\Models\BusinessSetting::where('type', 'facebook_chat')->first()->value == 1)
        <div id="fb-root"></div>
        <!-- Your customer chat code -->
        <div class="fb-customerchat"
          attribution=setup_tool
          page_id="{{ env('FACEBOOK_PAGE_ID') }}">
        </div>
    @endif

    <div class="modal fade" id="addToCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size" role="document">
            <div class="modal-content position-relative">
                <div class="c-preloader">
                    <i class="fa fa-spin fa-spinner"></i>
                </div>
                <button type="button" class="close absolute-close-btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div id="addToCart-modal-body">

                </div>
            </div>
        </div>
    </div>

    @auth
    @if(Auth::user()->user_type == 'seller')
    <div class="modal fade" id="post_edit_model">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="edit_postbox">
                    <form action="{{ route('updatepost') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <figure class="post_create_figure">
                            <img src="{{asset(Auth::user()->shop->logo?Auth::user()->shop->logo:'frontend/images/placeholder.jpg')}}">
                            <span>{{Auth::user()->shop->name}}</span>
                        </figure>
                        <div class="newpst-input">
                            <textarea class="textarea" name="content" rows="0" placeholder="What's on your mind, {{strtolower(Auth::user()->shop->name)}}?"></textarea>
                        </div>
                        <div class="attachments">
                            <ul>
                                <li>
                                    <i title="Add Photo" class="fa fa-image edit_image"></i>
                                    <label class="fileContainer">
                                        <input title="Add Photo" class="edit_image_input" name="image" type="file" accept="image/*">
                                    </label>
                                </li>

                                <li>
                                    <i title="Add Video" class="fa fa-video edit_video"></i>
                                    <label class="fileContainer">
                                        <input title="Add Video" class="edit_video_input" name="video" type="file" accept="video/*">
                                    </label>
                                </li>
                            </ul>
                            <div style="display: none;" id="edit_post_image_preview_zone">

                            </div>
                        </div>
                        <input type="hidden" id="edit_pid" name="post_id" value="">
                        <button id="post_btn" class="post-btn" type="submit" data-ripple="">Save</button>
                    </form>
                </div>
            </div>
          </div>
        </div>
    </div>
    @endif
    @endauth

</div><!-- END: body-wrap -->

<!-- SCRIPTS -->
<a href="#" class="back-to-top btn-back-to-top"></a>

<!-- Core -->
<script src="{{ asset('frontend/js/vendor/popper.min.js') }}"></script>
<script src="{{ asset('frontend/js/vendor/bootstrap.min.js') }}"></script>

<!-- Plugins: Sorted A-Z -->
<script src="{{ asset('frontend/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('frontend/js/select2.min.js') }}"></script>
<script src="{{ asset('frontend/js/nouislider.min.js') }}"></script>


<script src="{{ asset('frontend/js/sweetalert2.min.js') }}"></script>
<script src="{{ asset('frontend/js/slick.min.js') }}"></script>

<script src="{{ asset('frontend/js/jquery.share.js') }}"></script>

<script type="text/javascript">
    function showFrontendAlert(type, message){
        if(type == 'danger'){
            type = 'error';
        }
        swal({
            position: 'top-end',
            type: type,
            title: message,
            showConfirmButton: false,
            timer: 1500
        });
    }
</script>

@foreach (session('flash_notification', collect())->toArray() as $message)
    <script type="text/javascript">
        showFrontendAlert('{{ $message['level'] }}', '{{ $message['message'] }}');
    </script>
@endforeach

<script src="{{ asset('frontend/js/bootstrap-tagsinput.min.js') }}"></script>
<script src="{{ asset('frontend/js/jodit.min.js') }}"></script>
<script src="{{ asset('frontend/js/xzoom.min.js') }}"></script>

<!-- App JS -->
<script src="{{ asset('frontend/js/active-shop.js') }}"></script>
<script src="{{ asset('frontend/js/main.js') }}"></script>
<script src="{{ asset('frontend/js/fb-script.js') }}"></script>
<script src="{{ asset('frontend/js/lazysizes.min.js') }}" async=""></script>

{{-- Social JS --}}
<script src="{{asset('frontend/social/js/script.js')}}"></script>
<script src="{{asset('frontend/social/js/jquery-shorten.min.js')}}"></script>
<script src="{{asset('frontend/social/js/jquery-confirm.min.js')}}"></script>
<script src="{{asset('frontend/social/js/social.js')}}"></script>

<script>
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    // Follow and Unfollow Shop
    $(document).on('click', '.btn_follow', function() {
        var shop_id = $(this).attr('sid');
        var this_target = $(this);

        if ($(this).attr('action') == 'follow')
        {
            $.ajax({
                type: "POST",
                url: "{{ route('followshop') }}",
                data:{shop_id:shop_id}
            }).done(function(data){
                if (data['success'] == 'done')
                {
                    this_target.html('Unfollow');
                    $('.count_followers').html(data['followers']+' Followers');
                    this_target.attr('action', 'unfollow');

                }else if(data['error'] == 'auth_required')
                {
                    window.location = "{{route('user.login')}}";
                }
            });
        }else if ($(this).attr('action') == 'unfollow')
        {
            $.ajax({
                type: "POST",
                url: "{{ route('unfollowshop') }}",
                data:{shop_id:shop_id}
            }).done(function(data){
                if (data['success'] == 'done')
                {
                    this_target.html('Follow');
                    $('.count_followers').html(data['followers']+' Followers');
                    this_target.attr('action', 'follow');
                }
            });
        }
    });

    // Load More Comments
    $(document).on('click', '.load_more', function() {

        var this_target = $(this);
        var post_id = $(this).attr('pid');
        var totalComments = $(this).attr('comments');
        var totalLoadedCommemts = $(".single_comment_"+post_id).length;

        $.ajax({
            url: "{{ route('lodemorecomments') }}",
            type:'post',
            dataType:'json',
            data:{post_id:post_id, skip:totalLoadedCommemts},
            beforeSend:function(){
                this_target.html('Loading...');
            },
            success:function(data){

                setTimeout(function(){
                    $("#comments_"+post_id).append(data);
                    var totalLoadedCommemts = $(".single_comment_"+post_id).length;

                    if(totalLoadedCommemts == totalComments){
                        this_target.hide();
                    }else{
                        this_target.html('More Comments');
                    }
                },500);
            }
        });
    });

    // Comment
    $(document).on('keydown', '.post-comt-box textarea', function() {

        if (event.keyCode == 13) {
            var comment = $(this).val();
            var this_target = $(this);
            var post_id = $(this).parent().attr('pid');
            var form = $("#comment_form"+post_id);
            this_target.val('');

            $.ajax({
                type: "POST",
                url: "{{ route('postcomment') }}",
                data:{post_id:post_id, comment:comment}
            }).done(function(data){
                if (data['success'] == 'done')
                {
                    $(data.html).insertAfter(form);
                    $('#comment_area_'+post_id).find('.load_more').attr('comments', data.comments);
                }
            });
        }
    });

    // Delete Comment
    $(document).on('click', '.delete_comment', function() {
        var id = $(this).attr('cid');
        var post_id = $(this).attr('pid');
        $.confirm({
            title: 'Delete?',
            content: 'Are you sure to continue?',
            buttons: {
                Confirm: function () {
                    $.ajax({
                        type: "POST",
                        url: "{{ route('postcommentdelete') }}",
                        data:{comment_id:id, post_id:post_id}
                    }).done(function(data){
                       if (data['success'] == 'done')
                       {
                            $("#comment_"+id).remove();
                            $('#comment_area_'+post_id).find('.load_more').attr('comments', data.comments);
                        }
                    });
                },
                Cancel: function () {}
            }
        });
    });


    // Like and Unlike Post
    $(document).on('click', '.like', function() {
        var post_id = $(this).attr('pid');
        var this_target = $(this);

        if ($(this).attr('action') == 'like')
        {
            $.ajax({
                type: "POST",
                url: "{{ route('likepost') }}",
                data:{post_id:post_id}
            }).done(function(data){
                if (data['success'] == 'done')
                {
                    this_target.find('.likes').html(data['likes']);
                    this_target.addClass('happy');
                    this_target.addClass('liked');
                    this_target.removeClass('broken');
                    this_target.attr('action', 'unlike');

                }else if(data['error'] == 'auth_required')
                {
                    window.location = "{{route('user.login')}}";
                }
            });
        }else if ($(this).attr('action') == 'unlike')
        {
            $.ajax({
                type: "POST",
                url: "{{ route('unlikepost') }}",
                data:{post_id:post_id}
            }).done(function(data){
                if (data['success'] == 'done')
                {
                    this_target.find('.likes').html(data['likes']);
                    this_target.removeClass('happy');
                    this_target.removeClass('liked');
                    this_target.addClass('broken');
                    this_target.attr('action', 'like');
                }
            });
        }
    });

    $(document).on('click', '.edit_post', function() {

        var id = $(this).attr('pid');
        $("#post_edit_model").find('#edit_pid').val(id);
        $("#post_edit_model").modal();

        $.ajax({
            type: "POST",
            url: "{{ route('editpost') }}",
            data:{post_id:id}
        }).done(function(data){
            if (data['success'] == 'done')
            {
                if(data.post['content'] != null){
                    $("#post_edit_model").find('.textarea').val(data.post['content']);
                    $("#post_edit_model").find('.textarea').focusAndPutCursorAtEnd();
                }else{
                    $("#post_edit_model").find('.textarea').val('');
                    $("#post_edit_model").find('.textarea').css('height', '50px');
                }

                if(data.post['image'] != null){
                    var image = "{{url('/')}}/public/"+data.post['image'];
                    $("#post_edit_model").find('#edit_post_image_preview_zone').show();
                    $("#post_edit_model").find('#edit_image_input').val(image);
                    $('.edit_image').hide();
                    $('.edit_video').hide();

                    var output = $("#edit_post_image_preview_zone");
                    var html = '<i pid="'+id+'" class="la la-times edit_image_cancel"></i>'+
                         '<img src="'+image+'">';
                    output.html(html);

                }else if(data.post['video'] != null){
                    var video = "{{url('/')}}/public/"+data.post['video'];
                    $("#post_edit_model").find('#edit_post_image_preview_zone').show();
                    $("#post_edit_model").find('#edit_video_input').val(video);
                    $('.edit_image').hide();
                    $('.edit_video').hide();

                    var output = $("#edit_post_image_preview_zone");
                    var html = '<i pid="'+id+'" class="la la-times edit_video_cancel"></i>'+
                            '<video class="post_video" src="'+video+'" controls>'+
                            '</video>';
                    output.html(html);

                }else{
                    $("#post_edit_model").find('#edit_post_image_preview_zone').hide();
                    $("#post_edit_model").find('#edit_image_input').val('');
                    $('.edit_image').show();
                    $('.edit_video').show();
                }
            }
        });
    });

    // Remove Post Image
    $(document).on('click', '.edit_image_cancel', function() {

        var id = $(this).attr('pid');
        $.confirm({
            title: 'Remove?',
            content: 'Are you sure to continue?',
            buttons: {
                Confirm: function () {
                    $.ajax({
                        type: "POST",
                        url: "{{ route('deletepostimage') }}",
                        data:{post_id:id}
                    }).done(function(data){
                        $("#post_edit_model").find('#edit_post_image_preview_zone').hide();
                        $("#post_edit_model").find('#edit_image_input').val('');
                        $('.edit_image').show();
                        $('.edit_video').show();
                    });
                },
                Cancel: function () {}
            }
        });
    });

    // Remove Post Video
    $(document).on('click', '.edit_video_cancel', function() {

        var id = $(this).attr('pid');
        $.confirm({
            title: 'Remove?',
            content: 'Are you sure to continue?',
            buttons: {
                Confirm: function () {
                    $.ajax({
                        type: "POST",
                        url: "{{ route('deletepostvideo') }}",
                        data:{post_id:id}
                    }).done(function(data){
                        $("#post_edit_model").find('#edit_post_image_preview_zone').hide();
                        $("#post_edit_model").find('.edit_video_input').val('');
                        $('.edit_image').show();
                        $('.edit_video').show();
                    });
                },
                Cancel: function () {}
            }
        });
    });

    // Delete Post
    $(document).on('click', '.delete_post', function() {
        var id = $(this).attr('pid');
        $.confirm({
            title: 'Delete?',
            content: 'Are you sure to continue?',
            buttons: {
                Confirm: function () {
                    $.ajax({
                        type: "POST",
                        url: "{{ route('deletepost') }}",
                        data:{post_id:id}
                    }).done(function(data){
                       if (data['success'] == 'done')
                       {
                            $("#post_"+id).remove();
                        }
                    });
                },
                Cancel: function () {}
            }
        });
    });


    $(document).ready(function() {
        $('.category-nav-element').each(function(i, el) {
            $(el).on('mouseover', function(){
                if(!$(el).find('.sub-cat-menu').hasClass('loaded')){
                    $.post('{{ route('category.elements') }}', {_token: '{{ csrf_token()}}', id:$(el).data('id')}, function(data){
                        $(el).find('.sub-cat-menu').addClass('loaded').html(data);
                    });
                }
            });
        });
        if ($('#lang-change').length > 0) {
            $('#lang-change .dropdown-item a').each(function() {
                $(this).on('click', function(e){
                    e.preventDefault();
                    var $this = $(this);
                    var locale = $this.data('flag');
                    $.post('{{ route('language.change') }}',{_token:'{{ csrf_token() }}', locale:locale}, function(data){
                        location.reload();
                    });

                });
            });
        }

        if ($('#currency-change').length > 0) {
            $('#currency-change .dropdown-item a').each(function() {
                $(this).on('click', function(e){
                    e.preventDefault();
                    var $this = $(this);
                    var currency_code = $this.data('currency');
                    $.post('{{ route('currency.change') }}',{_token:'{{ csrf_token() }}', currency_code:currency_code}, function(data){
                        location.reload();
                    });

                });
            });
        }
    });

    $('#search').on('keyup', function(){
        search();
    });

    $('#search').on('focus', function(){
        search();
    });

    function search(){
        var search = $('#search').val();
        if(search.length > 0){
            $('body').addClass("typed-search-box-shown");

            $('.typed-search-box').removeClass('d-none');
            $('.search-preloader').removeClass('d-none');
            $.post('{{ route('search.ajax') }}', { _token: '{{ @csrf_token() }}', search:search}, function(data){
                if(data == '0'){
                    // $('.typed-search-box').addClass('d-none');
                    $('#search-content').html(null);
                    $('.typed-search-box .search-nothing').removeClass('d-none').html('Sorry, nothing found for <strong>"'+search+'"</strong>');
                    $('.search-preloader').addClass('d-none');

                }
                else{
                    $('.typed-search-box .search-nothing').addClass('d-none').html(null);
                    $('#search-content').html(data);
                    $('.search-preloader').addClass('d-none');
                }
            });
        }
        else {
            $('.typed-search-box').addClass('d-none');
            $('body').removeClass("typed-search-box-shown");
        }
    }

    function updateNavCart(){
        $.post('{{ route('cart.nav_cart') }}', {_token:'{{ csrf_token() }}'}, function(data){
            $('#cart_items').html(data);
        });
    }

    function removeFromCart(key){
        $.post('{{ route('cart.removeFromCart') }}', {_token:'{{ csrf_token() }}', key:key}, function(data){
            updateNavCart();
            $('#cart-summary').html(data);
            showFrontendAlert('success', 'Item has been removed from cart');
            $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html())-1);
        });
    }

    function addToCompare(id){
        $.post('{{ route('compare.addToCompare') }}', {_token:'{{ csrf_token() }}', id:id}, function(data){
            $('#compare').html(data);
            showFrontendAlert('success', 'Item has been added to compare list');
            $('#compare_items_sidenav').html(parseInt($('#compare_items_sidenav').html())+1);
        });
    }

    function addToWishList(id){
        @if (Auth::check())
            $.post('{{ route('wishlists.store') }}', {_token:'{{ csrf_token() }}', id:id}, function(data){
                if(data != 0){
                    $('#wishlist').html(data);
                    showFrontendAlert('success', 'Item has been added to wishlist');
                }
                else{
                    showFrontendAlert('warning', 'Please login first');
                }
            });
        @else
            showFrontendAlert('warning', 'Please login first');
        @endif
    }

    function showAddToCartModal(id){
        if(!$('#modal-size').hasClass('modal-lg')){
            $('#modal-size').addClass('modal-lg');
        }
        $('#addToCart-modal-body').html(null);
        $('#addToCart').modal();
        $('.c-preloader').show();
        $.post('{{ route('cart.showCartModal') }}', {_token:'{{ csrf_token() }}', id:id}, function(data){
            $('.c-preloader').hide();
            $('#addToCart-modal-body').html(data);
            $('.xzoom, .xzoom-gallery').xzoom({
                Xoffset: 20,
                bg: true,
                tint: '#000',
                defaultScale: -1
            });
            getVariantPrice();
        });
    }

    $('#option-choice-form input').on('change', function(){
        getVariantPrice();
    });

    function getVariantPrice(){
        if($('#option-choice-form input[name=quantity]').val() > 0 && checkAddToCartValidity()){
            $.ajax({
               type:"POST",
               url: '{{ route('products.variant_price') }}',
               data: $('#option-choice-form').serializeArray(),
               success: function(data){
                   $('#option-choice-form #chosen_price_div').removeClass('d-none');
                   $('#option-choice-form #chosen_price_div #chosen_price').html(data.price);
                   $('#available-quantity').html(data.quantity);
                   $('.input-number').prop('max', data.quantity);
                   //console.log(data.quantity);
                   if(parseInt(data.quantity) < 1){
                       $('.buy-now').hide();
                       $('.add-to-cart').hide();
                   }
                   else{
                       $('.buy-now').show();
                       $('.add-to-cart').show();
                   }
               }
           });
        }
    }

    function checkAddToCartValidity(){
        var names = {};
        $('#option-choice-form input:radio').each(function() { // find unique names
              names[$(this).attr('name')] = true;
        });
        var count = 0;
        $.each(names, function() { // then count them
              count++;
        });

        if($('#option-choice-form input:radio:checked').length == count){
            return true;
        }

        return false;
    }

    function addToCart(){
        if(checkAddToCartValidity()) {
            $('#addToCart').modal();
            $('.c-preloader').show();
            $.ajax({
               type:"POST",
               url: '{{ route('cart.addToCart') }}',
               data: $('#option-choice-form').serializeArray(),
               success: function(data){
                   $('#addToCart-modal-body').html(null);
                   $('.c-preloader').hide();
                   $('#modal-size').removeClass('modal-lg');
                   $('#addToCart-modal-body').html(data);
                   updateNavCart();
                   $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html())+1);
               }
           });
        }
        else{
            showFrontendAlert('warning', 'Please choose all the options');
        }
    }

    function buyNow(){
        if(checkAddToCartValidity()) {
            $('#addToCart').modal();
            $('.c-preloader').show();
            $.ajax({
               type:"POST",
               url: '{{ route('cart.addToCart') }}',
               data: $('#option-choice-form').serializeArray(),
               success: function(data){
                   //$('#addToCart-modal-body').html(null);
                   //$('.c-preloader').hide();
                   //$('#modal-size').removeClass('modal-lg');
                   //$('#addToCart-modal-body').html(data);
                   updateNavCart();
                   $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html())+1);
                   window.location.replace("{{ route('cart') }}");
               }
           });
        }
        else{
            showFrontendAlert('warning', 'Please choose all the options');
        }
    }

    function show_purchase_history_details(order_id)
    {
        $('#order-details-modal-body').html(null);

        if(!$('#modal-size').hasClass('modal-lg')){
            $('#modal-size').addClass('modal-lg');
        }

        $.post('{{ route('purchase_history.details') }}', { _token : '{{ @csrf_token() }}', order_id : order_id}, function(data){
            $('#order-details-modal-body').html(data);
            $('#order_details').modal();
            $('.c-preloader').hide();
        });
    }

    function show_order_details(order_id)
    {
        $('#order-details-modal-body').html(null);

        if(!$('#modal-size').hasClass('modal-lg')){
            $('#modal-size').addClass('modal-lg');
        }

        $.post('{{ route('orders.details') }}', { _token : '{{ @csrf_token() }}', order_id : order_id}, function(data){
            $('#order-details-modal-body').html(data);
            $('#order_details').modal();
            $('.c-preloader').hide();
        });
    }

    function cartQuantityInitialize(){
        $('.btn-number').click(function(e) {
            e.preventDefault();

            fieldName = $(this).attr('data-field');
            type = $(this).attr('data-type');
            var input = $("input[name='" + fieldName + "']");
            var currentVal = parseInt(input.val());

            if (!isNaN(currentVal)) {
                if (type == 'minus') {

                    if (currentVal > input.attr('min')) {
                        input.val(currentVal - 1).change();
                    }
                    if (parseInt(input.val()) == input.attr('min')) {
                        $(this).attr('disabled', true);
                    }

                } else if (type == 'plus') {

                    if (currentVal < input.attr('max')) {
                        input.val(currentVal + 1).change();
                    }
                    if (parseInt(input.val()) == input.attr('max')) {
                        $(this).attr('disabled', true);
                    }

                }
            } else {
                input.val(0);
            }
        });

        $('.input-number').focusin(function() {
            $(this).data('oldValue', $(this).val());
        });

        $('.input-number').change(function() {

            minValue = parseInt($(this).attr('min'));
            maxValue = parseInt($(this).attr('max'));
            valueCurrent = parseInt($(this).val());

            name = $(this).attr('name');
            if (valueCurrent >= minValue) {
                $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                alert('Sorry, the minimum value was reached');
                $(this).val($(this).data('oldValue'));
            }
            if (valueCurrent <= maxValue) {
                $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                alert('Sorry, the maximum value was reached');
                $(this).val($(this).data('oldValue'));
            }


        });
        $(".input-number").keydown(function(e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                // Allow: Ctrl+A
                (e.keyCode == 65 && e.ctrlKey === true) ||
                // Allow: home, end, left, right
                (e.keyCode >= 35 && e.keyCode <= 39)) {
                // let it happen, don't do anything
                return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });
    }

     function imageInputInitialize(){
         $('.custom-input-file').each(function() {
             var $input = $(this),
                 $label = $input.next('label'),
                 labelVal = $label.html();

             $input.on('change', function(e) {
                 var fileName = '';

                 if (this.files && this.files.length > 1)
                     fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
                 else if (e.target.value)
                     fileName = e.target.value.split('\\').pop();

                 if (fileName)
                     $label.find('span').html(fileName);
                 else
                     $label.html(labelVal);
             });

             // Firefox bug fix
             $input
                 .on('focus', function() {
                     $input.addClass('has-focus');
                 })
                 .on('blur', function() {
                     $input.removeClass('has-focus');
                 });
         });
     }

</script>

@yield('script')

</body>
</html>
