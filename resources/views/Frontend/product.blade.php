@extends('Layouts.frontend')
@section('content')



    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-11 mx-auto">
                <div style="font-size: 12px; margin-bottom: 15px;">
                    <a href="{{ url('/') }}" class="text-decoration-none text-dark">Home</a> > <a href="{{ url('shop') }}" class="text-decoration-none text-dark">Shop</a> > <a href="{{ url('shop/' . $product->subsubcategory->id) }}" class="text-decoration-none text-dark">{{ $product->subsubcategory->name }}</a> > <span style="color: #b1b0b9;">{{ $product->name }}</span>
                </div>



                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-11 col-xxl-10 mx-auto">






                        <div class="row mt-5">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 col-xxl-6">
                                <div class="row">
                                    <div class="col-12 col-sm-2">

                                        @foreach($product->photos as $key => $photo)
                                            @if($key === 0)
                                                <div class="mb-2 thumbnail_item" data-path="{{ asset('storage/' . $photo) }}" style="cursor: pointer;"><img src="{{ asset('storage/' . $photo) }}" class="img-thumbnail" style="height: 100px; width: 100px;"></div>
                                            @elseif($key === count($product->photos) - 1)
                                                <div class="thumbnail_item" data-path="{{ asset('storage/' . $photo) }}" style="cursor: pointer;"><img src="{{ asset('storage/' . $photo) }}" style="height: 100px; width: 100px;"></div>
                                            @else
                                                <div class="mb-2 thumbnail_item" data-path="{{ asset('storage/' . $photo) }}" style="cursor: pointer;"><img src="{{ asset('storage/' . $photo) }}" style="height: 100px; width: 100px;"></div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="col-12 col-sm-10 text-center">
                                        <div style="position: relative;">
                                            <div style="position: absolute; top: 240px; background-color: #020101; height: 35px; width: 35px; border-radius: 50%; cursor: pointer;" id="thumbnail_prev"><i class="fas fa-angle-left text-light fa-2x" style="padding-top: 2px;"></i></div>
                                            <div style="position: absolute; right: 0; top: 240px; background-color: #020101; height: 35px; width: 35px; border-radius: 50%; cursor: pointer;" id="thumbnail_next"><i class="fas fa-angle-right text-light fa-2x" style="padding-top: 2px;"></i></div>
                                        </div>
                                        <img src="{{ asset($product->thumbnail_img) }}" id="thumbnail_preview" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 col-xxl-6">
                                <img src="{{ asset($product->user->shop->logo) }}" style="height: 70px; width: 70px; border-radius: 50%;">
                                <span style="font-size: 20px; font-weight: 600; color: #020101;">Valentino</span>
                                <div class="mt-2" style="font-weight: 600; font-size: 28px; color: #020101;">{{ $product->name }}</div>
                                <div class="mt-2">
                                    <span class="me-3" style="font-weight: 600; font-size: 20px; color: #b1b0b9;">$79</span>
                                    <span style="font-weight: 600; font-size: 28px; color: #ef5395;">${{ $product->purchase_price }}</span>
                                </div>
                                <div class="mt-3">
                                    <div style="font-weight: 600; color: #020101;">Description</div>
                                </div>
                                <div class="mt-2">
                                    <div style="color: #b1b0b9;">
                                        {!! $product->description !!}
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-7 col-xxl-5">
                                        <div class="input-group">
                                            <label class="input-group-text" for="select_size" style="border-right: none; background-color: #ffffff;"><i class="fas fa-ruler-combined"></i></label>
                                            <select class="form-select" id="select_size" style="border-left: none;">
                                                <option selected>Select Size</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-7 col-xxl-5">
                                        <div class="input-group">
                                            <label class="input-group-text" for="select_color" style="border-right: none; background-color: #ffffff;"><i class="fas fa-palette"></i></label>
                                            <select class="form-select" id="select_color" style="border-left: none;">
                                                <option selected>Select Color</option>
                                                <option value="1">Red</option>
                                                <option value="2">Green</option>
                                                <option value="3">Blue</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>







                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-11 col-xxl-10 mx-auto">
                        <div class="d-inline-block me-5" style="font-weight: 600;"><span style="cursor: pointer;" id="rating_and_reviews"><i class="far fa-star fa-2x me-2"></i>Ratings & Reviews</span></div>
                        <div class="d-inline-block me-5" style="font-weight: 600;"><span style="cursor: pointer;" id="return_and_shipping_policy"><i class="far fa-file-alt fa-2x me-2"></i>Return & Shipping Policy</span></div>
                        <div class="d-inline-block" style="font-weight: 600;"><span style="cursor: pointer;" id="fabric_and_laundry"><i class="fas fa-soap fa-2x me-2"></i>Fabric & Laundry</span></div>
                    </div>
                </div>




            </div>
        </div>

    </div>

    <div class="mb-4"></div>

    <div id="rating_and_reviews_content" style="display: none;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-11 col-xxl-10 mx-auto">
                    <hr style="color: #e8e9ea; height: 5px;">
                    <div class="mt-5" style="font-size: 28px; font-weight: 600; text-align: center;">Rating & Reviews</div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 col-xxl-8 mx-auto">



                            <div class="row mt-5">
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col">
                                            <div style="font-size: 50px; color: #020101; font-weight: 600;">4.9</div>
                                            <div style="font-size: 18px; color: #b1b0b9;">out of 5</div>
                                        </div>
                                        <div class="col">
                                            <div class="text-end mb-2">
                                                <i class="fas fa-star me-2" style="color: #FA4A6F; font-size: 20px;"></i>
                                                <i class="fas fa-star me-2" style="color: #FA4A6F; font-size: 20px;"></i>
                                                <i class="fas fa-star me-2" style="color: #FA4A6F; font-size: 20px;"></i>
                                                <i class="fas fa-star me-2" style="color: #FA4A6F; font-size: 20px;"></i>
                                                <i class="fas fa-star" style="color: #FA4A6F; font-size: 20px;"></i>
                                            </div>
                                            <div class="text-end mb-2">
                                                <i class="fas fa-star me-2" style="color: #FA4A6F; font-size: 20px;"></i>
                                                <i class="fas fa-star me-2" style="color: #FA4A6F; font-size: 20px;"></i>
                                                <i class="fas fa-star me-2" style="color: #FA4A6F; font-size: 20px;"></i>
                                                <i class="fas fa-star" style="color: #FA4A6F; font-size: 20px;"></i>
                                            </div>
                                            <div class="text-end mb-2">
                                                <i class="fas fa-star me-2" style="color: #FA4A6F; font-size: 20px;"></i>
                                                <i class="fas fa-star me-2" style="color: #FA4A6F; font-size: 20px;"></i>
                                                <i class="fas fa-star" style="color: #FA4A6F; font-size: 20px;"></i>
                                            </div>
                                            <div class="text-end mb-2">
                                                <i class="fas fa-star me-2" style="color: #FA4A6F; font-size: 20px;"></i>
                                                <i class="fas fa-star" style="color: #FA4A6F; font-size: 20px;"></i>
                                            </div>
                                            <div class="text-end">
                                                <i class="fas fa-star" style="color: #FA4A6F; font-size: 20px;"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-6 ps-xxl-5">
                                    <div class="mb-3">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 80%; background-color: #FA4A6F; border-radius: 0 !important;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 20%; background-color: #FA4A6F; border-radius: 0 !important;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 0%; background-color: #FA4A6F; border-radius: 0 !important;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 0%; background-color: #FA4A6F; border-radius: 0 !important;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 0%; background-color: #FA4A6F; border-radius: 0 !important;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="row mt-5">
                                <div class="col-8">
                                    <div class="d-inline-block me-3"><img src="{{ asset('storage/images/product/rating_and_reviews/1.jpg') }}" style="width: 100px; height: 100px; border-radius: 50%;"></div>
                                    <div class="d-inline-block" style="font-size: 20px; font-weight: 600; color: #020101;">William Kate</div>
                                </div>
                                <div class="col-4 text-end">
                                    <table style="height: 100%;" align="right"><tr><td style="color: #b1b0b9;" class="align-middle">{{ date('m-d-Y') }}</td></tr></table>
                                </div>
                            </div>
                            <div class="mt-3">
                                <span style="color: #b1b0b9;">Lorem ipsum dolor sit amet, consectetur adipis elit, sed do eiusmod tempor inc.</span>
                            </div>

                            <div class="mt-3">
                                <i class="fas fa-star me-2" style="color: #FA4A6F; font-size: 20px;"></i>
                                <i class="fas fa-star me-2" style="color: #FA4A6F; font-size: 20px;"></i>
                                <i class="fas fa-star me-2" style="color: #FA4A6F; font-size: 20px;"></i>
                                <i class="far fa-star me-2" style="color: #FA4A6F; font-size: 20px;"></i>
                                <i class="far fa-star" style="color: #FA4A6F; font-size: 20px;"></i>
                            </div>


                            <div class="row mt-5">
                                <div class="col-8">
                                    <div class="d-inline-block me-3"><img src="{{ asset('storage/images/product/rating_and_reviews/2.jpg') }}" style="width: 100px; height: 100px; border-radius: 50%;"></div>
                                    <div class="d-inline-block" style="font-size: 20px; font-weight: 600; color: #020101;">Mira Miki</div>
                                </div>
                                <div class="col-4 text-end">
                                    <table style="height: 100%;" align="right"><tr><td style="color: #b1b0b9;" class="align-middle">{{ date('m-d-Y') }}</td></tr></table>
                                </div>
                            </div>
                            <div class="mt-3">
                                <span style="color: #b1b0b9;">Lorem ipsum dolor sit amet, consectetur adipis elit, sed do eiusmod tempor inc.</span>
                            </div>

                            <div class="mt-3">
                                <i class="fas fa-star me-2" style="color: #FA4A6F; font-size: 20px;"></i>
                                <i class="fas fa-star me-2" style="color: #FA4A6F; font-size: 20px;"></i>
                                <i class="fas fa-star me-2" style="color: #FA4A6F; font-size: 20px;"></i>
                                <i class="far fa-star me-2" style="color: #FA4A6F; font-size: 20px;"></i>
                                <i class="far fa-star" style="color: #FA4A6F; font-size: 20px;"></i>
                            </div>

                            <div class="row mt-5">
                                <div class="col-8">
                                    <div class="d-inline-block me-3"><img src="{{ asset('storage/images/product/rating_and_reviews/3.jpg') }}" style="width: 100px; height: 100px; border-radius: 50%;"></div>
                                    <div class="d-inline-block" style="font-size: 20px; font-weight: 600; color: #020101;">Ritz Maria</div>
                                </div>
                                <div class="col-4 text-end">
                                    <table style="height: 100%;" align="right"><tr><td style="color: #b1b0b9;" class="align-middle">{{ date('m-d-Y') }}</td></tr></table>
                                </div>
                            </div>
                            <div class="mt-3">
                                <span style="color: #b1b0b9;">Lorem ipsum dolor sit amet, consectetur adipis elit, sed do eiusmod tempor inc.</span>
                            </div>

                            <div class="mt-3">
                                <i class="fas fa-star me-2" style="color: #FA4A6F; font-size: 20px;"></i>
                                <i class="fas fa-star me-2" style="color: #FA4A6F; font-size: 20px;"></i>
                                <i class="fas fa-star me-2" style="color: #FA4A6F; font-size: 20px;"></i>
                                <i class="fas fa-star me-2" style="color: #FA4A6F; font-size: 20px;"></i>
                                <i class="fas fa-star" style="color: #FA4A6F; font-size: 20px;"></i>
                            </div>


                            <div class=" mt-5 mb-5 text-center">
                                <button type="button" style="height: 57px; width: 248px; border-radius: 5.65px; border: none; background: linear-gradient(270deg, #FA4A6F 0%, #FFA7E7 100%); color: #ffffff;">Show all reviews</button>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div id="fabric_and_laundry_content" style="display: none;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-11 col-xxl-10 mx-auto">
                    <hr style="color: #e8e9ea; height: 5px;">
                    <div class="mt-5" style="font-size: 28px; font-weight: 600; text-align: center;">Fabric & Laundry</div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 col-xxl-8 mx-auto">



                            <div class="row mt-5">
                                <div class="col-4">
                                    <div style="font-size: 18px; font-weight: 600; color: #020101;" class="mb-3">Lorem ipsum dolor sit amet</div>
                                    <div class="mb-3">Consectetur adipiscing elit. Integer ut purus viverra, bibendum quam in, pretium turpis. Sed porta ligula et tortor accumsan viverra. Nulla fermentum ipsum et lacus fermentum dapibus. Proin egestas, eros vitae porta euismod, nibh dolor aliquam erat, quis molestie odio felis et est. Maecenas egestas finibus orci,</div>
                                    <div>eget tincidunt ligula pulvinar ornare. In eleifend egestas dictum. Fusce iaculis, lorem quis tincidunt scelerisque, felis nisl tempus ex, vel hendrerit dui purus vel urna. Aenean aliquam dapibus facilisis. Integer efficitur id velit in iaculis.</div>

                                </div>
                                <div class="col-4">
                                    <div style="font-size: 18px; font-weight: 600; color: #020101;" class="mb-3">Maecenas non dui</div>
                                    <div class="mb-3">Nisl ultricies euismod. Donec risus diam, ullamcorper non eros at, pulvinar volutpat sem. Phasellus tempus vel nibh sed ultricies. Quisque ut nibh nunc. Nam nisl dolor, cursus sit amet tempus non, pharetra ac purus.</div>
                                    <div>Sed viverra volutpat sem vel mattis. Duis porta nisl non fermentum suscipit. Nulla blandit mauris id leo vestibulum, sit amet elementum metus posuere. Etiam elementum ex odio. Phasellus rhoncus commodo dolor facilisis dapibus. Fusce varius sapien ex, a pharetra nisl interdum in. Morbi eget sapien tristique, efficitur sem ac, suscipit velit.</div>
                                </div>

                                <div class="col-4">
                                    <img src="{{ asset('storage/images/product/fabric_and_laundry/1.jpg') }}" class="img-fluid" style="height: 420px;">
                                </div>

                            </div>







                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div id="return_and_shipping_policy_content" style="display: none;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-11 col-xxl-10 mx-auto">
                    <hr style="color: #e8e9ea; height: 5px;">
                    <div class="mt-5" style="font-size: 28px; font-weight: 600; text-align: center;">Return & Shipping Policy</div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 col-xxl-8 mx-auto">



                            <div class="row mt-5">
                                <div class="col-4">
                                    <div style="font-size: 18px; font-weight: 600; color: #020101;" class="mb-3">Lorem ipsum dolor sit amet</div>
                                    <div class="mb-3">Consectetur adipiscing elit. Integer ut purus viverra, bibendum quam in, pretium turpis. Sed porta ligula et tortor accumsan viverra. Nulla fermentum ipsum et lacus fermentum dapibus. Proin egestas, eros vitae porta euismod, nibh dolor aliquam erat, quis molestie odio felis et est. Maecenas egestas finibus orci,</div>
                                    <div>eget tincidunt ligula pulvinar ornare. In eleifend egestas dictum. Fusce iaculis, lorem quis tincidunt scelerisque, felis nisl tempus ex, vel hendrerit dui purus vel urna. Aenean aliquam dapibus facilisis. Integer efficitur id velit in iaculis.</div>

                                </div>
                                <div class="col-4">
                                    <div style="font-size: 18px; font-weight: 600; color: #020101;" class="mb-3">Maecenas non dui</div>
                                    <div class="mb-3">Nisl ultricies euismod. Donec risus diam, ullamcorper non eros at, pulvinar volutpat sem. Phasellus tempus vel nibh sed ultricies. Quisque ut nibh nunc. Nam nisl dolor, cursus sit amet tempus non, pharetra ac purus.</div>
                                    <div>Sed viverra volutpat sem vel mattis. Duis porta nisl non fermentum suscipit. Nulla blandit mauris id leo vestibulum, sit amet elementum metus posuere. Etiam elementum ex odio. Phasellus rhoncus commodo dolor facilisis dapibus. Fusce varius sapien ex, a pharetra nisl interdum in. Morbi eget sapien tristique, efficitur sem ac, suscipit velit.</div>
                                </div>

                                <div class="col-4">
                                    <img src="{{ asset('storage/images/product/return_and_shipping_policy/1.jpg') }}" class="img-fluid" style="height: 420px;">
                                </div>

                            </div>







                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <hr style="color: #e8e9ea; height: 10px;">


    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-11 col-xxl-10 mx-auto">
                <div style="font-size: 32px; font-weight: 600; text-align: center;" class="mb-5">Other Products</div>

                <div id="other_products_container">

                </div>

            </div>
        </div>
    </div>



    <div class="fixed-bottom" style="background-color: #ffffff; box-shadow: 4px 4px 11px 1px #cfcfcf;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-11 col-xxl-10 mx-auto py-3">
                    <div class="row">
                        <div class="col">
                            <div style="font-weight: 600; font-size: 20px; color: #020101;">Product Name</div>
                            <div>
                                <span class="me-3" style="font-weight: 600; font-size: 16px; color: #b1b0b9;">$79</span>
                                <span style="font-weight: 600; font-size: 24px; color: #ef5395;">${{ $product->purchase_price }}</span>
                            </div>
                        </div>
                        <div class="col text-center">
                            <button type="button" id="buy_now" data-product_id="{{ $product->id }}" style="height: 57px; width: 248px; border-radius: 5.65px; border: none; background: linear-gradient(270deg, #FA4A6F 0%, #FFA7E7 100%); color: #ffffff;">Buy</button>
                        </div>
                        <div class="col"></div>
                    </div>


                </div>
            </div>
        </div>


    </div>


    <script type="text/javascript">


        $(document).ready(function () {

            $.ajax({
                method: 'get',
                url: '{{ url('get/other/related/products') }}',
                data: {
                    subsubcategory_id: '{{ $product->subsubcategory_id }}'
                },
                success: function (result) {
                    console.log(result);
                    let i = 0;
                    $.each(result, function (key, product) {
                        if (key % 4 === 0) {
                            i++;
                            $('#other_products_container').append('<div class="row" style="margin-bottom: 70px;" id="other_products_row_' + i + '"></div>');
                        }

                        let productThumbnail = '{{ asset('') }}' + product.thumbnail_img;
                        let designerPhoto = '{{ asset('') }}' + product.user.shop.logo;
                        $('#other_products_row_' +  i).append(
                            '<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-3 col-xxl-3 px-xxl-4">' +
                            '<div style="cursor: pointer;" data-product_id="' + product.id + '" class="other_product">' +
                            '<div><img src="' + productThumbnail + '" class="img-fluid"></div>' +
                            '<div class="mt-3"><img src="' + designerPhoto + '" style="height: 50px; width: 50px; border-radius: 50%;"><span style="color: #020101; font-weight: 600; margin-left: 10px;">' + product.user.shop.name + '</span></div>' +
                            '<div class="mt-3" style="color: #020101; font-size: 18px; font-weight: 600;">' + product.name + '</div>' +
                            '<div class="mt-3" style="color: #b1b0b9; font-weight: 600;">$' + product.purchase_price + '</div>' +
                            '</div>' +
                            '</div>'
                        );
                    })
                },
                error: function (xhr) {
                    console.log(xhr)
                }
            })

        });

        $(document).on('click', '.other_product', function () {
            let productId = $(this).data('product_id');
            location = '{{ url('product') }}/' +  productId;
        });


        $(document).on('click', '.thumbnail_item', function () {
            let path = $(this).data('path');
            $('.img-thumbnail').removeClass('img-thumbnail');
            $(this).children('img').addClass('img-thumbnail');
            $('#thumbnail_preview').prop('src', path);
        });

        $(document).on('click', '#thumbnail_next', function () {
            let nextThumbnailPath = $('.img-thumbnail').parent().next('.thumbnail_item').data('path');
            if (nextThumbnailPath) {
                $('.img-thumbnail').removeClass('img-thumbnail').parent().next('.thumbnail_item').children('img').addClass('img-thumbnail');
                $('#thumbnail_preview').prop('src', nextThumbnailPath);
            }
        });

        $(document).on('click', '#thumbnail_prev', function () {
            let prevThumbnailPath = $('.img-thumbnail').parent().prev('.thumbnail_item').data('path');
            if (prevThumbnailPath) {
                $('.img-thumbnail').removeClass('img-thumbnail').parent().prev('.thumbnail_item').children('img').addClass('img-thumbnail');
                $('#thumbnail_preview').prop('src', prevThumbnailPath);
            }
        });


        $(document).on('click', '#rating_and_reviews', function () {
            if ($('#rating_and_reviews_content').css('display') === 'none') {

                $('#return_and_shipping_policy_content').hide('slow');
                $('#return_and_shipping_policy').css('color', '#020101');

                $('#fabric_and_laundry_content').hide('slow');
                $('#fabric_and_laundry').css('color', '#020101');

                $('#rating_and_reviews_content').show('slow');
                $('#rating_and_reviews').css('color', '#FA4A6F');
            } else {
                $('#rating_and_reviews_content').hide('slow');
                $('#rating_and_reviews').css('color', '#020101');
            }
        });

        $(document).on('click', '#return_and_shipping_policy', function () {
            if ($('#return_and_shipping_policy_content').css('display') === 'none') {

                $('#rating_and_reviews_content').hide('slow');
                $('#rating_and_reviews').css('color', '#020101');

                $('#fabric_and_laundry_content').hide('slow');
                $('#fabric_and_laundry').css('color', '#020101');

                $('#return_and_shipping_policy_content').show('slow');
                $('#return_and_shipping_policy').css('color', '#FA4A6F');

            } else {
                $('#return_and_shipping_policy_content').hide('slow');
                $('#return_and_shipping_policy').css('color', '#020101');
            }
        });

        $(document).on('click', '#fabric_and_laundry', function () {
            if ($('#fabric_and_laundry_content').css('display') === 'none') {

                $('#rating_and_reviews_content').hide('slow');
                $('#rating_and_reviews').css('color', '#020101');

                $('#return_and_shipping_policy_content').hide('slow');
                $('#return_and_shipping_policy').css('color', '#020101');

                $('#fabric_and_laundry_content').show('slow');
                $('#fabric_and_laundry').css('color', '#FA4A6F');

            } else {
                $('#fabric_and_laundry_content').hide('slow');
                $('#fabric_and_laundry').css('color', '#020101');
            }
        });
        
        
        $(document).on('click', '#buy_now', function () {
            let productId = $(this).data('product_id');
            console.log(productId)
            $.ajax({
                method: 'get',
                url: '{{ url('add/to/cart') }}',
                data: {
                    product_id: productId
                },
                success: function (result) {
                    console.log(result);
                    $('#cart_counter_label').text(result.data.length);
                    $.ajax({
                        method: 'get',
                        url: '{{ url('check/account/login/status') }}',
                        success: function (result) {
                            console.log(result);
                            if (result.account_login_status === true) {
                                location = '{{ url('checkout') }}';
                            } else {
                                $('#go_to_checkout_modal').modal('show');
                            }
                        },
                        error: function (xhr) {
                            console.log(xhr)
                        }
                    });
                },
                error: function (xhr) {
                    console.log(xhr);
                }
            });
        });


    </script>

@endsection