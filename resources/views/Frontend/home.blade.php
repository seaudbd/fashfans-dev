@extends('Layouts.frontend')
@section('content')

    <style type="text/css">
        .top_banner_category {
            position: relative; width: 150px; height: 150px; border-radius: 50%; background-color: rgba(0,0,0,0.8); cursor: pointer;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-11 mx-auto">
                <div style="position: relative; height: 575px; width: 100%;">
                    <img src="" id="home_top_banner" style="width: 100%;">
                    <img src="{{ asset('storage/images/application/logo_3.png') }}" style="position: absolute; top: 50%; left: 0; transform: translate(-50%, 0); -ms-transform: translate(-50%, 0); width: 75px; height: 75px; margin-top: -37.5px;">
                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); -ms-transform: translate(-50%, -50%); background-color: #f0a238; color: #ffffff; opacity: 0.8; text-align: center; font-size: 20px; font-weight: 800; padding: 10px 45px; border-radius: 10px; text-transform: uppercase;">
                        Bespoke, hand-crafted and delivered directly from the studios of emerging designers
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-11 mx-auto text-center" id="featured_categories">

            </div>
        </div>
    </div>


    <div id="popular_items_container">

    </div>





    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-11 py-5 mx-auto">
                <div class="text-center" style="font-size: 32px;">Meet the Designer</div>
                <div class="text-center mb-5" style="font-size: 16px;">Be inspired, Be connected, Be part of the creation process.</div>

                <div id="designers_container"></div>







                <div class="row mt-5">
                    <div class="col text-center">
                        <button type="button" id="show_all_designers" style="height: 57px; width: 248px; border-radius: 5.65px; border: none; background: linear-gradient(270deg, #FA4A6F 0%, #FFA7E7 100%);">Show all Designers</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-11 py-5 mx-auto">
                <div class="text-center" style="font-size: 32px;">Popular Items from Top Sellers</div>
                <div class="text-center" style="font-size: 16px;">Find the best popular items from top sellers which are right for you.</div>

                <div class="row mt-5">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-3 home_item_holder">
                        <div class="home_item_normal_view">
                            <img src="{{ asset('storage/images/home/ladies_shoe_1.jpg') }}" class="img-fluid" style="height: 350px !important;">
                        </div>
                        <div class="home_item_hover_view ps-xxl-3 d-none" style="position: relative; cursor: pointer;">
                            <div style="position: absolute; top: 0; left: 45%; transform: translate(0, -50%); -ms-transform: translate(0, -50%);"><img src="{{ asset('storage/images/application/logo_7.png') }}"></div>
                            <div class="text-center"><img src="{{ asset('storage/images/home/ladies_shoe_1.jpg') }}" style="width: 225px; height: 225px; border: 1px solid #b1b0b9; border-radius: 50%; padding: 5%;"></div>
                            <div class="mt-3 text-center">
                                <span style="color: #020101;">Valentino</span>
                            </div>
                            <div class="mt-1 text-center">
                                <span style="color: #020101; font-size: 20px; font-weight: 600; text-transform: uppercase;">Sling Back</span>
                            </div>
                            <div class="mt-1 text-center">
                                <span style="color: #020101;">$49</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-3 home_item_holder">
                        <div class="home_item_normal_view">
                            <img src="{{ asset('storage/images/home/ladies_gown.jpg') }}" class="img-fluid" style="height: 350px !important;">
                        </div>
                        <div class="home_item_hover_view ps-xxl-3 d-none" style="position: relative; cursor: pointer;">
                            <div style="position: absolute; top: 0; left: 45%; transform: translate(0, -50%); -ms-transform: translate(0, -50%);"><img src="{{ asset('storage/images/application/logo_7.png') }}"></div>
                            <div class="text-center"><img src="{{ asset('storage/images/home/ladies_gown.jpg') }}" style="width: 225px; height: 225px; border: 1px solid #b1b0b9; border-radius: 50%; padding: 5%;"></div>
                            <div class="mt-3 text-center">
                                <span style="color: #020101;">Valentino</span>
                            </div>
                            <div class="mt-1 text-center">
                                <span style="color: #020101; font-size: 20px; font-weight: 600; text-transform: uppercase;">Sling Back</span>
                            </div>
                            <div class="mt-1 text-center">
                                <span style="color: #020101;">$49</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-3 home_item_holder">
                        <div class="home_item_normal_view">
                            <img src="{{ asset('storage/images/home/ladies_shoe_2.jpg') }}" class="img-fluid" style="height: 350px !important;">
                        </div>
                        <div class="home_item_hover_view ps-xxl-3 d-none" style="position: relative; cursor: pointer;">
                            <div style="position: absolute; top: 0; left: 45%; transform: translate(0, -50%); -ms-transform: translate(0, -50%);"><img src="{{ asset('storage/images/application/logo_7.png') }}"></div>
                            <div class="text-center"><img src="{{ asset('storage/images/home/ladies_shoe_2.jpg') }}" style="width: 225px; height: 225px; border: 1px solid #b1b0b9; border-radius: 50%; padding: 5%;"></div>
                            <div class="mt-3 text-center">
                                <span style="color: #020101;">Valentino</span>
                            </div>
                            <div class="mt-1 text-center">
                                <span style="color: #020101; font-size: 20px; font-weight: 600; text-transform: uppercase;">Sling Back</span>
                            </div>
                            <div class="mt-1 text-center">
                                <span style="color: #020101;">$49</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-3 home_item_holder">
                        <div class="home_item_normal_view">
                            <img src="{{ asset('storage/images/home/ladies_bag_1.jpg') }}" class="img-fluid" style="height: 350px !important;">
                        </div>
                        <div class="home_item_hover_view ps-xxl-3 d-none" style="position: relative; cursor: pointer;">
                            <div style="position: absolute; top: 0; left: 45%; transform: translate(0, -50%); -ms-transform: translate(0, -50%);"><img src="{{ asset('storage/images/application/logo_7.png') }}"></div>
                            <div class="text-center"><img src="{{ asset('storage/images/home/ladies_bag_1.jpg') }}" style="width: 225px; height: 225px; border: 1px solid #b1b0b9; border-radius: 50%; padding: 5%;"></div>
                            <div class="mt-3 text-center">
                                <span style="color: #020101;">Valentino</span>
                            </div>
                            <div class="mt-1 text-center">
                                <span style="color: #020101; font-size: 20px; font-weight: 600; text-transform: uppercase;">Sling Back</span>
                            </div>
                            <div class="mt-1 text-center">
                                <span style="color: #020101;">$49</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-3 home_item_holder">
                        <div class="home_item_normal_view">
                            <img src="{{ asset('storage/images/home/ladies_eye_concealer.jpeg') }}" class="img-fluid" style="height: 350px !important;">
                        </div>
                        <div class="home_item_hover_view ps-xxl-3 d-none" style="position: relative; cursor: pointer;">
                            <div style="position: absolute; top: 0; left: 45%; transform: translate(0, -50%); -ms-transform: translate(0, -50%);"><img src="{{ asset('storage/images/application/logo_7.png') }}"></div>
                            <div class="text-center"><img src="{{ asset('storage/images/home/ladies_eye_concealer.jpeg') }}" style="width: 225px; height: 225px; border: 1px solid #b1b0b9; border-radius: 50%; padding: 5%;"></div>
                            <div class="mt-3 text-center">
                                <span style="color: #020101;">Valentino</span>
                            </div>
                            <div class="mt-1 text-center">
                                <span style="color: #020101; font-size: 20px; font-weight: 600; text-transform: uppercase;">Sling Back</span>
                            </div>
                            <div class="mt-1 text-center">
                                <span style="color: #020101;">$49</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-3 home_item_holder">
                        <div class="home_item_normal_view">
                            <img src="{{ asset('storage/images/home/ladies_bag_2.jpg') }}" class="img-fluid" style="height: 350px !important;">
                        </div>
                        <div class="home_item_hover_view ps-xxl-3 d-none" style="position: relative; cursor: pointer;">
                            <div style="position: absolute; top: 0; left: 45%; transform: translate(0, -50%); -ms-transform: translate(0, -50%);"><img src="{{ asset('storage/images/application/logo_7.png') }}"></div>
                            <div class="text-center"><img src="{{ asset('storage/images/home/ladies_bag_2.jpg') }}" style="width: 225px; height: 225px; border: 1px solid #b1b0b9; border-radius: 50%; padding: 5%;"></div>
                            <div class="mt-3 text-center">
                                <span style="color: #020101;">Valentino</span>
                            </div>
                            <div class="mt-1 text-center">
                                <span style="color: #020101; font-size: 20px; font-weight: 600; text-transform: uppercase;">Sling Back</span>
                            </div>
                            <div class="mt-1 text-center">
                                <span style="color: #020101;">$49</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-3 home_item_holder">
                        <div class="home_item_normal_view">
                            <img src="{{ asset('storage/images/home/ladies_bag_3.jpg') }}" class="img-fluid" style="height: 350px !important;">
                        </div>
                        <div class="home_item_hover_view ps-xxl-3 d-none" style="position: relative; cursor: pointer;">
                            <div style="position: absolute; top: 0; left: 45%; transform: translate(0, -50%); -ms-transform: translate(0, -50%);"><img src="{{ asset('storage/images/application/logo_7.png') }}"></div>
                            <div class="text-center"><img src="{{ asset('storage/images/home/ladies_bag_3.jpg') }}" style="width: 225px; height: 225px; border: 1px solid #b1b0b9; border-radius: 50%; padding: 5%;"></div>
                            <div class="mt-3 text-center">
                                <span style="color: #020101;">Valentino</span>
                            </div>
                            <div class="mt-1 text-center">
                                <span style="color: #020101; font-size: 20px; font-weight: 600; text-transform: uppercase;">Sling Back</span>
                            </div>
                            <div class="mt-1 text-center">
                                <span style="color: #020101;">$49</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-3 home_item_holder">
                        <div class="home_item_normal_view">
                            <img src="{{ asset('storage/images/home/ladies_lipstick.jpg') }}" class="img-fluid" style="height: 350px !important;">
                        </div>
                        <div class="home_item_hover_view ps-xxl-3 d-none" style="position: relative; cursor: pointer;">
                            <div style="position: absolute; top: 0; left: 45%; transform: translate(0, -50%); -ms-transform: translate(0, -50%);"><img src="{{ asset('storage/images/application/logo_7.png') }}"></div>
                            <div class="text-center"><img src="{{ asset('storage/images/home/ladies_lipstick.jpg') }}" style="width: 225px; height: 225px; border: 1px solid #b1b0b9; border-radius: 50%; padding: 5%;"></div>
                            <div class="mt-3 text-center">
                                <span style="color: #020101;">Valentino</span>
                            </div>
                            <div class="mt-1 text-center">
                                <span style="color: #020101; font-size: 20px; font-weight: 600; text-transform: uppercase;">Sling Back</span>
                            </div>
                            <div class="mt-1 text-center">
                                <span style="color: #020101;">$49</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col text-center">
                        <button type="button" id="show_all_items" style="height: 57px; width: 248px; border-radius: 5.65px; border: none; background: linear-gradient(270deg, #FA4A6F 0%, #FFA7E7 100%);">Show all Items</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script type="text/javascript">
    
    
    
        $(document).ready(function () {


            $.ajax({
                method: 'get',
                url: '{{ url('get/posts/for/home/page') }}',

                success: function (result) {
                    console.log(result);
                    if (result.length > 0) {
                        let i = 0;
                        $.each(result, function (key, value) {
                            if (key % 3 === 0) {
                                i++;
                                $('#designers_container').append('<div class="row mb-5 px-5" id="designers_row_' + i + '"></div>');
                            }

                            let backgroundImage = '{{ asset('') }}' + value.image;

                            let logo = '{{ asset('storage/images/application/logo_7.png') }}';

                            $('#designers_row_' +  i).append(
                                '<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 pe-xxl-4 ps-xxl-4" style="position: relative;">' +
                                '<div class="fasnfans_logo_for_designer_hover_view d-none" style="position: absolute; top: 0; left: 50%; transform: translate(0, -50%); -ms-transform: translate(0, -50%);"><img src="' + logo + '"></div>' +
                                '<div class="designer_content_holder" data-designer_id="' + value.user.shop.id + '" style="padding-top: 15px; padding-bottom: 15px;">' +


                                '<div style="background: url(' + backgroundImage + '); height: 420px; cursor: pointer; background-repeat: no-repeat; background-size: cover;">' +

                                '<div style="height: 260px;" class="designer_blank_space"></div>' +
                                '<div class="designer_hover_view d-none" style="height: 160px; background-color: #fff;" >' +
                                '<div class="row pt-3">' +
                                '<div class="col-8">' +
                                '<div class="d-inline-block me-3"><i class="far fa-heart"></i> <span class="likes_count">' + value.likes.length + ' Likes</span></div>' +
                                '<div class="d-inline-block"><i class="far fa-comment-alt"></i> <span class="comments_count">' + value.comments.length + '</span></div>' +
                                '</div>' +
                                '<div class="col-4 text-end">' +
                                '<button type="button" class="btn btn-sm btn-outline-secondary fw-bold">Follow</button>' +
                                '</div>' +
                                '</div>' +
                                '<div class="mt-3">' +
                                '<span style="font-size: 20px; font-weight: 600; color: #020101; text-transform: uppercase;">' + value.user.shop.name + '</span>' +
                                '</div>' +
                                '<div class="py-2">' +
                                '<span style="color: #020101;">' + value.content.substr(0, 100) + '</span>' +
                                '</div>' +
                                '</div>' +
                                '</div>' +




                                '</div>' +
                                '</div>'
                            );
                        });

                        
                    }
                },
                error: function (xhr) {
                    console.log(xhr)
                }
            });







            $.ajax({
                method: 'get',
                url: '{{ url('get/featured/categories/for/home/page') }}',

                success: function (result) {
                    console.log(result);
                    if (result.length > 0) {


                        $.each(result, function (key, value) {
                            let applicationLogo = '{{ asset("storage/images/application/logo_4.png") }}';
                            let classValue = key !== 3 ? 'd-inline-block me-5 top_banner_category' : 'd-inline-block top_banner_category';
                            let icon = '{{ asset('') }}' + value.icon;
                            let banner = '{{ asset('') }}' + value.banner;
                            if (key === 0) {
                                $('#home_top_banner').attr('src', banner);
                            }
                            $('#featured_categories').append(
                                '<div class="' + classValue + '" data-category="' + value.name.split(' ').join('_').toLowerCase() + '" data-category_banner="' + banner + '">' +
                                '<img src="' + icon + '" height="150" width="150" style="border-radius: 50%; opacity: 0.2;">' +
                                '<img src="' + applicationLogo + '" style="position: absolute; top: 35px; left: 55px;">' +
                                '<div style="position: absolute; top: 55px; left: 20px; width: 110px; height: 60px; color: #fdfdfd; font-weight: 600; font-size: 18px;">' + value.name + '</div>' +
                                '</div>'
                            );




                            if (value.products.length > 0) {
                                let designerFeaturedImage = JSON.parse(value.products[0].user.shop.sliders)[2];
                                let productLeftImage = value.products[0].featured_img;
                                let productMiddleImage = value.products[2].featured_img;
                                let productRightImage = value.products[1].featured_img;

                                let classValue = key === 0 ? 'container-fluid' : 'container-fluid d-none';
                                let applicationLogo = '{{ asset('storage/images/application/logo_6.png') }}';

                                $('#popular_items_container').append(
                                    '<div class="' + classValue + '" id="popular_items_' + value.name.split(' ').join('_').toLowerCase() + '">' +
                                    '        <div class="row">' +
                                    '            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-11 py-5 mx-auto">' +
                                    '                <div class="text-center" style="font-size: 32px;">Explore Your Style</div>' +
                                    '                <div class="text-center" style="font-size: 16px;">Find the best popular items from top sellers which are right for you.</div>' +
                                    '                <div class="row mt-5">' +
                                    '                    <div class="col text-center">' +
                                    '                        <img src="' + productLeftImage + '" style="height: 475px; width: 360px; margin-top: -80px;">' +
                                    '                        <img src="' + designerFeaturedImage + '" style="height: 330px; width: 520px; margin-top: -220px;">' +
                                    '                        <div class="d-inline-block" style="margin-left: 50px; position: relative;">' +
                                    '                            <div style="height: 80px; width: 80px; background-color: #d0bbc1; border-radius: 50%; margin-bottom: 15px;"></div>' +
                                    '                            <div style="height: 80px; width: 80px; background-color: #c9778e; border-radius: 50%; margin-bottom: 15px;"></div>' +
                                    '                            <div style="height: 80px; width: 80px; background-color: #edc647; border-radius: 50%; margin-bottom: 15px;"></div>' +
                                    '                            <div style="height: 80px; width: 80px; background-color: #325645; border-radius: 50%; position: absolute; z-index: 10;"></div>' +
                                    '                        </div>' +
                                    '                    </div>' +
                                    '                </div>' +
                                    '                <div class="row" style="margin-top: -150px;">' +
                                    '                    <div class="col text-center" style="position: relative;">' +
                                    '                        <img src="' + applicationLogo + '" style="width: 260px; height: 115px; margin-top: 200px; margin-left: 50px; position: absolute;">' +
                                    '                        <img src="' + productMiddleImage + '" style="margin-left: 240px; width: 350px; height: 350px; border-radius: 50%; border-top: 5px solid #ffffff;">' +
                                    '                        <img src="' + productRightImage + '" style="width: 450px; height: 290px;">' +
                                    '                    </div>' +
                                    '                </div>' +
                                    '                <div class="row mt-5">' +
                                    '                    <div class="col text-center">' +
                                    '                        <button type="button" id="go_to_category" style="height: 57px; width: 248px; border-radius: 5.65px; border: none; background: linear-gradient(270deg, #FA4A6F 0%, #FFA7E7 100%);">Go to Category</button>' +
                                    '                    </div>' +
                                    '                </div>' +
                                    '            </div>' +
                                    '        </div>' +
                                    '    </div>'
                                );


                            }









                        });








                    }
                },
                error: function (xhr) {
                    console.log(xhr)
                }
            });










        });

        $(document).on('mouseover', '.designer_content_holder', function () {
            $(this).find('.designer_hover_view').removeClass('d-none');
            $(this).css({'padding-left': '15px', 'padding-right': '15px'});
            $(this).find('.designer_blank_space').css('height', '245px');
            $(this).find('.designer_hover_view').css('height', '175px');
            $(this).parent().find('.fasnfans_logo_for_designer_hover_view').removeClass('d-none');
            $(this).addClass('border rounded');
        });

        $(document).on('mouseout', '.designer_content_holder', function () {
            $(this).find('.designer_hover_view').addClass('d-none');
            $(this).css({'padding-left': '0', 'padding-right': '0'});
            $(this).find('.designer_blank_space').css('height', '260px');
            $(this).find('.designer_hover_view').css('height', '160px');
            $(this).parent().find('.fasnfans_logo_for_designer_hover_view').addClass('d-none');
            $(this).removeClass('border rounded');
        });

        $(document).on('click', '.designer_content_holder', function () {
            let designerId = $(this).data('designer_id');
            location = '{{ url('designer-profile') }}/' + designerId;
        });
    
    
        $(document).on('mouseover', '.home_item_holder', function () {
            $(this).find('.home_item_hover_view').removeClass('d-none');
            $(this).find('.home_item_normal_view').addClass('d-none');
        });

        $(document).on('mouseout', '.home_item_holder', function () {
            $(this).find('.home_item_hover_view').addClass('d-none');
            $(this).find('.home_item_normal_view').removeClass('d-none');
        });
        
        $(document).on('click', '.home_item_hover_view', function() {
            location = '{{ url('product/1') }}';
        });
        
        $(document).on('click', '#go_to_category', function() {
            location = '{{ url('shop/1') }}';
        });
        
        $(document).on('click', '.top_banner_category', function() {

            let category = $(this).data('category');
            let categoryBanner = $(this).data('category_banner');

            if (category === 'haute_couture') {
                $('#home_top_banner').attr('src', categoryBanner);
                $('#popular_items_haute_couture').removeClass('d-none');
                $('#popular_items_street_wear').addClass('d-none');
                $('#popular_items_vintage').addClass('d-none');
                $('#popular_items_mix_and_match').addClass('d-none');
            }

            if (category === 'street_wear') {
                $('#home_top_banner').attr('src', categoryBanner);
                $('#popular_items_haute_couture').addClass('d-none');
                $('#popular_items_street_wear').removeClass('d-none');
                $('#popular_items_vintage').addClass('d-none');
                $('#popular_items_mix_and_match').addClass('d-none');
            }

            if (category === 'vintage') {
                $('#home_top_banner').attr('src', categoryBanner);
                $('#popular_items_haute_couture').addClass('d-none');
                $('#popular_items_street_wear').addClass('d-none');
                $('#popular_items_vintage').removeClass('d-none');
                $('#popular_items_mix_and_match').addClass('d-none');
            }

            if (category === 'mix_&_match') {
                $('#home_top_banner').attr('src', categoryBanner);
                $('#popular_items_haute_couture').addClass('d-none');
                $('#popular_items_street_wear').addClass('d-none');
                $('#popular_items_vintage').addClass('d-none');
                $('#popular_items_mix_and_match').removeClass('d-none');
            }

        });

        $(document).on('mouseover', '.top_banner_category', function() {
            $(this).children('img').eq(0).css('opacity', 1);
        });

        $(document).on('mouseout', '.top_banner_category', function() {
            $(this).children('img').eq(0).css('opacity', 0.2);
        });
        
        $(document).on('click', '#show_all_items', function() {
            location = '{{ url('shop/1') }}';
        });
        
        $(document).on('click', '#show_all_designers', function() {
            location = '{{ url('designers') }}';
        })
    </script>


@endsection
