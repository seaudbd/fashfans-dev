<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class StyleController extends Controller
{
    public function index() {
        $skip = 0;
        $limit = 8;
        return view('Frontend.styles', compact('skip', 'limit'));
    }

    public function getStyles(Request $request) {

        $designers = Post::where('id', '!=', 0)->skip($request->skip)->take($request->limit)->with(['user.shop', 'comments', 'likes'])->get();
        return response()->json($designers);
    }
}
