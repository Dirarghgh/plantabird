@extends('layouts.app')
@section('hero')
<div class="sub-banner-section-outer contact-banner-section-outer">
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-12 col-sm-12 col-12 d-lg-block d-none"></div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12 text-center">
                    <div class="banner-section-content" @if(app()->getLocale() === 'ar') dir="rtl" @endif>
                        <h1 data-aos="fade-up">@lang('messages.pdv')</h1>
                        <p data-aos="fade-right">@lang('messages.pdv2')</p>
                        <div class="btn_wrapper" data-aos="fade-up">
                            <span>Platntabird </span><span class="slash">/</span><span class="sub_span"> @lang('messages.pdv')</span>
                        </div>
                        <figure class="sub_banner_content_top_shape mb-0 position-absolute left_right_shape">
                            <img src="./assets/images/sub_banner_content_top_shape.png" alt="" class="img-fluid">
                        </figure>
                        <figure class="sub_banner_pink_foot_shape mb-0 position-absolute top_bottom_shape">
                            <img src="./assets/images/birds/14.png" alt="" class="img-fluid">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-2 col-md-12 col-sm-12 col-12 d-lg-block d-none"></div>
            </div>
            <figure class="sub_banner_left_shape mb-0 position-absolute top_bottom_shape">
                <img src="./assets/images/birds/bird300/2.png" alt="" class="img-fluid">
            </figure>
            <figure class="sub_banner_right_shape mb-0 position-absolute top_bottom_shape">
                <img src="./assets/images/sub_banner_right_shape.png" alt="" class="img-fluid">
            </figure>
        </div>
    </section>
</div>
@endsection
@section('content')
<div  class="accordian-section">
    <div class="container mb-4">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="faq_content {{ app()->getLocale() === 'ar' ? 'rtl-text-align' : '' }}" data-aos="fade-right" >
                    <h2 class="pdv_name_green">Pet Shop </h2>
                    <h4 @if(app()->getLocale() === 'ar') dir="rtl" @endif>@lang('messages.pdv_adress1')</h4>
                    <p class="text-size-18" @if(app()->getLocale() === 'ar') dir="rtl" @endif>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

                    <div class="team_social_icons">
                        <a href="https://www.facebook.com/profile.php?id=61555825628635" class="text-decoration-none">
                            <i class="fa-brands fa-facebook-f hover-effect" aria-hidden="true"></i>
                        </a>

                        <a href="https://www.facebook.com/profile.php?id=61555825628635" class="text-decoration-none">
                            <i class="fa-brands fa-instagram hover-effect " aria-hidden="true"></i>
                        </a>
                        <a href="https://www.google.com/maps/dir/?api=1&destination=36.645392666286%2C2.9955031700211" class="text-decoration-none">
                            <i class="fa-solid fa-map hover-effect mr-0" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="pdv-image ">
                    <figure><img src="./assets/images/point_de_vente.jpg" alt="" class="img-fluid"></figure>
                </div>
            </div>
        </div>
        <figure class="mb-0 faq_left_shape position-absolute top_bottom_shape">
            <img src="./assets/images/faq_left_shape.png" alt="" class="img-fluid">
        </figure>
        <figure class="mb-0 faq_right_shape position-absolute top_bottom_shape">
            <img src="./assets/images/birds/bird200/3.png" alt="" class="img-fluid">
        </figure>
    </div>
    <div class="container mb-4">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="pdv-image ">
                    <figure><img src="./assets/images/point_de_vente.jpg" alt="" class="img-fluid"></figure>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="faq_content ml-lg-2" data-aos="fade-right">
                    <h2 class="pdv_name_green">Pet Shop </h2>
                    <h4 @if(app()->getLocale() === 'ar') dir="rtl" @endif>@lang('messages.pdv_adress2')</h4>
                    <p class="text-size-18" @if(app()->getLocale() === 'ar') dir="rtl" @endif>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

                    <div class="team_social_icons">
                        <a href="https://www.facebook.com/profile.php?id=61555825628635" class="text-decoration-none">
                            <i class="fa-brands fa-facebook-f hover-effect" aria-hidden="true"></i>
                        </a>

                        <a href="https://www.facebook.com/profile.php?id=61555825628635" class="text-decoration-none">
                            <i class="fa-brands fa-instagram hover-effect" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.google.com/maps/dir/?api=1&destination=36.645392666286%2C2.9955031700211" class="text-decoration-none">
                            <i class="fa-solid fa-map hover-effect mr-0" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <figure class="mb-0 faq_left_shape position-absolute top_bottom_shape">
            <img src="./assets/images/faq_left_shape.png" alt="" class="img-fluid">
        </figure>
        <figure class="mb-0 faq_right_shape position-absolute top_bottom_shape">
            <img src="./assets/images/birds/bird200/3.png" alt="" class="img-fluid">
        </figure>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="faq_content {{ app()->getLocale() === 'ar' ? 'rtl-text-align' : '' }}" data-aos="fade-right">
                    <h2 class="pdv_name_green">Pet Shop </h2>
                    <h4 @if(app()->getLocale() === 'ar') dir="rtl" @endif>@lang('messages.pdv_adress3')</h4>
                    <p class="text-size-18" @if(app()->getLocale() === 'ar') dir="rtl" @endif>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

                    <div class="team_social_icons">
                        <a href="https://www.facebook.com/profile.php?id=61555825628635" class="text-decoration-none">
                            <i class="fa-brands fa-facebook-f hover-effect" aria-hidden="true"></i>
                        </a>

                        <a href="https://www.facebook.com/profile.php?id=61555825628635" class="text-decoration-none">
                            <i class="fa-brands fa-instagram hover-effect" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.google.com/maps/dir/?api=1&destination=36.645392666286%2C2.9955031700211" class="text-decoration-none">
                            <i class="fa-solid fa-map hover-effect mr-0" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="pdv-image ">
                    <figure><img src="./assets/images/point_de_vente.jpg" alt="" class="img-fluid"></figure>
                </div>
            </div>
        </div>
        <figure class="mb-0 faq_left_shape position-absolute top_bottom_shape">
            <img src="./assets/images/faq_left_shape.png" alt="" class="img-fluid">
        </figure>
        <figure class="mb-0 faq_right_shape position-absolute top_bottom_shape">
            <img src="./assets/images/birds/bird200/3.png" alt="" class="img-fluid">
        </figure>
    </div>
</div>

@endsection