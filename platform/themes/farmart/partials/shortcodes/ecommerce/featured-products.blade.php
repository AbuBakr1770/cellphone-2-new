{{--<h1>Lorem ipsum dolor sit amet.</h1>--}}
<div class="widget-products-with-category py-5 bg-light">
    <div class="container-xxxl">
        <div class="row">

                <div class="row align-items-center mb-2 widget-header">
                    <h2 class="col-auto mb-0 py-2">{!! BaseHelper::clean($shortcode->title) !!}</h2>
                </div>

            <div class="col-md-6">
                        <featured-products-component
                            url="{{ route('public.ajax.featured-products-new') }}"
                            {{--                    url="{{ route('public.ajax.featured-products') }}"--}}
                            limit="{{ $shortcode->limit }}" slick_config="{{ json_encode([
                    'rtl' => BaseHelper::siteLanguageDirection() == 'rtl',
                    'appendArrows' => '.arrows-wrapper',
                    'arrows' => true,
                    'dots' => false,
                    'autoplay' => $shortcode->is_autoplay == 'yes',
                    'infinite' => $shortcode->infinite == 'yes' || $shortcode->is_infinite == 'yes',
                    'autoplaySpeed' => in_array($shortcode->autoplay_speed, theme_get_autoplay_speed_options()) ? $shortcode->autoplay_speed : 3000,
                    'speed' => 800,
                    'slidesToShow' => 1,
                    'slidesToScroll' => 1,
                    'swipeToSlide' => true,
                    'responsive' => [
                        [
                            'breakpoint' => 1400,
                            'settings' => [
                                'slidesToShow' => 1,
                            ],
                        ],
                    [
                        'breakpoint' => 1199,
                        'settings' => [
                            'slidesToShow' => 1,
                        ],
                    ],
                    [
                        'breakpoint' => 1024,
                        'settings' => [
                            'slidesToShow' => 1,
                        ],
                    ],
                    [
                        'breakpoint' => 767,
                        'settings' => [
                            'arrows' => true,
                            'dots' => false,
                            'slidesToShow' => 1,
                            'slidesToScroll' => 1,
                        ],
                    ],
                ],
            ]) }}">

                        </featured-products-component>

                    </div>

            <div class="col-md-6 ">
                <div class="row">
                    <div class="col-lg-12 col-md-12" style="width: 100%;">
                        <div class="">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card" style="border-radius: 17px;height: 13rem">
                                        <div class="card-horizontal" style="display: flex;flex: 1 1 auto;">
                                            <div class="img-square-wrapper" style="width: 45%">
                                                <img class="h-100"  src="http://via.placeholder.com/300x180" alt="Card image cap">
                                            </div>
                                            <div class="card-body p-0 d-flex justify-content-center align-items-center">
                                                <div class="">
                                                    <div class="bg-warning text-dark">
                                                        <p class="text-center"
                                                           style="font-weight: bolder;padding: 3px;

                                                           ">Limited Offer</p></div>
                                                    <h4 class="card-title">Product Title</h4>
                                                    <h5 class="card-text">DHS. 799</h5>

                                                    <div class="d-flex justify-content-between" style="padding-top: 15px;padding-right: 11px">
                                                        <div class="">
                                                            <div class="text-center">
                                                                <h6>24</h6>
                                                            </div>

                                                            <p>Days</p>
                                                        </div>

                                                        <div class="">
                                                            <div class="text-center">
                                                                <h6>24</h6>
                                                            </div>
                                                            <p>Hrs</p>
                                                        </div>

                                                        <div class="">
                                                            <div class="text-center">
                                                                <h6>24</h6>
                                                            </div>
                                                            <p>Min</p>
                                                        </div>




                                                    </div>
                                                </div>


                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-12 col-md-12 mt-4" style="width: 100%;">
                        <div class="card" style="border-radius: 17px;height: 13rem">
                            <div class="card-horizontal" style="display: flex;flex: 1 1 auto;">
                                <div class="img-square-wrapper" style="width: 45%">
                                    <img class="h-100"  src="http://via.placeholder.com/300x180" alt="Card image cap">
                                </div>
                                <div class="card-body p-0 d-flex justify-content-center align-items-center">
                                    <div class="">
                                        <div class="bg-warning text-dark">
                                            <p class="text-center"
                                               style="font-weight: bolder;padding: 3px;

                                                           ">Limited Offer</p></div>
                                        <h4 class="card-title">Product Title</h4>
                                        <h5 class="card-text">DHS. 799</h5>

                                        <div class="d-flex justify-content-between" style="padding-top: 15px;padding-right: 11px">
                                            <div class="">
                                                <div class="text-center">
                                                    <h6>24</h6>
                                                </div>

                                                <p>Days</p>
                                            </div>

                                            <div class="">
                                                <div class="text-center">
                                                    <h6>24</h6>
                                                </div>
                                                <p>Hrs</p>
                                            </div>

                                            <div class="">
                                                <div class="text-center">
                                                    <h6>24</h6>
                                                </div>
                                                <p>Min</p>
                                            </div>




                                        </div>
                                    </div>


                                </div>

                            </div>


                        </div>

                    </div>
                </div>
            </div>




        </div>
    </div>
</div>
