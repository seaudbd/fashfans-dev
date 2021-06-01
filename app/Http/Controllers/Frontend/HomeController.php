<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        return view('Frontend.home');
    }

    public function getFeaturedCategories() {
        $featuredCategories = Category::where('featured', 1)->with(['products.user.shop'])->get()->take(4);
        return response()->json($featuredCategories);
    }

    public function getPostsForHomePage() {
        $posts = Post::where('id', '!=', 0)->take(3)->with(['user.shop', 'comments', 'likes'])->get();
        return response()->json($posts);
    }
}
