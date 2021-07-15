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
use Mail;
use App\Mail\EmailManager;
use Illuminate\Support\Facades\URL;

class SocialPostController extends Controller
{
    public function createPost(Request $request)
    {


    	if ($request->get('content') || $request->image || $request->video)
    	{
	        $shop  = Shop::where('user_id', Auth::user()->id)->first();

    		$this->validate($request, [
	            'content' => 'nullable|string|max:4294967295',
	            'image' => 'nullable',
	            'video' => 'nullable'
	        ]);

	    	$post = new Post;
	        $post->content = $request->get('content');
	        $post->user_id = Auth::user()->id;

	        if ($request->hasFile('image'))
	        {
	            $image = $request->file('image');
	            $destinationPath = 'uploads/social/';
	            $imageName = strtolower($shop->slug)."-".time().".".$image->extension();
	            $image->move(public_path($destinationPath), $imageName);
	            $post->image = $destinationPath.$imageName;

	        }elseif ($request->hasFile('video'))
	        {
	        	$video = $request->file('video');
                $destinationPath ='uploads/social/';
                $videoName = strtolower($shop->slug)."-".time().".".$video->extension();
                $video->move(public_path($destinationPath), $videoName);
                $post->video = $destinationPath.$videoName;
	        }

	    	if($post->save())
	    	{
	    		if (env('MAIL_USERNAME') != null && count($shop->followers))
	    		{
	    			foreach ($shop->followers as $users)
	    			{
	    				$f_user = User::where('id', $users->user_id)->first();
		    			$array['view'] = 'emails.post';
	                    $array['subject'] = $shop->name.' Posted a New Post';
	                    $array['from'] = env('MAIL_USERNAME');
	                    $array['link'] = $shop->slug;

	                    try {
	                        Mail::to($f_user->email)->queue(new EmailManager($array));
	                    } catch (\Exception $e) {

	                    }
	                }
	    		}
	            return back();
	        }
	        else{
	            flash(__('Something went wrong'))->error();
	            return back();
	        }
    	}else{
            flash(__('Add something to your post'))->error();
            return back();
        }
    }

    public function editPost(Request $request)
    {
    	$post = Post::where('id', $request->post_id)->first();
    	return response()->json(['success'=>'done', 'post' => $post]);
    }

    public function updatePost(Request $request)
    {
    	if ($request->get('content') || $request->image || $request->video)
    	{
    		$this->validate($request, [
	            'content' => 'nullable|string|max:4294967295',
	            'image' => 'nullable'
	        ]);

	    	$post = Post::find($request->post_id);
	        $post->content = $request->get('content');

	        if ($request->hasFile('image'))
	        {
	            $image = $request->file('image');
	            $destinationPath = 'uploads/social/';
	            $shop  = Shop::where('user_id', Auth::user()->id)->first();
	            $imageName = strtolower($shop->slug)."-".time().".".$image->extension();
	            $image->move(public_path($destinationPath), $imageName);
	            $post->image = $destinationPath.$imageName;

	        }elseif ($request->hasFile('video'))
	        {
	        	$video = $request->file('video');
                $destinationPath ='uploads/social/';
                $shop  = Shop::where('user_id', Auth::user()->id)->first();
                $videoName = strtolower($shop->slug)."-".time().".".$video->extension();
                $video->move(public_path($destinationPath), $videoName);
                $post->video = $destinationPath.$videoName;
	        }

	    	if($post->save()){
	            return back();
	        }
	        else{
	            flash(__('Something went wrong'))->error();
	            return back();
	        }
    	}else{
            flash(__('Add something to your post'))->error();
            return back();
        }
    }

    public function deletePost(Request $request)
    {
        DB::table('posts')
            ->where('id', $request->post_id)->delete();

        return response()->json(['success'=>'done']);
    }

    public function deletePostImage(Request $request)
    {
        DB::table('posts')
            ->where('id', $request->post_id)->update(['image' => null]);

        return response()->json(['success'=>'done']);
    }

    public function deletePostVideo(Request $request)
    {
        DB::table('posts')
            ->where('id', $request->post_id)->update(['video' => null]);

        return response()->json(['success'=>'done']);
    }

}
