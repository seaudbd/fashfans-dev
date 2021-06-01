@extends('Layouts.frontend')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-11 mx-auto">
                <div style="font-size: 12px; margin-bottom: 15px;">
                    <a href="{{ url('/') }}" class="text-decoration-none text-dark">Home</a> > <span style="color: #b1b0b9;">Styles</span>
                </div>
                <div style="position: relative; height: 460px; width: 100%; background-color: #f6f6f8;">
                    <img src="{{ asset('storage/images/styles/1.png') }}" style="height: 460px; width: 100%;">
                    <img src="{{ asset('storage/images/application/logo_3.png') }}" style="position: absolute; top: 50%; left: 0; transform: translate(-50%, 0); -ms-transform: translate(-50%, 0); width: 75px; height: 75px; margin-top: -37.5px;">
                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); -ms-transform: translate(-50%, -50%); background-color: #ac9167; color: #ffffff; opacity: 0.6; text-align: center; font-weight: 600; padding: 10px 45px; border-radius: 10px;">
                        <div style="text-transform: uppercase; font-size: 25px;">Meet the Designer</div>
                        <div style="font-size: 16px;">Be inspired, Be connected, Be part of the creation process.</div>
                    </div>
                </div>
            </div>
        </div>



    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-11 pt-5 mx-auto">
                <div style="font-size: 16px; text-align: right;">Sort by <i class="fas fa-angle-down"></i></div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-11 py-5 mx-auto">



                <div class="row">
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
                                <div class="col" style="font-size: 14px; font-weight: 600; color: #020101;">Designer</div>
                                <div class="col" style="text-align: right; font-size: 14px; font-weight: 500; color: #b1b0b9;">Clear</div>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_bags">
                                <label class="form-check-label" for="form_check_bags">
                                    Giorgio Armani
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_beachwear">
                                <label class="form-check-label" for="form_check_beachwear">
                                    Prada
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_bodysuit">
                                <label class="form-check-label" for="form_check_bodysuit">
                                    Coco Chanel
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_cardigans">
                                <label class="form-check-label" for="form_check_cardigans">
                                    Mark Jacobs
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_coats">
                                <label class="form-check-label" for="form_check_coats">
                                    Versace
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form_check_dresses">
                                <label class="form-check-label" for="form_check_dresses">
                                    Prada
                                </label>
                            </div>
                        </div>




                        <div class="mb-4" style="height: 215px; width: 100%;">
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


                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-9 col-xxl-10 ps-5">

                        <div id="designers_container"></div>


                    </div>
                </div>



            </div>
        </div>
    </div>


    <script type="text/javascript">


        $(document).ready(function () {

            let skip = parseInt('{{ $skip }}');
            let limit = parseInt('{{ $limit }}');
            $.ajax({
                method: 'get',
                url: '{{ url('get/styles') }}',
                data: {
                    skip: skip,
                    limit: limit
                },


                success: function (result) {
                    console.log(result);
                    if (result.length > 0) {
                        let i = 0;
                        $.each(result, function (key, value) {
                            if (key % 2 === 0) {
                                i++;
                                $('#designers_container').append('<div class="row" id="designers_row_' + i + '" style="margin-bottom: 50px;"></div>');
                            }

                            let backgroundImage = '{{ asset('') }}' + value.image;
                            let logo = '{{ asset('storage/images/application/logo_7.png') }}';
                            let paddingClassValue = (key % 2 === 0) ? 'pe-xxl-5' : 'ps-xxl-5';

                            $('#designers_row_' +  i).append(
                                '<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 ' + paddingClassValue + '" style="position: relative;">' +
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


    </script>




@endsection