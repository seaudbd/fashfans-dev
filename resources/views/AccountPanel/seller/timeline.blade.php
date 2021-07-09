<div class="col-xl-6" id="posts">
	@auth
	@if(Auth::user()->id == $shop->user->id)
        @include('frontend.inc.create_social_post')
    @endif
    @endauth

    @php
		$posts = \App\Post::where('user_id', $shop->user->id)->orderBy('created_at', 'desc')->paginate(2);
	@endphp

	@include('frontend.inc.social_posts')
</div>
<div class="col-xl-3">
	<aside class="sidebar static right">
		<div class="widget stick-widget">
			<h4 class="widget-title">Recent Followers</h4>
			<ul class="followers">
				@if (count($shop->followers))
					@foreach($shop->followers as $users)
					@php
						$f_user = \App\User::where('id', $users->user_id)->first();
					@endphp
					<li>
						<figure>
							<a href="{{ route('user_profile', $f_user->id) }}">
							<img class="user_comment_image" src="{{asset($f_user->avatar_original?$f_user->avatar_original:'frontend/images/placeholder.jpg')}}">
							</a>
						</figure>
						<div class="friend-meta">
							<h4><a href="{{ route('user_profile', $f_user->id) }}">{{$f_user->name}}</a></h4>
						</div>
					</li>
					@endforeach
				@else
					<li>No Followers Found</li>
				@endif
				
			</ul><br><br>
		</div><!-- who's following -->
	</aside>
</div>

