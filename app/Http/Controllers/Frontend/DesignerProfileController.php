<?php


namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Designer;
use App\Models\Post;
use App\Models\Product;
use App\Models\Shop;
use Illuminate\Http\Request;

class DesignerProfileController extends Controller
{

    public function index($designerId) {
        $designer = Shop::where('id', $designerId)->with(['user.posts.comments', 'user.posts.likes', 'followers'])->first();
        return view('Frontend.designer_profile', compact('designer'));
    }

    public function getPostsForDesignerProfileFeed () {
        $posts = Post::with(['user.shop', 'comments', 'likes'])->get();
        return response()->json($posts);
    }

    public function getProductsForDesignerProfileShop(Request $request) {

        if ($request->user_id !== null) {
            $products = Product::where('user_id', $request->user_id)->skip($request->skip)->take($request->limit)->with('user.shop')->get();
        } else {
            $products = Product::where('user_id', '!=', $request->user_id)->skip($request->skip)->take($request->limit)->with('user.shop')->get();
        }

        return response()->json($products);
    }
}