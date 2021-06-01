@extends('Layouts.frontend')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-11 mx-auto">
                <div style="font-size: 12px; margin-bottom: 15px;">
                    <a href="{{ url('/') }}" class="text-decoration-none text-dark">Home</a> > <a href="{{ url('designers') }}" class="text-decoration-none text-dark">Designers</a> > <span style="color: #b1b0b9;">{{ $designer->name }}</span>
                </div>
                <div style="position: relative; background-color: #f6f6f8;">
                    <img src="{{ asset(json_decode($designer->sliders)[0]) }}" class="img-fluid">
                    <img src="{{ asset('storage/images/application/logo_3.png') }}" style="position: absolute; top: 50%; left: 0; transform: translate(-50%, 0); -ms-transform: translate(-50%, 0); width: 75px; height: 75px; margin-top: -37.5px;">
                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); -ms-transform: translate(-50%, -50%); background-color: #35323d; color: #ffffff; opacity: 0.6; text-align: center; font-weight: 600; padding: 15px 75px; border-radius: 10px;">
                        <div style="text-transform: uppercase; font-size: 25px;">{{ $designer->name }}</div>
                    </div>
                    <img src="{{ asset($designer->logo) }}" style="width: 150px; height: 150px; border-radius: 50%; position: absolute; top: 430px; left: 150px;">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row" style="margin-top: 100px;">
            <div class="col-12 col-sm-12 col-md-12 col-lg-11 col-xl-10 col-xxl-9 mx-auto">
                <div style="font-size: 28px; font-weight: 600; color: #020101;">{{ $designer->name }}</div>
                <div class="row mt-3">
                    <div class="col-5">
                        <div class="d-inline-block me-5">
                            <div style="font-size: 12px; font-weight: 600; color: #b1b0b9; text-transform: uppercase;">Following</div>
                            <div style="font-size: 18px; font-weight: 600; color: #020101;">{{ count($designer->followers) }}</div>
                        </div>
                        <div class="d-inline-block me-5">
                            <div style="font-size: 12px; font-weight: 600; color: #b1b0b9; text-transform: uppercase;">Follower</div>
                            <div style="font-size: 18px; font-weight: 600; color: #020101;">{{ count($designer->followers) }}</div>
                        </div>
                        <div class="d-inline-block">
                            <button type="button" class="btn btn-sm btn-outline-secondary fw-bold" style="margin-top: -20px;">Message</button>
                        </div>
                    </div>
                    <div class="col-7 pt-3 text-end">
                        <div class="d-inline-block me-5" style="font-weight: 600; color: #FA4A6F;"><span style="cursor: pointer;" id="designer_profile"><i class="far fa-user"></i> Profile</span></div>
                        <div class="d-inline-block me-5" style="font-weight: 600;"><span style="cursor: pointer;" id="designer_feed"><i class="fas fa-rss"></i> Feed</span></div>
                        <div class="d-inline-block me-5" style="font-weight: 600;"><span style="cursor: pointer;" id="designer_shop"><i class="fas fa-store"></i> Shop</span></div>
                        <div class="d-inline-block" style="font-weight: 600;"><span style="cursor: pointer;" id="designer_collection"><i class="fas fa-boxes"></i> Collection</span></div>
                    </div>
                </div>
                <div class="border-bottom mt-3 mb-5"></div>
                <div class="row" id="designer_profile_content">
                    <div class="col-7 pe-xxl-5">
                        {!! $designer->meta_description !!}
                    </div>
                    <div class="col-5 text-end">
                        <img src="{{ asset(json_decode($designer->sliders)[1]) }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-11 mx-auto" id="designer_feed_content" style="display: none;">

            </div>
        </div>
    </div>

    <div class="container-fluid" id="designer_shop_container" style="display: none;">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-11 mx-auto">


                <div style="font-size: 16px; text-align: right;">Sort by <i class="fas fa-angle-down"></i></div>


                <div class="row mt-4">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-3 col-xxl-2">
                        <div class="row mb-4">
                            <div class="col" style="font-size: 18px; font-weight: 600; color: #020101;">Filters</div>
                            <div class="col" style="font-size: 18px; font-weight: 500; color: #b1b0b9; text-align: right;">Clear All</div>
                        </div>

                        <div class="border-bottom mb-4" style="height: 215px; width: 100%;">
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


                        <div class="border-bottom mb-4" style="height: 215px; width: 100%;">
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

                        <div class="border-bottom mb-4" style="height: 215px; width: 100%;">
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

                        <div class="border-bottom mb-4" style="height: 215px; width: 100%;">
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

                        <div class="border-bottom mb-4" style="width: 100%;">
                            <div class="row mb-3">
                                <div class="col" style="font-size: 14px; font-weight: 600; color: #020101;">Price</div>
                                <div class="col" style="text-align: right; font-size: 14px; font-weight: 500; color: #b1b0b9;">Clear</div>
                            </div>
                        </div>


                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-9 col-xxl-10" id="designer_shop_content">

                    </div>
                </div>



            </div>
        </div>
    </div>


    <div class="container-fluid" id="designer_collection_content" style="display: none;">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-11 mx-auto">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-4 pe-xxl-4 designer_collection_content_holder">
                        <div class="designer_collection_content_normal_view">
                            <div><img src="{{ asset('storage/images/designer_profile/collection/1.png') }}" class="img-fluid"></div>
                            <div class="mt-3"><span style="font-size: 18px; font-weight: 600; color: #020101; text-transform: uppercase;">Giorgio Armani Collection</span></div>
                        </div>
                        <div class="designer_collection_content_hover_view ps-xxl-3 d-none pt-4" style="position: relative;">
                            <div style="position: absolute; top: 0; left: 45%; transform: translate(0, -50%); -ms-transform: translate(0, -50%);"><img src="{{ asset('storage/images/application/logo_7.png') }}"></div>
                            <div><img src="{{ asset('storage/images/designer_profile/collection/1.png') }}" style="width: 100%; height: 410px;"></div>
                            <div class="mt-3"><span style="font-size: 18px; font-weight: 600; color: #020101; text-transform: uppercase;">Giorgio Armani Collection</span></div>
                            <div class="my-3">
                                <button type="button" style="height: 45px; width: 100%; border-radius: 5px; border: none; background: linear-gradient(270deg, #FA4A6F 0%, #FFA7E7 100%); color: #ffffff;">Shop Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 pe-xxl-4 ps-xxl-4 designer_collection_content_holder">
                        <div class="designer_collection_content_normal_view">
                            <div><img src="{{ asset('storage/images/designer_profile/collection/2.png') }}" class="img-fluid"></div>
                            <div class="mt-3"><span style="font-size: 18px; font-weight: 600; color: #020101; text-transform: uppercase;">Emporio Armani</span></div>
                        </div>
                        <div class="designer_collection_content_hover_view d-none pt-4" style="position: relative;">
                            <div style="position: absolute; top: 0; left: 45%; transform: translate(0, -50%); -ms-transform: translate(0, -50%);"><img src="{{ asset('storage/images/application/logo_7.png') }}"></div>
                            <div><img src="{{ asset('storage/images/designer_profile/collection/2.png') }}" style="width: 100%; height: 410px;"></div>
                            <div class="mt-3"><span style="font-size: 18px; font-weight: 600; color: #020101; text-transform: uppercase;">Emporio Armani</span></div>
                            <div class="my-3">
                                <button type="button" style="height: 45px; width: 100%; border-radius: 5px; border: none; background: linear-gradient(270deg, #FA4A6F 0%, #FFA7E7 100%); color: #ffffff;">Shop Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 ps-xxl-4 designer_collection_content_holder">
                        <div class="designer_collection_content_normal_view">
                            <div><img src="{{ asset('storage/images/designer_profile/collection/3.png') }}" class="img-fluid"></div>
                            <div class="mt-3"><span style="font-size: 18px; font-weight: 600; color: #020101; text-transform: uppercase;">EA7</span></div>
                        </div>
                        <div class="designer_collection_content_hover_view pe-xxl-3 d-none pt-4" style="position: relative;">
                            <div style="position: absolute; top: 0; left: 45%; transform: translate(0, -50%); -ms-transform: translate(0, -50%);"><img src="{{ asset('storage/images/application/logo_7.png') }}"></div>
                            <div><img src="{{ asset('storage/images/designer_profile/collection/3.png') }}" style="width: 100%; height: 410px;"></div>
                            <div class="mt-3"><span style="font-size: 18px; font-weight: 600; color: #020101; text-transform: uppercase;">EA7</span></div>
                            <div class="my-3">
                                <button type="button" style="height: 45px; width: 100%; border-radius: 5px; border: none; background: linear-gradient(270deg, #FA4A6F 0%, #FFA7E7 100%); color: #ffffff;">Shop Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-5"></div>






    <script type="text/javascript">


        $(document).ready(function () {


            $.ajax({
                method: 'get',
                url: '{{ url('get/posts/for/designer/profile/feed') }}',

                success: function (result) {
                    console.log(result);
                    if (result.length > 0) {
                        let i = 0;
                        $.each(result, function (key, value) {
                            if (key % 3 === 0) {
                                i++;
                                $('#designer_feed_content').append('<div class="row mb-5" id="designer_feed_content_row_' + i + '"></div>');
                            }
                            let backgroundImage = '{{ asset('') }}' + value.image;
                            $('#designer_feed_content_row_' +  i).append(
                                '<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 pe-xxl-4 ps-xxl-4">' +
                                '<div style="background: url(' + backgroundImage + '); height: 420px;"></div>' +
                                '</div>'
                            );
                        });
                    }
                },
                error: function (xhr) {
                    console.log(xhr)
                }
            });

        });





        $(document).ready(function () {
            let userId = '{{ $designer->user->id }}';
            let skip = 0;
            let limit = 8;

            $.ajax({
                method: 'get',
                url: '{{ url('get/products/for/designer/profile/shop') }}',
                data: {
                    user_id: userId,
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
                                $('#designer_shop_content').append('<div class="row mb-5" id="designer_shop_content_row_' + i + '"></div>');
                            }
                            let productThumbnail = '{{ asset('storage') }}/' + product.thumbnail_img;
                            let designerPhoto = '{{ asset('') }}' + product.user.shop.logo;
                            $('#designer_shop_content_row_' +  i).append(
                                '<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-3 col-xxl-3 px-xxl-4">' +
                                '<div><span style="cursor: pointer;" data-product_id="' + product.id + '" class="shop_product" title="Show Product Details"><img src="' + productThumbnail + '" class="img-fluid"></span></div>' +
                                '<div class="mt-3"><span class="shop_product_designer" data-designer_id="' + product.user.shop.id + '" style="cursor: pointer;" title="Show Designer Details"><img src="' + designerPhoto + '" style="height: 50px; width: 50px; border-radius: 50%;"><span style="color: #020101; font-weight: 600; margin-left: 10px;">' + product.user.shop.name + '</span></span></div>' +
                                '<div class="mt-3"><span class="shop_product" style="color: #020101; font-size: 18px; font-weight: 600; cursor: pointer;" data-product_id="' + product.id + '" title="Show Product Details">' + product.name + '</span></div>' +
                                '<div class="row mt-3"><div class="col"><span style="color: #b1b0b9; font-weight: 600; font-size: 18px; cursor: pointer;" class="shop_product" data-product_id="' + product.id + '" title="Show Product Details">$' + product.purchase_price + '</span></div><div class="col text-end"><i class="fas fa-cart-plus text-info shop_product_add_to_cart" style="cursor: pointer;" data-product_id="' + product.id + '" title="Add to Cart"></i></div></div>' +
                                '</div>'
                            );
                        });

                        if (result.length === 8) {
                            $('#designer_shop_content').append(
                                '<div class="row">' +
                                '<div class="col text-center">' +
                                '<button data-skip="' + (skip + 8) + '" data-limit="' + limit + '" id="designer_shop_content_load_more" type="button" style="padding: 15px 100px; border-radius: 5px; border: none; background: linear-gradient(270deg, #FA4A6F 0%, #FFA7E7 100%); color: #ffffff;">Load more</button>' +
                                '</div>' +
                                '</div>'
                            );
                        }





                        $(document).on('click', '#designer_shop_content_load_more', function () {
                            let loadMoreSkip = parseInt($(this).data('skip'));
                            let loadMoreLimit = parseInt($(this).data('limit'));

                            $('#designer_shop_content_load_more').parent().parent().remove();
                            $.ajax({
                                method: 'get',
                                url: '{{ url('get/products/for/designer/profile/shop') }}',
                                data: {
                                    user_id: userId,
                                    skip: loadMoreSkip,
                                    limit: loadMoreLimit
                                },
                                success: function (loadMoreResult) {
                                    console.log(loadMoreResult);
                                    if (loadMoreResult.length > 0) {
                                        let j = $('#designer_shop_content').children('div').length;
                                        $.each(loadMoreResult, function (loadMoreKey, loadMoreProduct) {
                                            if (loadMoreKey % 4 === 0) {
                                                j++;
                                                $('#designer_shop_content').append('<div class="row" style="margin-bottom: 70px;" id="designer_shop_content_row_' + j + '"></div>');
                                            }
                                            let loadMoreProductThumbnail = '{{ asset('storage') }}/' + loadMoreProduct.thumbnail_img;
                                            let loadMoreDesignerPhoto = '{{ asset('') }}' + loadMoreProduct.user.shop.logo;
                                            $('#designer_shop_content_row_' +  i).append(
                                                '<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-3 col-xxl-3 px-xxl-4">' +
                                                '<div><span style="cursor: pointer;" data-product_id="' + loadMoreProduct.id + '" class="shop_product" title="Show Product Details"><img src="' + loadMoreProductThumbnail + '" class="img-fluid"></span></div>' +
                                                '<div class="mt-3"><span class="shop_product_designer" data-designer_id="' + loadMoreProduct.user.shop.id + '" style="cursor: pointer;" title="Show Designer Details"><img src="' + loadMoreDesignerPhoto + '" style="height: 50px; width: 50px; border-radius: 50%;"><span style="color: #020101; font-weight: 600; margin-left: 10px;">' + loadMoreProduct.user.shop.name + '</span></span></div>' +
                                                '<div class="mt-3"><span class="shop_product" style="color: #020101; font-size: 18px; font-weight: 600; cursor: pointer;" data-product_id="' + loadMoreProduct.id + '" title="Show Product Details">' + loadMoreProduct.name + '</span></div>' +
                                                '<div class="row mt-3"><div class="col"><span style="color: #b1b0b9; font-weight: 600; font-size: 18px; cursor: pointer;" class="shop_product" data-product_id="' + loadMoreProduct.id + '" title="Show Product Details">$' + loadMoreProduct.purchase_price + '</span></div><div class="col text-end"><i class="fas fa-cart-plus text-info shop_product_add_to_cart" style="cursor: pointer;" data-product_id="' + loadMoreProduct.id + '" title="Add to Cart"></i></div></div>' +
                                                '</div>'
                                            );
                                        });

                                        if (loadMoreResult.length === 8) {
                                            $('#designer_shop_content').append(
                                                '<div class="row">' +
                                                '<div class="col text-center">' +
                                                '<button data-skip="' + (loadMoreSkip + 8) + '" data-limit="' + loadMoreLimit + '" id="designer_shop_content_load_more" type="button" style="padding: 15px 100px; border-radius: 5px; border: none; background: linear-gradient(270deg, #FA4A6F 0%, #FFA7E7 100%); color: #ffffff;">Load more</button>' +
                                                '</div>' +
                                                '</div>'
                                            );
                                        }


                                    }
                                }
                            });
                        });
                    } else {
                        $('#designer_shop_content').append('<div class="row" style="margin-bottom: 70px;"><div class="col text-center"><div class="alert alert-warning" role="alert">No Items Found!</div></div></div>');
                    }

                },
                error: function (xhr) {
                    console.log(xhr);
                }
            });
        });




        $(document).on('click', '#designer_profile', function () {
            if ($('#designer_profile_content').css('display') === 'none') {

                $('#designer_feed_content').hide('slow');
                $('#designer_feed').css('color', '#020101');

                $('#designer_shop_container').hide('slow');
                $('#designer_shop').css('color', '#020101');

                $('#designer_collection_content').hide('slow');
                $('#designer_collection').css('color', '#020101');

                $('#designer_profile_content').show('slow');
                $('#designer_profile').css('color', '#FA4A6F');

            } else {
                $('#designer_profile_content').hide('slow');
                $('#designer_profile').css('color', '#020101');
            }
        });

        $(document).on('click', '#designer_feed', function () {
            if ($('#designer_feed_content').css('display') === 'none') {

                $('#designer_profile_content').hide('slow');
                $('#designer_profile').css('color', '#020101');

                $('#designer_shop_container').hide('slow');
                $('#designer_shop').css('color', '#020101');

                $('#designer_collection_content').hide('slow');
                $('#designer_collection').css('color', '#020101');

                $('#designer_feed_content').show('slow');
                $('#designer_feed').css('color', '#FA4A6F');

            } else {
                $('#designer_feed_content').hide('slow');
                $('#designer_feed').css('color', '#020101');
            }
        });

        $(document).on('click', '#designer_shop', function () {
            if ($('#designer_shop_container').css('display') === 'none') {

                $('#designer_profile_content').hide('slow');
                $('#designer_profile').css('color', '#020101');

                $('#designer_feed_content').hide('slow');
                $('#designer_feed').css('color', '#020101');

                $('#designer_collection_content').hide('slow');
                $('#designer_collection').css('color', '#020101');

                $('#designer_shop_container').show('slow');
                $('#designer_shop').css('color', '#FA4A6F');

            } else {
                $('#designer_shop_container').hide('slow');
                $('#designer_shop').css('color', '#020101');
            }
        });

        $(document).on('click', '#designer_collection', function () {
            if ($('#designer_collection_content').css('display') === 'none') {

                $('#designer_profile_content').hide('slow');
                $('#designer_profile').css('color', '#020101');

                $('#designer_feed_content').hide('slow');
                $('#designer_feed').css('color', '#020101');

                $('#designer_shop_container').hide('slow');
                $('#designer_shop').css('color', '#020101');

                $('#designer_collection_content').show('slow');
                $('#designer_collection').css('color', '#FA4A6F');

            } else {
                $('#designer_collection_content').hide('slow');
                $('#designer_collection').css('color', '#020101');
            }
        });

        $(document).on('mouseover', '.designer_collection_content_holder', function () {
            $(this).find('.designer_collection_content_hover_view').removeClass('d-none');
            $(this).find('.designer_collection_content_normal_view').addClass('d-none');
            $(this).addClass('border rounded');
        });

        $(document).on('mouseout', '.designer_collection_content_holder', function () {
            $(this).find('.designer_collection_content_hover_view').addClass('d-none');
            $(this).find('.designer_collection_content_normal_view').removeClass('d-none');
            $(this).removeClass('border rounded');
        });
    </script>




@endsection