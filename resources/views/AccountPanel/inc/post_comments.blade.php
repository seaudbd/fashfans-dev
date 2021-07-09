@foreach ($comments as $comment)
<li class="single_comment_{{$post->id}}" id="comment_{{$comment->id}}">
    <div class="comet-avatar">
        @if($comment->user->user_type == 'customer')
        <a href="{{ route('user_profile', $comment->user->id) }}">
            <img class="user_comment_image" src="{{ asset($comment->user->avatar_original?$comment->user->avatar_original:'frontend/images/placeholder.jpg') }}">
        </a>
        @elseif($comment->user->user_type == 'seller')
        @php
            $shop = \App\Shop::where('user_id', $comment->user->id)->first();
        @endphp
        <a href="{{ route('shop.visit', $shop->slug) }}">
            <img class="user_comment_image" src="{{asset($shop->logo?$shop->logo:'frontend/images/placeholder.jpg')}}">
        </a>
        @endif
    </div>
    <div class="we-comment">
        @auth
        @if(Auth::user()->id == $comment->user->id)
            <div class="more">
                <div class="more-post-optns"><i class="ti-more-alt"></i>
                    <ul>
                        <li pid="{{$post->id}}" class="delete_comment" cid="{{$comment->id}}"><i class="fa fa-trash-o"></i>Delete</li>
                    </ul>
                </div>
            </div>
        @endif
        @endauth
        <h5>
            @if($comment->user->user_type == 'customer')
                <a href="{{ route('user_profile', $comment->user->id) }}">{{$comment->user->name}}</a>
            @elseif($comment->user->user_type == 'seller')
                @php
                    $shop = \App\Shop::where('user_id', $comment->user->id)->first();
                @endphp
                <a href="{{ route('shop.visit', $shop->slug) }}">{{$shop->name}}</a>
            @endif
        </h5><br>
        <p>{{$comment->comment}}</p>
    </div>
    <div class="inline-itms">
        <span>{{Carbon\Carbon::parse($comment->created_at)->diffForHumans()}}</span>
    </div>
</li>
@endforeach