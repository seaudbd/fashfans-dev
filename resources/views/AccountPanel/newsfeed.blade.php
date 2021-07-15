@extends('frontend.layouts.social_app')
@section('meta_title'){{config('app.name', 'Laravel')}}@stop
@section('content')

   <section class="@if (@$type == 'home_store') gry-bg @endif pt-5">
        <div class="container">
            <div class="row">
                
                <div class="col-xl-3 d-none d-xl-block">
                    <aside class="sidebar static left">
                        @if(Auth::user()->user_type == 'customer')
                            @include('frontend.inc.social_customer_menu')
                        @else
                            @include('frontend.inc.social_seller_menu')
                        @endif
                    </aside>
                </div>
                
                <div class="col-xl-6" id="posts">
                    @if(Auth::user()->user_type == 'seller')
                        @include('frontend.inc.create_social_post')
                    @endif
                    
                    @include('frontend.inc.social_posts')
                </div>

                <div class="col-xl-3">
                    <aside class="sidebar static right">
                        @include('frontend.inc.newsfeed_right_sidebar')
                    </aside>
                </div>
            </div>
        </div>
    </section>

@endsection
