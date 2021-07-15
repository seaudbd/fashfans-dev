<?php

namespace App\Http\Controllers\AccountPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Seller;
use App\Models\Shop;
use App\Models\Post;
use App\Models\Like;
use App\Models\Comment;
use App\Models\Follower;
use \Carbon\Carbon;
use Illuminate\Support\Facades\URL;

class SocialController extends Controller
{
    public function userProfile(Request $request, $id)
    {
        $user  = User::where('id', $id)->first();

        if ($user && $user->user_type == 'customer') {
            return view('frontend.customer.public_profile', ['user' => $user]);
        }else{
            abort(404);
        }
    }


    // Like Post
    public function likePost(Request $request)
    {
        if (Auth::check())
        {
            if (Auth::user()->user_type == 'customer' || Auth::user()->user_type == 'seller')
            {
                $user_id = Auth::user()->id;
                $liked = Like::where('post_id', $request->post_id)
                                    ->where('user_id', $user_id)->first();

                if (!$liked)
                {
                    Like::create([
                        'post_id' => $request->post_id,
                        'user_id' => $user_id,
                    ]);

                    $likes = Like::where('post_id', $request->post_id)->get();
                    return response()->json([
                        'success'=>'done',
                        'likes' => count($likes)
                    ]);
                }
            }

        }else
        {   Session::put('backUrl', URL::previous());
            return response()->json(['error'=>'auth_required']);
        }
    }


     // Unlike Post
    public function unlikePost(Request $request)
    {
        DB::table("likes")->where('post_id', $request->post_id)
                                ->where('user_id', Auth::user()->id)
                                ->delete();

        $likes = Like::where('post_id', $request->post_id)->get();
        return response()->json(['success'=>'done', 'likes' => count($likes)]);
    }


    // Post Comment
    public function postComment(Request $request)
    {
        $user_id = Auth::user()->id;
        $comment = Comment::create([
            'post_id' => $request->post_id,
            'comment' => $request->comment,
            'user_id' => $user_id,
        ]);

        $comments = Comment::where('post_id', $request->post_id)->get();

        if($comment->user->user_type == 'customer'){
            $image = '
                <a href="'.route('user_profile', $comment->user->id).'">
                    <img class="user_comment_image" src="'.asset($comment->user->avatar_original?$comment->user->avatar_original:'frontend/images/placeholder.jpg').'">
                </a>';
            $name = '<a href="'.route('user_profile', $comment->user->id).'">'.$comment->user->name.'</a>';

        }elseif($comment->user->user_type == 'seller'){
            $shop = Shop::where('user_id', $comment->user->id)->first();
            $image = '
                <a href="'.route('shop.visit', $shop->slug).'">
                    <img class="user_comment_image" src="'.asset($shop->logo?$shop->logo:'frontend/images/placeholder.jpg').'">
                </a>';
            $name = '<a href="'.route('shop.visit', $shop->slug).'">'.$shop->name.'</a>';
        }

        $html =
        '<li class="single_comment_'.$request->post_id.'" id="comment_'.$comment->id.'">
            <div class="comet-avatar">
                '.$image.'
            </div>
            <div class="we-comment">

                <div class="more">
                    <div class="more-post-optns"><i class="ti-more-alt"></i>
                        <ul>
                            <li pid="'.$request->post_id.'" class="delete_comment" cid="'.$comment->id.'"><i class="fa fa-trash-o"></i>Delete</li>
                        </ul>
                    </div>
                </div>
                <h5>
                    '.$name.'
                </h5><br>
                <p>'.$comment->comment.'</p>
            </div>
            <div class="inline-itms">
                <span>'.Carbon::parse($comment->created_at)->diffForHumans().'</span>
            </div>
        </li>';

        return response()->json([
            'success'=>'done',
            'html' => $html,
            'comments' => count($comments)
        ]);
    }


    public function postCommentDelete(Request $request)
    {
        DB::table('comments')
            ->where('id', $request->comment_id)->delete();
        $comments = Comment::where('post_id', $request->post_id)->get();

        return response()->json(['success'=>'done', 'comments' => count($comments)]);
    }


    // Load More Comments
    public function lodeMoreComments(Request $request)
    {
        if($request->ajax())
        {
            $skip = $request->skip;
            $take = 2;
            $post = Post::find($request->post_id);
            $comments = Comment::where('post_id', $request->post_id)
                                ->skip($skip)->take($take)
                                ->orderBy('created_at', 'desc')
                                ->get();

            return response()->json(view('frontend.inc.post_comments', [
                                    'comments' => $comments,
                                    'post' => $post
                                ])->render());
        }else{
            return response()->json('Direct access not allowed.');
        }
    }


    public function followShop(Request $request)
    {
        if (Auth::check())
        {
            if (Auth::user()->user_type == 'customer')
            {
                $user_id = Auth::user()->id;
                $followed = Follower::where('shop_id', $request->shop_id)
                                    ->where('user_id', $user_id)->first();

                if (!$followed)
                {
                    Follower::create([
                        'shop_id' => $request->shop_id,
                        'user_id' => $user_id,
                    ]);

                    $followers = Follower::where('shop_id', $request->shop_id)->get();
                    return response()->json([
                        'success'=>'done',
                        'followers' => count($followers)
                    ]);
                }
            }

        }else
        {   Session::put('backUrl', URL::previous());
            return response()->json(['error'=>'auth_required']);
        }
    }


    public function unFollowShop(Request $request)
    {
        DB::table('followers')
            ->where('shop_id', $request->shop_id)
            ->where('user_id', Auth::user()->id)->delete();

        $followers = Follower::where('shop_id', $request->shop_id)->get();

        return response()->json(['success'=>'done', 'followers' => count($followers)]);
    }

}
