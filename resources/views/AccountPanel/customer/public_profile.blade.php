@extends('frontend.layouts.social_app')

@section('meta_title'){{ $user->name }}@stop

@section('content')

    <section class="gry-bg pt-4 ">
        <div class="container">
            <div class="row align-items-baseline">
                <div class="col-md-6">
                    <div class="d-flex">

                        @if ($user->avatar_original != null)
                           <img height="70" class="lazyload" src="{{ asset('frontend/images/placeholder.jpg') }}" data-src="{{ asset($user->avatar_original) }}">
                        @else
                            <img height="70" class="lazyload" src="{{ asset('frontend/images/placeholder.jpg') }}" data-src="{{ asset('frontend/images/placeholder.jpg') }}">
                        @endif

                        <div class="pl-4">
                            <h3 class="strong-700 heading-4 mb-0">{{ $user->name }}</h3>
                            <span class="count_following">{{count($user->following)}} Following</span>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section><br><br><br><br><br><br><br><br><br><br><br><br>

@endsection
