<?php

namespace App\Http\Controllers\AccountPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Seller;
use App\Models\Shop;
use App\Models\Post;

class NewsFeedController extends Controller
{
    public function index(Request $request)
    {
    	$posts = Post::orderBy('created_at', 'desc')->paginate(2);

    	if ($request->ajax())
        {
        	$view = view('frontend.inc.social_posts', compact('posts'))->render();
            return response()->json(['html' => $view]);
        }

    	return view('frontend.newsfeed', ['posts' => $posts]);
    }
}
