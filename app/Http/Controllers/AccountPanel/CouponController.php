<?php

namespace App\Http\Controllers\ControlPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use App\Models\Coupon;
use Illuminate\Support\Facades\Schema;


class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupons = Coupon::orderBy('id','desc')->get();
        return view('ControlPanel.coupons.index', compact('coupons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ControlPanel.coupons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(count(Coupon::where('code', $request->coupon_code)->get()) > 0){
            flash('Coupon already exist for this coupon code')->error();
            return back();
        }
        $coupon = new Coupon;
          if ($request->coupon_type == "product_base") {
              $coupon->type = $request->coupon_type;
              $coupon->code = $request->coupon_code;
              $coupon->discount = $request->discount;
              $coupon->discount_type = $request->discount_type;
              $coupon->start_date = strtotime($request->start_date);
              $coupon->end_date = strtotime($request->end_date);
              $cupon_details = array();
              for($key = 0; $key < count($request->category_ids)-1; $key++) {
                  $data['category_id'] = $request->category_ids[$key];
                  $data['subcategory_id'] = $request->subcategory_ids[$key];
                  $data['subsubcategory_id'] = $request->subsubcategory_ids[$key];
                  $data['product_id'] = $request->product_ids[$key];
                  array_push($cupon_details, $data);
              }
              $coupon->details = json_encode($cupon_details);
              if ($coupon->save()) {
                  flash('Coupon has been saved successfully')->success();
                  return redirect()->route('coupon.index');
              }
              else{
                  flash('Something went wrong')->danger();
                  return back();
              }
          }
          elseif ($request->coupon_type == "cart_base") {
              $coupon->type = $request->coupon_type;
              $coupon->code = $request->coupon_code;
              $coupon->discount = $request->discount;
              $coupon->discount_type = $request->discount_type;
              $coupon->start_date = strtotime($request->start_date);
              $coupon->end_date = strtotime($request->end_date);
              $data = array();
              $data['min_buy'] = $request->min_buy;
              $data['max_discount'] = $request->max_discount;
              $coupon->details = json_encode($data);
              if ($coupon->save()) {
                  flash('Coupon has been saved successfully')->success();
                  return redirect()->route('coupon.index');
              }
              else{
                  flash('Something went wrong')->danger();
                  return back();
              }
          }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $coupon = Coupon::findOrFail(decrypt($id));
      return view('ControlPanel.coupons.edit', compact('coupon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $coupon = Coupon::findOrFail($id);
        if ($request->coupon_type == "product_base") {
            $coupon->type = $request->coupon_type;
            $coupon->code = $request->coupon_code;
            $coupon->discount = $request->discount;
            $coupon->discount_type = $request->discount_type;
            $coupon->start_date = strtotime($request->start_date);
            $coupon->end_date = strtotime($request->end_date);
            $cupon_details = array();
            for($key = 0; $key < count($request->category_ids)-1; $key++) {
                $data['category_id'] = $request->category_ids[$key];
                $data['subcategory_id'] = $request->subcategory_ids[$key];
                $data['subsubcategory_id'] = $request->subsubcategory_ids[$key];
                $data['product_id'] = $request->product_ids[$key];
                array_push($cupon_details, $data);
            }
            $coupon->details = json_encode($cupon_details);
            if ($coupon->save()) {
                flash('Coupon has been saved successfully')->success();
                return redirect()->route('coupon.index');
            }
            else{
                flash('Something went wrong')->danger();
                return back();
            }
        }
        elseif ($request->coupon_type == "cart_base") {
            $coupon->type = $request->coupon_type;
            $coupon->code = $request->coupon_code;
            $coupon->discount = $request->discount;
            $coupon->discount_type = $request->discount_type;
            $coupon->start_date = strtotime($request->start_date);
            $coupon->end_date = strtotime($request->end_date);
            $data = array();
            $data['min_buy'] = $request->min_buy;
            $data['max_discount'] = $request->max_discount;
            $coupon->details = json_encode($data);
            if ($coupon->save()) {
                flash('Coupon has been saved successfully')->success();
                return redirect()->route('coupon.index');
            }
            else{
                flash('Something went wrong')->danger();
                return back();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coupon = Coupon::findOrFail($id);
        if(Coupon::destroy($id)){
            flash('Coupon has been deleted successfully')->success();
            return redirect()->route('coupon.index');
        }

        flash('Something went wrong')->error();
        return back();
    }

    public function get_coupon_form(Request $request)
    {
        if($request->coupon_type == "product_base") {
            return view('ControlPanel.partials.product_base_coupon');
        }
        elseif($request->coupon_type == "cart_base"){
            return view('ControlPanel.partials.cart_base_coupon');
        }
    }

    public function get_coupon_form_edit(Request $request)
    {
        if($request->coupon_type == "product_base") {
            $coupon = Coupon::findOrFail($request->id);
            return view('ControlPanel.partials.product_base_coupon_edit',compact('coupon'));
        }
        elseif($request->coupon_type == "cart_base"){
            $coupon = Coupon::findOrFail($request->id);
            return view('ControlPanel.partials.cart_base_coupon_edit',compact('coupon'));
        }
    }

}
