@foreach($posts as $post)
<div class="central-meta item" id="post_{{$post->id}}">
    <div class="user-post">
        <div class="friend-info">
            <figure>
                <a href="{{ route('shop.visit', $post->user->shop->slug) }}">
                    <img class="user_post_image" src="{{asset($post->user->shop->logo?$post->user->shop->logo:'frontend/images/placeholder.jpg')}}">
                </a>
            </figure>
            <div class="friend-name">
                @auth
                    @if(Auth::user()->id == $post->user->id)
                    <div class="more">
                        <div class="more-post-optns"><i class="ti-more-alt"></i>
                            <ul>
                                <li pid="{{$post->id}}" class="edit_post"><i class="fa fa-pencil-square-o"></i>Edit Post</li>
                                <li pid="{{$post->id}}" class="delete_post"><i class="fa fa-trash-o"></i>Delete Post</li>
                            </ul>
                        </div>
                    </div>
                    @endif
                @endauth

                <ins><a href="{{ route('shop.visit', $post->user->shop->slug) }}">{{$post->user->shop->name}}</a></ins>
                <span><i class="fa fa-globe"></i> {{\Carbon\Carbon::parse($post->created_at)->format('F j Y, h:i A')}} </span>
            </div>
            <div class="post-meta">
                @if($post->content)
                    <p class="post_content desc">{{$post->content}}</p>
                @endif

                @if($post->image)
                <figure>
                    <div class="img-bunch">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <figure>
                                    <img src="{{asset($post->image)}}">
                                </figure>
                            </div>
                        </div>
                    </div>
                </figure>
                @elseif($post->video)
                <figure>
                    <div class="img-bunch">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <figure>
                                    <video class="post_video" controls>
                                        <source src="{{asset($post->video)}}" type="video/mp4">
                                    </video>
                                </figure>
                            </div>
                        </div>
                    </div>
                </figure>
                @endif

                <div class="we-video-info">
                    <?php 
                        if (Auth::check()) 
                        {
                            $user_id = Auth::user()->id;
                            $liked = \App\Like::where('post_id', $post->id)
                                                ->where('user_id', $user_id)->first();
                        }
                        $totalComments = \App\Comment::where('post_id', $post->id)->get();
                        $comments = \App\Comment::where('post_id', $post->id)
                                                ->orderBy('created_at', 'desc')
                                                ->take(2)->get();
                    ?>
                    <ul>
                        <li>
                            <span pid="{{$post->id}}" action="{{@$liked? "unlike":"like"}}" class="heart like {{@$liked? "liked":""}}">
                                <i class="fa fa-heart"></i>
                                <ins class="likes">{{count($post->likes)}}</ins>
                            </span>
                        </li>
                        <li>
                            <span class="comment">
                                <i class="fa fa-commenting"></i>
                                <ins class="comments">{{count($totalComments)}}</ins>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="comment_area_{{$post->id}}" class="coment-area" style="display: block;">
                <ul id="comments_{{$post->id}}" class="we-comet">
                    
                    @auth
                    @if(Auth::user()->user_type == 'customer' || Auth::user()->user_type == 'seller')
                    <li id="comment_form{{$post->id}}" class="post-comment">
                        <div class="comet-avatar">
                            @if(Auth::user()->user_type == 'customer')
                                <img class="user_comment_image" src="{{asset(Auth::user()->avatar_original?Auth::user()->avatar_original:'frontend/images/placeholder.jpg')}}">
                            @elseif(Auth::user()->user_type == 'seller')
                                <img class="user_comment_image" src="{{asset(Auth::user()->shop->logo?Auth::user()->shop->logo:'frontend/images/placeholder.jpg')}}">
                            @endif
                        </div>
                        <div class="post-comt-box">
                            <form pid="{{$post->id}}">
                                <textarea class="textarea" placeholder="Write a comment..."></textarea>
                                <button type="submit"></button>
                            </form> 
                        </div>
                    </li>
                    @endif
                    @endauth

                    @include('frontend.inc.post_comments')
                </ul>

                @if(count($totalComments) > 2)
                    <div class="load_more_comments">
                        <p class="load_more" pid="{{$post->id}}" comments="{{count($totalComments)}}">More Comments</p>
                    </div>
                @endif

            </div>
        </div>

    </div>
</div>
@endforeach

<script src="{{asset('frontend/social/js/jquery-shorten.min.js')}}"></script>

<script>
    // jQuery Shorten
    jQuery(function($) {
        $('.desc').shorten({
            chars: 250,
            more: 'Read more',
            less: ' Show less',
            ellipses: '... '
        });
    });
</script>