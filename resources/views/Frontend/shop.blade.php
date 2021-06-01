@extends('Layouts.frontend')
@section('content')

    <style type="text/css">
        .shop_product_add_to_cart:hover {
            background-color: #2d3748;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .ui-slider-horizontal {
            height: 1px;
            border: none;
            background: #ccc;
        }

        .ui-slider-handle {
            outline: 0;
            border-radius: 50%;
            top: -.6em !important;
        }
    </style>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-11 mx-auto">
                <div style="font-size: 12px; margin-bottom: 15px;">
                    <a href="{{ url('/') }}" class="text-decoration-none text-dark">Home</a> > <a href="{{ url('/') }}" class="text-decoration-none text-dark">Shop</a> @if($subSubCategory !== null) > <span style="color: #b1b0b9;">{{ $subSubCategory->name }}</span> @endif
                </div>
                <div style="position: relative; height: 460px; width: 100%; background-color: #f6f6f8;">
                    <img src="{{ asset('storage/images/shop/model_girl_with_bag.png') }}" style="height: 460px; width: auto;">
                    <img src="{{ asset('storage/images/application/logo_3.png') }}" style="position: absolute; top: 50%; left: 0; transform: translate(-50%, 0); -ms-transform: translate(-50%, 0); width: 75px; height: 75px; margin-top: -37.5px;">
                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); -ms-transform: translate(-50%, -50%); background-color: #d10015; color: #ffffff; opacity: 0.6; text-align: center; font-weight: 600; padding: 10px 45px; border-radius: 10px;">
                        <div style="text-transform: uppercase; font-size: 25px;">Popular Items From Top Sellers</div>
                        <div style="font-size: 16px;">Find the best popular items from top sellers which are right for you.</div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-11 py-5 mx-auto">
                <div style="font-size: 16px; text-align: right;">Sort by <i class="fas fa-angle-down"></i></div>


                <div class="row mt-4">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-3 col-xxl-2">
                        <div class="row mb-3">
                            <div class="col" style="font-size: 18px; font-weight: 600; color: #020101;">Filters</div>
                            <div class="col" style="font-size: 18px; font-weight: 500; color: #b1b0b9; text-align: right;">Clear All</div>
                        </div>

                        <div class="border-bottom pb-3 mb-3" style="width: 100%;">
                            <div class="row mb-3">
                                <div class="col" style="font-size: 14px; font-weight: 600; color: #020101;">Product Type</div>
                                <div class="col" style="text-align: right; font-size: 14px; font-weight: 500; color: #b1b0b9;">Clear</div>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_bags">
                                <label class="form-check-label" for="form_check_bags">
                                    Bags
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_beachwear">
                                <label class="form-check-label" for="form_check_beachwear">
                                    Beachwear
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_bodysuit">
                                <label class="form-check-label" for="form_check_bodysuit">
                                    Bodysuit
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_cardigans">
                                <label class="form-check-label" for="form_check_cardigans">
                                    Cardigans
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_coats">
                                <label class="form-check-label" for="form_check_coats">
                                    Coats
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_dresses">
                                <label class="form-check-label" for="form_check_dresses">
                                    Dresses
                                </label>
                            </div>
                        </div>






                        <div class="border-bottom pb-3 mb-3" style="width: 100%;">
                            <div class="row mb-3">
                                <div class="col" style="font-size: 14px; font-weight: 600; color: #020101;">Designer</div>
                                <div class="col" style="text-align: right; font-size: 14px; font-weight: 500; color: #b1b0b9;">Clear</div>
                            </div>
                            @foreach($shops as $key => $shop)
                                <div class="py-1">
                                    <i class="fas fa-plus"></i> <label>{{ $shop->name }}</label>
                                </div>
                            @endforeach

                        </div>




                        <div class="border-bottom pb-3 mb-3" style="width: 100%;">
                            <div class="row mb-3">
                                <div class="col" style="font-size: 14px; font-weight: 600; color: #020101;">Style</div>
                                <div class="col" style="text-align: right; font-size: 14px; font-weight: 500; color: #b1b0b9;">Clear</div>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_bags">
                                <label class="form-check-label" for="form_check_bags">
                                    Haute Couture
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_beachwear">
                                <label class="form-check-label" for="form_check_beachwear">
                                    Street Wear
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_bodysuit">
                                <label class="form-check-label" for="form_check_bodysuit">
                                    Vintage
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_cardigans">
                                <label class="form-check-label" for="form_check_cardigans">
                                    Sports Wear
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_coats">
                                <label class="form-check-label" for="form_check_coats">
                                    Basic
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_dresses">
                                <label class="form-check-label" for="form_check_dresses">
                                    Mix & Match
                                </label>
                            </div>
                        </div>

                        <div class="border-bottom pb-3 mb-3" style="width: 100%;">
                            <div class="row mb-3">
                                <div class="col" style="font-size: 14px; font-weight: 600; color: #020101;">Color</div>
                                <div class="col" style="text-align: right; font-size: 14px; font-weight: 500; color: #b1b0b9;">Clear</div>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_bags">
                                <label class="form-check-label" for="form_check_bags">
                                    Beize
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_beachwear">
                                <label class="form-check-label" for="form_check_beachwear">
                                    Black
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_bodysuit">
                                <label class="form-check-label" for="form_check_bodysuit">
                                    Blue
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_cardigans">
                                <label class="form-check-label" for="form_check_cardigans">
                                    Bronze
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_coats">
                                <label class="form-check-label" for="form_check_coats">
                                    Brown
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_dresses">
                                <label class="form-check-label" for="form_check_dresses">
                                    Gold
                                </label>
                            </div>
                        </div>

                        <div class="border-bottom pb-3 mb-3" style="width: 100%;">
                            <div class="row mb-3">
                                <div class="col" style="font-size: 14px; font-weight: 600; color: #020101;">Size</div>
                                <div class="col" style="text-align: right; font-size: 14px; font-weight: 500; color: #b1b0b9;">Clear</div>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_bags">
                                <label class="form-check-label" for="form_check_bags">
                                    S
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_beachwear">
                                <label class="form-check-label" for="form_check_beachwear">
                                    M
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_bodysuit">
                                <label class="form-check-label" for="form_check_bodysuit">
                                    L
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_cardigans">
                                <label class="form-check-label" for="form_check_cardigans">
                                    XL
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_coats">
                                <label class="form-check-label" for="form_check_coats">
                                    One Size
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_dresses">
                                <label class="form-check-label" for="form_check_dresses">
                                    SX
                                </label>
                            </div>
                        </div>

                        <div class="border-bottom pb-3 mb-3" style="width: 100%;">
                            <div class="row mb-3">
                                <div class="col" style="font-size: 14px; font-weight: 600; color: #020101;">Price</div>
                                <div class="col" style="text-align: right; font-size: 14px; font-weight: 500; color: #b1b0b9;">Clear</div>
                            </div>


                            <div class="px-2">
                                <div id="price_range"></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col"><label id="price_range_min_amount"></label></div>
                                <div class="col text-end"><label id="price_range_max_amount"></label></div>
                            </div>


                        </div>

                        <div class="border-bottom pb-3 mb-3" style="width: 100%;">
                            <div class="row">
                                <div class="col"><span style="font-size: 14px; font-weight: 600; color: #020101; padding-top: 8px;">Advanced</span></div>
                                <div class="col text-end"><a data-bs-toggle="collapse" href="#advanced_content" id="advanced_expand_controller" aria-expanded="false" aria-controls="advanced_content" style="color: #020101; text-decoration: none;"><i class="fas fa-plus"></i></a></div>
                            </div>
                        </div>


                        <div class="collapse" id="advanced_content">
                            <div class="border-bottom pb-3 mb-3" style="width: 100%;">
                                <div class="row mb-3">
                                    <div class="col" style="font-size: 14px; font-weight: 600; color: #020101;">Accessories</div>
                                    <div class="col" style="text-align: right; font-size: 14px; font-weight: 500; color: #b1b0b9;">Clear</div>
                                </div>
                                @foreach($topCategories as $key => $topCategory)
                                    <div class="py-1">
                                        <i class="fas fa-plus"></i> <label>{{ $topCategory->name }}</label>
                                    </div>
                                @endforeach
                            </div>

                            <div class="border-bottom pb-3 mb-3" style="width: 100%;">
                                <div class="row mb-3">
                                    <div class="col" style="font-size: 14px; font-weight: 600; color: #020101;">Main Category</div>
                                    <div class="col" style="text-align: right; font-size: 14px; font-weight: 500; color: #b1b0b9;">Clear</div>
                                </div>
                                @foreach($topCategories as $key => $topCategory)
                                    <div class="py-1">
                                        <i class="fas fa-plus"></i> <label>{{ $topCategory->name }}</label>
                                    </div>
                                @endforeach
                            </div>

                            <div class="border-bottom pb-3 mb-3" style="width: 100%;">
                                <div class="row mb-3">
                                    <div class="col" style="font-size: 14px; font-weight: 600; color: #020101;">Main Category</div>
                                    <div class="col" style="text-align: right; font-size: 14px; font-weight: 500; color: #b1b0b9;">Clear</div>
                                </div>
                                @foreach($topCategories as $key => $topCategory)
                                    <div class="py-1">
                                        <i class="fas fa-plus"></i> <label>{{ $topCategory->name }}</label>
                                    </div>
                                @endforeach
                            </div>

                            <div class="border-bottom pb-3 mb-3" style="width: 100%;">
                                <div class="row">
                                    <div class="col"><span style="font-size: 14px; font-weight: 600; color: #020101; padding-top: 8px;">More</span></div>
                                    <div class="col text-end"><span id="more_filter" style="color: #020101; text-decoration: none; cursor: pointer;"><i class="fas fa-plus"></i></span></div>
                                </div>
                            </div>

                        </div>


                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-9 col-xxl-10">


                        <div id="shop_products_container"></div>


                    </div>
                </div>



            </div>
        </div>
    </div>




    <div class="modal" tabindex="-1" id="add_to_cart_success_modal">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <div><i class="far fa-check-circle fa-2x text-success"></i></div>
                    <div class="ms-2 text-success" style="font-size: larger; font-weight: 600;">Item added to Cart successfully</div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                </div>
                <div class="row py-4">
                    <div class="col">
                        <div class="text-center">
                            <button type="button" class="btn btn-outline-primary me-3" data-bs-dismiss="modal" style="border-radius: 2px !important;">Back to Shopping</button>
                            <button type="button" class="btn btn-primary" id="go_to_checkout" style="background-color: #377dff !important; border-color: #377dff !important; border-radius: 2px !important;">Proceed to Checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="modal" tabindex="-1" id="more_filter_modal">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="padding-left: 100px; padding-right: 100px;">
                    <div class="row">
                        <div class="col">
                            <span style="font-size: 24px; font-weight: 600; color: #020101;">More Filters</span>
                        </div>
                        <div class="col text-end">
                            <span class="me-3" style="color: #b1b0b9; font-weight: 600; font-size: 18px;">Clear</span>
                            <span style="padding: 10px 50px; border-radius: 6px; border: none; background: linear-gradient(270deg, #FA4A6F 0%, #FFA7E7 100%); color: #ffffff;">Apply</span>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col">
                            <div class="mb-2" style="color: #020101; font-weight: 600; font-size: 16px;">Filter Title</div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_category_1">
                                <label class="form-check-label" for="form_check_category_1">
                                    Category
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_category_2">
                                <label class="form-check-label" for="form_check_category_2">
                                    Category
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_category_3">
                                <label class="form-check-label" for="form_check_category_3">
                                    Category
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_category_4">
                                <label class="form-check-label" for="form_check_category_4">
                                    Category
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_category_5">
                                <label class="form-check-label" for="form_check_category_5">
                                    Category
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2" style="color: #020101; font-weight: 600; font-size: 16px;">Filter Title</div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_category_11">
                                <label class="form-check-label" for="form_check_category_11">
                                    Category
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_category_21">
                                <label class="form-check-label" for="form_check_category_21">
                                    Category
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_category_31">
                                <label class="form-check-label" for="form_check_category_31">
                                    Category
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_category_41">
                                <label class="form-check-label" for="form_check_category_41">
                                    Category
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_category_51">
                                <label class="form-check-label" for="form_check_category_51">
                                    Category
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2" style="color: #020101; font-weight: 600; font-size: 16px;">Filter Title</div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_category_12">
                                <label class="form-check-label" for="form_check_category_12">
                                    Category
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_category_22">
                                <label class="form-check-label" for="form_check_category_22">
                                    Category
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_category_32">
                                <label class="form-check-label" for="form_check_category_32">
                                    Category
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_category_42">
                                <label class="form-check-label" for="form_check_category_42">
                                    Category
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_category_52">
                                <label class="form-check-label" for="form_check_category_52">
                                    Category
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2" style="color: #020101; font-weight: 600; font-size: 16px;">Filter Title</div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_category_13">
                                <label class="form-check-label" for="form_check_category_13">
                                    Category
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_category_23">
                                <label class="form-check-label" for="form_check_category_23">
                                    Category
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_category_33">
                                <label class="form-check-label" for="form_check_category_33">
                                    Category
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_category_43">
                                <label class="form-check-label" for="form_check_category_43">
                                    Category
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_category_53">
                                <label class="form-check-label" for="form_check_category_53">
                                    Category
                                </label>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>








    <script type="text/javascript">



        $(document).ready(function () {

            $( "#price_range" ).slider({
                range: true,
                min: 0,
                max: 5000,
                values: [ 0, 5000 ],
                slide: function( event, ui ) {
                    $('#price_range_min_amount').text('$' + ui.values[0]);
                    $('#price_range_max_amount').text('$' + ui.values[1]);
                    console.log(ui.values[0]);
                    console.log(ui.values[1]);
                }
            });

            $( "#price_range_min_amount" ).text( "$" + $( "#price_range" ).slider( "values", 0 ));
            $( "#price_range_max_amount" ).text( "$" + $( "#price_range" ).slider( "values", 1 ));





            let subSubCategoryId = '{{ $subSubCategoryId }}';
            let skip = parseInt('{{ $skip }}');
            let limit = parseInt('{{ $limit }}');

            $.ajax({
                method: 'get',
                url: '{{ url('get/products/for/shop') }}',
                data: {
                    subsubcategory_id: subSubCategoryId,
                    skip: skip,
                    limit: limit
                },
                success: function (result) {
                    console.log(result);
                    if (result.length > 0) {
                        let i = 0;
                        $.each(result, function (key, product) {
                            if (key % 4 === 0) {
                                i++;
                                $('#shop_products_container').append('<div class="row" style="margin-bottom: 70px;" id="shop_products_row_' + i + '"></div>');
                            }
                            let productThumbnail = '{{ asset('') }}' + product.thumbnail_img;
                            let designerPhoto = '{{ asset('') }}' + product.user.shop.logo;
                            $('#shop_products_row_' +  i).append(
                                '<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-3 col-xxl-3 px-xxl-4">' +
                                '<div><span style="cursor: pointer;" data-product_id="' + product.id + '" class="shop_product" title="Show Product Details"><img src="' + productThumbnail + '" class="img-fluid"></span></div>' +
                                '<div class="mt-3"><span class="shop_product_designer" data-designer_id="' + product.user.shop.id + '" style="cursor: pointer;" title="Show Designer Details"><img src="' + designerPhoto + '" style="height: 50px; width: 50px; border-radius: 50%;"><span style="color: #020101; font-weight: 600; margin-left: 10px;">' + product.user.shop.name + '</span></span></div>' +
                                '<div class="mt-3"><span class="shop_product" style="color: #020101; font-size: 18px; font-weight: 600; cursor: pointer;" data-product_id="' + product.id + '" title="Show Product Details">' + product.name + '</span></div>' +
                                '<div class="row mt-3"><div class="col"><span style="color: #b1b0b9; font-weight: 600; font-size: 18px; cursor: pointer;" class="shop_product" data-product_id="' + product.id + '" title="Show Product Details">$' + product.purchase_price + '</span></div><div class="col text-end"><i class="fas fa-cart-plus text-info shop_product_add_to_cart" style="cursor: pointer;" data-product_id="' + product.id + '" title="Add to Cart"></i></div></div>' +
                                '</div>'
                            );
                        });

                        if (result.length === 8) {
                            $('#shop_products_container').append(
                                '<div class="row">' +
                                '<div class="col text-center">' +
                                '<button data-skip="' + (skip + 8) + '" data-limit="' + limit + '" id="shop_products_load_more" type="button" style="padding: 15px 100px; border-radius: 5px; border: none; background: linear-gradient(270deg, #FA4A6F 0%, #FFA7E7 100%); color: #ffffff;">Load more</button>' +
                                '</div>' +
                                '</div>'
                            );
                        }





                        $(document).on('click', '#shop_products_load_more', function () {
                            let loadMoreSkip = parseInt($(this).data('skip'));
                            let loadMoreLimit = parseInt($(this).data('limit'));

                            $('#shop_products_load_more').parent().parent().remove();
                            $.ajax({
                                method: 'get',
                                url: '{{ url('get/products/for/shop') }}',
                                data: {
                                    subsubcategory_id: subSubCategoryId,
                                    skip: loadMoreSkip,
                                    limit: loadMoreLimit
                                },
                                success: function (loadMoreResult) {
                                    console.log(loadMoreResult);
                                    if (loadMoreResult.length > 0) {
                                        let j = $('#shop_products_container').children('div').length;
                                        $.each(loadMoreResult, function (loadMoreKey, loadMoreProduct) {
                                            if (loadMoreKey % 4 === 0) {
                                                j++;
                                                $('#shop_products_container').append('<div class="row" style="margin-bottom: 70px;" id="shop_products_row_' + j + '"></div>');
                                            }
                                            let loadMoreProductThumbnail = '{{ asset('') }}' + loadMoreProduct.thumbnail_img;
                                            let loadMoreDesignerPhoto = '{{ asset('') }}' + loadMoreProduct.user.shop.logo;
                                            $('#shop_products_row_' +  i).append(
                                                '<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-3 col-xxl-3 px-xxl-4">' +
                                                '<div><span style="cursor: pointer;" data-product_id="' + loadMoreProduct.id + '" class="shop_product" title="Show Product Details"><img src="' + loadMoreProductThumbnail + '" class="img-fluid"></span></div>' +
                                                '<div class="mt-3"><span class="shop_product_designer" data-designer_id="' + loadMoreProduct.user.shop.id + '" style="cursor: pointer;" title="Show Designer Details"><img src="' + loadMoreDesignerPhoto + '" style="height: 50px; width: 50px; border-radius: 50%;"><span style="color: #020101; font-weight: 600; margin-left: 10px;">' + loadMoreProduct.user.shop.name + '</span></span></div>' +
                                                '<div class="mt-3"><span class="shop_product" style="color: #020101; font-size: 18px; font-weight: 600; cursor: pointer;" data-product_id="' + loadMoreProduct.id + '" title="Show Product Details">' + loadMoreProduct.name + '</span></div>' +
                                                '<div class="row mt-3"><div class="col"><span style="color: #b1b0b9; font-weight: 600; font-size: 18px; cursor: pointer;" class="shop_product" data-product_id="' + loadMoreProduct.id + '" title="Show Product Details">$' + loadMoreProduct.purchase_price + '</span></div><div class="col text-end"><i class="fas fa-cart-plus text-info shop_product_add_to_cart" style="cursor: pointer;" data-product_id="' + loadMoreProduct.id + '" title="Add to Cart"></i></div></div>' +
                                                '</div>'
                                            );
                                        });

                                        if (loadMoreResult.length === 8) {
                                            $('#shop_products_container').append(
                                                '<div class="row">' +
                                                '<div class="col text-center">' +
                                                '<button data-skip="' + (loadMoreSkip + 8) + '" data-limit="' + loadMoreLimit + '" id="shop_products_load_more" type="button" style="padding: 15px 100px; border-radius: 5px; border: none; background: linear-gradient(270deg, #FA4A6F 0%, #FFA7E7 100%); color: #ffffff;">Load more</button>' +
                                                '</div>' +
                                                '</div>'
                                            );
                                        }


                                    }
                                }
                            });
                        });
                    } else {
                        $('#shop_products_container').append('<div class="row" style="margin-bottom: 70px;"><div class="col text-center"><div class="alert alert-warning" role="alert">No Items Found!</div></div></div>');
                    }

                },
                error: function (xhr) {
                    console.log(xhr);
                }
            });
        });

        $(document).on('click', '#advanced_expand_controller', function () {
            console.log($(this).attr('aria-expanded'))
            if ($(this).attr('aria-expanded') === 'true') {
                $(this).html('<i class="fas fa-minus"></i>');
            }
            if ($(this).attr('aria-expanded') === 'false') {
                $(this).html('<i class="fas fa-plus"></i>');
            }
            return false;
        });

        $(document).on('click', '#more_filter', function () {
            $('#more_filter_modal').modal('show');
        });


        $(document).on('click', '.shop_product', function () {
            let productId = $(this).data('product_id');
            location = '{{ url('product') }}/' +  productId;
        });

        $(document).on('click', '.shop_product_designer', function () {
            let designerId = $(this).data('designer_id');
            location = '{{ url('designer-profile') }}/' +  designerId;
        });

        $(document).on('click', '.shop_product_add_to_cart', function () {
            let productId = $(this).data('product_id');
            $.ajax({
                method: 'get',
                url: '{{ url('add/to/cart') }}',
                data: {
                    product_id: productId
                },
                success: function (result) {
                    console.log(result);
                    $('#cart_counter_label').text(result.data.length);
                    let lastItem = result.addedItem;
                    let lastItemThumbnail = '{{ asset('storage') }}/' + lastItem.thumbnail_img;
                    $('#add_to_cart_success_modal .modal-body').empty().append('<div class="row"><div class="col-2"><img src="' + lastItemThumbnail + '" class="img-fluid"></div><div class="col-10 pt-3"><div style="font-weight: 600; color: #020101;">' + lastItem.name + '</div><div style="color: #b1b0b9;">Price: $' + lastItem.purchase_price + '</div></div></div>')
                    $('#add_to_cart_success_modal').modal('show');
                },
                error: function (xhr) {
                    console.log(xhr);
                }
            });
        });


    </script>


@endsection