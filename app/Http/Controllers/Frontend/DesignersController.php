<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Designer;
use App\Models\Post;
use App\Models\Shop;
use Illuminate\Http\Request;

class DesignersController extends Controller
{
    public function index() {
        $skip = 0;
        $limit = 8;
        return view('Frontend.designers', compact('skip', 'limit'));
    }

    public function getDesigners(Request $request) {
//        $designers = Shop::where('id', '!=', 0)->skip($request->skip)->take($request->limit)->with(['user.posts.comments', 'user.posts.likes'])->get();
        $designers = Post::where('id', '!=', 0)->skip($request->skip)->take($request->limit)->with(['user.shop', 'comments', 'likes'])->get();
        return response()->json($designers);
    }
}
