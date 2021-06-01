<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Shop;
use App\Models\SubSubCategory;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index($subSubCategoryId = null) {
        $skip = 0;
        $limit = 8;
        $shops = Shop::where('id', '!=', null)->get();
        $topCategories = Category::where('top', 1)->get();
        if ($subSubCategoryId !== null) {
            $subSubCategory = SubSubCategory::where('id', $subSubCategoryId)->first();
            return view('Frontend.shop', compact('subSubCategoryId', 'subSubCategory', 'skip', 'limit', 'shops', 'topCategories'));
        } else {
            $subSubCategory = null;
            return view('Frontend.shop', compact('subSubCategoryId', 'subSubCategory', 'skip', 'limit', 'shops', 'topCategories'));
        }


    }

    public function getProductsForShop(Request $request) {
        if ($request->subsubcategory_id !== null) {
            $products = Product::where('subsubcategory_id', $request->subsubcategory_id)->skip($request->skip)->take($request->limit)->with('user.shop')->get();
        } else {
            $products = Product::where('subsubcategory_id', '!=', $request->subsubcategory_id)->skip($request->skip)->take($request->limit)->with('user.shop')->get();
        }
        return response()->json($products);
    }
}
