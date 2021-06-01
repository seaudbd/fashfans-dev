<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($productId) {
        $product = Product::where('id', $productId)->with('subsubcategory', 'user.shop')->first();
        return view('Frontend.product', compact('product'));
    }

    public function getOtherRelatedProducts(Request $request) {
        $otherProducts = Product::where('subsubcategory_id', $request->subsubcategory_id)->take(8)->with('user.shop')->get();
        return response()->json($otherProducts);
    }
}
