@extends('layouts.app')
@section('hero')
<div class="sub-banner-section-outer contact-banner-section-outer">
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-12 col-sm-12 col-12 d-lg-block d-none"></div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12 text-center">
                    <div class="banner-section-content">
                        <h1 data-aos="fade-up">@lang('messages.nos_produits')</h1>
                        <p data-aos="fade-right">@lang('messages.nos_produits1') </p>
                        <div class="btn_wrapper" data-aos="fade-up">
                            <span>Plantabird </span><span class="slash">/</span><span class="sub_span"> @lang('messages.produits')</span>
                        </div>
                        <!-- <div class="d-flex mt-2">
                            <div class="btn_wrapper" data-aos="fade-up">
                                <span>Plantabird </span><span class="slash">/</span><span class="sub_span"> Produits</span>
                            </div>
                            <div class="btn_wrapper mt-2" data-aos="fade-up">
                                <span>Plantabird </span><span class="slash">/</span><span class="sub_span"> Produits</span>
                            </div>
                            <div class="btn_wrapper mt-2" data-aos="fade-up">
                                <span>Plantabird </span><span class="slash">/</span><span class="sub_span"> Produits</span>
                            </div>
                            <div class="btn_wrapper mt-2" data-aos="fade-up">
                                <span>Plantabird </span><span class="slash">/</span><span class="sub_span"> Produits</span>
                            </div>
                            <div class="btn_wrapper mt-2" data-aos="fade-up">
                                <span>Plantabird </span><span class="slash">/</span><span class="sub_span"> Produits</span>
                            </div>
                            <div class="btn_wrapper mt-2" data-aos="fade-up">
                                <span>Plantabird </span><span class="slash">/</span><span class="sub_span"> Produits</span>
                            </div>
                        </div> -->
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

<section class="{{ app()->getLocale() === 'ar' ? 'rtl-text-align' : '' }}">
    <section  id="CLOSTRI" class="register_now_section position-relative" style="background-color: #ba4140;">
        <div class="container">
            <div class="row position-relative">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-3">
                    <div class="register_images">
                        <figure class="register_packet_image mb-4">
                            <img src="./assets/images/products/CLOSTRI.png" alt="" class="img-fluid">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="register_content" data-aos="fade-right" @if(app()->getLocale() === 'ar') dir="rtl" @endif>
                        <h2 class="">CLOSTRI - 30ml</h2>
                        <h3>@lang('messages.compement_digestif')</h3>
                        <p>@lang('messages.ceproduit1')</p>
                        <div class="accordian-product" >
                            <div class="accordian-inner" data-aos="fade-up">
                                <div id="accordion1">
                                    <div class="accordion-card">
                                        <div class="card-header" id="headingP1-1">
                                            <i class="fa-solid fa-atom" style="color: #ba4140;"></i>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseP1-1" aria-expanded="false" aria-controls="collapseP1-1">
                                            @lang('messages.composition') 
                                            </button>
                                        </div>
                                        <div id="collapseP1-1" class="collapse" aria-labelledby="headingP1-1">
                                        <div class="card-body pb-2 my-0">
                                            <p class="text-size-16 text-left mb-0 p-0">
                                                <ul class="py-0 my-0 px-0">
                                                    <li >
                                                        <p class="mb-0 pt-0"> @lang('messages.extraits') 16%</p>
                                                        <ul class="mt-0 pl-3 py-1">
                                                            <li>@lang('messages.Eucalyptus_globules')</li>
                                                            <li>@lang('messages.Origanum_vulgare') </li>
                                                            <li>@lang('messages.Anavetum_vulgare') </li>
                                                        </ul>
                                                    </li>
                                                    <li><p class="py-0 my-0">@lang('messages.eau') 79%</p></li>
                                                    <li><p class="py-0 my-0">@lang('messages.alcool') 5%</p></li>
                                                </ul>
                                            </p>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card">
                                        <div class="card-header" id="headingP1-2">
                                            <i class="fa-solid fa-pills" style="color: #ba4140;"></i>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsP1-2" aria-expanded="false" aria-controls="collapsgP2">
                                            @lang('messages.espece')
                                            </button>
                                        </div>
                                        <div id="collapsP1-2" class="collapse" aria-labelledby="headingP1-2">
                                        <div class="card-body">
                                            <p class="text-size-16 text-left mb-0 p-0">
                                                <ul class="py-0 my-0 px-0">
                                                    <li><p class="mb-0 pt-0"> @lang('messages.indication_p11')</p></li>
                                                    <li><p class="py-0 my-0">@lang('messages.indication_p12')</p></li>
                                                </ul>
                                            </p>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card">
                                        <div class="card-header" id="headingP1-3">
                                        <i class="fa-regular fa-rectangle-list" style="color: #ba4140;"></i>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseP1-3" aria-expanded="false" aria-controls="collapseP1-3">
                                                @lang('messages.mode')
                                            </button>
                                        </div>
                                        <div id="collapseP1-3" class="collapse" aria-labelledby="headingP1-3">
                                        <div class="card-body">
                                            <p class="text-size-16 text-left mb-0 p-0"> @lang('messages.mode1')<br> @lang('messages.mode2')</p>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <figure class="mb-0 register_big_foot_shape position-absolute left_right_shape">
                    <img src="./assets/images/birds/9.png" alt="" class="img-fluid">
                </figure>
                <figure class="mb-0 register_small_foot_shape position-absolute left_right_shape">
                    <img src="./assets/images/birds/12.png" alt="" class="img-fluid">
                </figure>
            </div>

            <figure class="mb-0 register_right_shape position-absolute top_bottom_shape">
                <img src="./assets/images/birds/bird200/1.png" alt="" class="img-fluid">
            </figure>
            
        </div>
    </section>
    <section  id="COLIBA" class="register_now_section position-relative" style="background-color: #a2a2a2;">
        <div class="container">
            <div class="row position-relative">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-3">
                    <div class="register_images">
                        <figure class="register_packet_image mb-4">
                            <img src="./assets/images/products/COLIBA.png" alt="" class="img-fluid">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="register_content" data-aos="fade-right" @if(app()->getLocale() === 'ar') dir="rtl" @endif>
                        <h2 class="">COLIBA - 30ml</h2>
                        <h3>@lang('messages.compement_digestif')</h3>
                        <p>@lang('messages.ceproduit2')</p>
                        <div class="accordian-product" >
                            <div class="accordian-inner" data-aos="fade-up">
                                <div id="accordion2">
                                    <div class="accordion-card">
                                        <div class="card-header" id="headingP2-1">
                                            <i class="fa-solid fa-atom" style="color: #a2a2a2;"></i>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseP2-1" aria-expanded="false" aria-controls="collapseP2-1">
                                                @lang('messages.composition') 
                                            </button>
                                        </div>
                                        <div id="collapseP2-1" class="collapse" aria-labelledby="headingP2-1">
                                            <div class="card-body pb-2 my-0">
                                                <p class="text-size-16 text-left mb-0 p-0">
                                                    <ul class="py-0 my-0 px-0">
                                                        <li >
                                                            <p class="mb-0 pt-0">@lang('messages.extraits') 12%</p>
                                                            <ul class="mt-0 pl-3 py-1">
                                                                <li>@lang('messages.Osmarinus_officinalis') </li>
                                                                <li>@lang('messages.Olea_Europea') </li>
                                                                <li>@lang('messages.Citrus_paradisi') </li>
                                                            </ul>
                                                        </li>
                                                        <li><p class="py-0 my-0">@lang('messages.eau') 76%</p></li>
                                                        <li><p class="py-0 my-0">@lang('messages.alcool') 12%</p></li>
                                                    </ul>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card">
                                        <div class="card-header" id="headingP2-2">
                                            <i class="fa-solid fa-pills" style="color: #a2a2a2;"></i>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseP2-2" aria-expanded="false" aria-controls="collapseP2-2">
                                                @lang('messages.espece')
                                            </button>
                                        </div>
                                        <div id="collapseP2-2" class="collapse" aria-labelledby="headingP2-2">
                                        <div class="card-body">
                                            <p class="text-size-16 text-left mb-0 p-0">
                                                <ul class="py-0 my-0 px-0">
                                                    <li><p class="mb-0 pt-0"> @lang('messages.indication_p21')</p></li>
                                                    <li><p class="py-0 my-0">@lang('messages.indication_p22')</p></li>
                                                    <li><p class="py-0 my-0">@lang('messages.indication_p22')</p></li>
                                                </ul>
                                            </p>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card">
                                        <div class="card-header" id="headingP2-3">
                                        <i class="fa-regular fa-rectangle-list" style="color: #a2a2a2;"></i>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseP2-3" aria-expanded="false" aria-controls="collapseP2-3">
                                                @lang('messages.mode')
                                            </button>
                                        </div>
                                        <div id="collapseP2-3" class="collapse" aria-labelledby="headingP2-3">
                                        <div class="card-body">
                                            <p class="text-size-16 text-left mb-0 p-0"> @lang('messages.mode1')<br> @lang('messages.mode2')</p>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <figure class="mb-0 register_big_foot_shape position-absolute left_right_shape">
                    <img src="./assets/images/birds/9.png" alt="" class="img-fluid">
                </figure>
                <figure class="mb-0 register_small_foot_shape position-absolute left_right_shape">
                    <img src="./assets/images/birds/12.png" alt="" class="img-fluid">
                </figure>
            </div>

            <figure class="mb-0 register_right_shape position-absolute top_bottom_shape">
                <img src="./assets/images/birds/bird200/2.png" alt="" class="img-fluid">
            </figure>
            
        </div>
    </section>
    <section  id="COXI" class="register_now_section position-relative" style="background-color: #836a54;">
        <div class="container">
            <div class="row position-relative">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-3">
                    <div class="register_images">
                        <figure class="register_packet_image mb-4">
                            <img src="./assets/images/products/COXI.png" alt="" class="img-fluid">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="register_content" data-aos="fade-right" @if(app()->getLocale() === 'ar') dir="rtl" @endif>
                        <h2 class="">COXI - 30ml</h2>
                        <h3>@lang('messages.compement_digestif')</h3>
                        <p>@lang('messages.ceproduit3')</p>
                        <div class="accordian-product" >
                            <div class="accordian-inner" data-aos="fade-up">
                                <div id="accordion2">
                                    <div class="accordion-card">
                                        <div class="card-header" id="headingP3-1">
                                            <i class="fa-solid fa-atom" style="color: #836a54;"></i>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseP3-1" aria-expanded="false" aria-controls="collapseP3-1">
                                                @lang('messages.composition') 
                                            </button>
                                        </div>
                                        <div id="collapseP3-1" class="collapse" aria-labelledby="headingP3-1">
                                            <div class="card-body pb-2 my-0">
                                                <p class="text-size-16 text-left mb-0 p-0">
                                                    <ul class="py-0 my-0 px-0">
                                                        <li >
                                                            <p class="mb-0 pt-0">@lang('messages.extraits') 12%</p>
                                                            <ul class="mt-0 pl-3 py-1">
                                                                <li>@lang('messages.Lythrum_salicaria')</li>
                                                                <li>@lang('messages.Arctostaphylos_uva')</li>
                                                                <li>@lang('messages.Raphanus_sattivus')</li>
                                                            </ul>
                                                        </li>
                                                        <li><p class="py-0 my-0">@lang('messages.eau') 79%</p></li>
                                                        <li><p class="py-0 my-0">@lang('messages.alcool') 13%</p></li>
                                                    </ul>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card">
                                        <div class="card-header" id="headingP3-2">
                                            <i class="fa-solid fa-pills" style="color: #836a54;"></i>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseP3-2" aria-expanded="false" aria-controls="collapseP3-2">
                                                @lang('messages.espece')
                                            </button>
                                        </div>
                                        <div id="collapseP3-2" class="collapse" aria-labelledby="headingP3-2">
                                        <div class="card-body">
                                            <p class="text-size-16 text-left mb-0 p-0">
                                                <ul class="py-0 my-0 px-0">
                                                    <li><p class="mb-0 pt-0"> @lang('messages.indication_p31')</p></li>
                                                    <li><p class="py-0 my-0">@lang('messages.indication_p32')</p></li>
                                                </ul>
                                            </p>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card">
                                        <div class="card-header" id="headingP3-3">
                                        <i class="fa-regular fa-rectangle-list" style="color: #836a54;"></i>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseP3-3" aria-expanded="false" aria-controls="collapseP3-3">
                                                @lang('messages.mode')
                                            </button>
                                        </div>
                                        <div id="collapseP3-3" class="collapse" aria-labelledby="headingP3-3">
                                        <div class="card-body">
                                            <p class="text-size-16 text-left mb-0 p-0"> @lang('messages.mode1')<br> @lang('messages.mode2')</p>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <figure class="mb-0 register_big_foot_shape position-absolute left_right_shape">
                    <img src="./assets/images/birds/9.png" alt="" class="img-fluid">
                </figure>
                <figure class="mb-0 register_small_foot_shape position-absolute left_right_shape">
                    <img src="./assets/images/birds/12.png" alt="" class="img-fluid">
                </figure>
            </div>

            <figure class="mb-0 register_right_shape position-absolute top_bottom_shape">
                <img src="./assets/images/birds/bird200/3.png" alt="" class="img-fluid">
            </figure>
            
        </div>
    </section>
    <section  id="HEPA" class="register_now_section position-relative" style="background-color: #466535;">
        <div class="container">
            <div class="row position-relative">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-3">
                    <div class="register_images">
                        <figure class="register_packet_image mb-4">
                            <img src="./assets/images/products/HEPA.png" alt="" class="img-fluid">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="register_content" data-aos="fade-right" @if(app()->getLocale() === 'ar') dir="rtl" @endif>
                        <h2 class="">HEPA - 30ml</h2>
                        <h3>@lang('messages.compement_hepatique')</h3>
                        <p>@lang('messages.ceproduit4')</p>
                        <div class="accordian-product" >
                            <div class="accordian-inner" data-aos="fade-up">
                                <div id="accordion2">
                                    <div class="accordion-card">
                                        <div class="card-header" id="headingP4-1">
                                            <i class="fa-solid fa-atom" style="color: #466535;"></i>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseP4-1" aria-expanded="false" aria-controls="collapseP4-1">
                                                @lang('messages.composition') 
                                            </button>
                                        </div>
                                        <div id="collapseP4-1" class="collapse" aria-labelledby="headingP4-1">
                                            <div class="card-body pb-2 my-0">
                                                <p class="text-size-16 text-left mb-0 p-0">
                                                    <ul class="py-0 my-0 px-0">
                                                        <li >
                                                            <p class="mb-0 pt-0">@lang('messages.extraits') 4%</p>
                                                            <ul class="mt-0 pl-3 py-1">
                                                                <li>@lang('messages.Fumaria_Officinalis') </li>
                                                                <li>@lang('messages.Taraxacum_officinale')</li>
                                                                <li>@lang('messages.Raphanus_sattivus')</li>
                                                            </ul>
                                                        </li>
                                                        <li><p class="py-0 my-0">@lang('messages.eau') 83%</p></li>
                                                        <li><p class="py-0 my-0">@lang('messages.alcool') 13%</p></li>
                                                    </ul>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card">
                                        <div class="card-header" id="headingP4-2">
                                            <i class="fa-solid fa-pills" style="color: #466535;"></i>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseP4-2" aria-expanded="false" aria-controls="collapseP4-2">
                                                @lang('messages.espece')
                                            </button>
                                        </div>
                                        <div id="collapseP4-2" class="collapse" aria-labelledby="headingP4-2">
                                        <div class="card-body">
                                            <p class="text-size-16 text-left mb-0 p-0">
                                                <ul class="py-0 my-0 px-0">
                                                    <li><p class="mb-0 pt-0"> @lang('messages.indication_p41')</p></li>
                                                    <li><p class="py-0 my-0">@lang('messages.indication_p42')</p></li>
                                                    <li><p class="py-0 my-0">@lang('messages.indication_p43')</p></li>
                                                    <li><p class="py-0 my-0">@lang('messages.indication_p44')</p></li>
                                                </ul>
                                            </p>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card">
                                        <div class="card-header" id="headingP4-3">
                                        <i class="fa-regular fa-rectangle-list" style="color: #466535;"></i>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseP4-3" aria-expanded="false" aria-controls="collapseP4-3">
                                                @lang('messages.mode')
                                            </button>
                                        </div>
                                        <div id="collapseP4-3" class="collapse" aria-labelledby="headingP4-3">
                                        <div class="card-body">
                                            <p class="text-size-16 text-left mb-0 p-0"> @lang('messages.mode1')<br> @lang('messages.mode2')</p>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <figure class="mb-0 register_big_foot_shape position-absolute left_right_shape">
                    <img src="./assets/images/birds/9.png" alt="" class="img-fluid">
                </figure>
                <figure class="mb-0 register_small_foot_shape position-absolute left_right_shape">
                    <img src="./assets/images/birds/12.png" alt="" class="img-fluid">
                </figure>
            </div>

            <figure class="mb-0 register_right_shape position-absolute top_bottom_shape">
                <img src="./assets/images/birds/bird200/4.png" alt="" class="img-fluid">
            </figure>
            
        </div>
    </section>
    <section  id="TRICHOM" class="register_now_section position-relative" style="background-color: #583d44;">
        <div class="container">
            <div class="row position-relative">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-3">
                    <div class="register_images">
                        <figure class="register_packet_image mb-4">
                            <img src="./assets/images/products/TRICHOM.png" alt="" class="img-fluid">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="register_content" data-aos="fade-right" @if(app()->getLocale() === 'ar') dir="rtl" @endif>
                        <h2 class="">TRICHOM - 30ml</h2>
                        <h3>@lang('messages.compement_digestif')</h3>
                        <p>@lang('messages.ceproduit5')</p>
                        <p>@lang('messages.ceproduit51')</p>
                        <div class="accordian-product" >
                            <div class="accordian-inner" data-aos="fade-up">
                                <div id="accordion2">
                                    <div class="accordion-card">
                                        <div class="card-header" id="headingP5-1">
                                            <i class="fa-solid fa-atom" style="color: #583d44;"></i>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseP5-1" aria-expanded="false" aria-controls="collapseP5-1">
                                                @lang('messages.composition') 
                                            </button>
                                        </div>
                                        <div id="collapseP5-1" class="collapse" aria-labelledby="headingP5-1">
                                            <div class="card-body pb-2 my-0">
                                                <p class="text-size-16 text-left mb-0 p-0">
                                                    <ul class="py-0 my-0 px-0">
                                                        <li >
                                                            <p class="mb-0 pt-0">@lang('messages.extraits') 15.3%</p>
                                                            <ul class="mt-0 pl-3 py-1">
                                                                <li>@lang('messages.Elettaria_cardamomum')</li>
                                                                <li>@lang('messages.Origanum_hercleoticum')</li>
                                                                <li>@lang('messages.Punica_granatum')</li>
                                                            </ul>
                                                        </li>
                                                        <li><p class="py-0 my-0">@lang('messages.eau') 73.3%</p></li>
                                                        <li><p class="py-0 my-0">@lang('messages.alcool') 11%</p></li>
                                                    </ul>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card">
                                        <div class="card-header" id="headingP5-2">
                                            <i class="fa-solid fa-pills" style="color: #583d44;"></i>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseP5-2" aria-expanded="false" aria-controls="collapseP5-2">
                                                @lang('messages.espece')
                                            </button>
                                        </div>
                                        <div id="collapseP5-2" class="collapse" aria-labelledby="headingP5-2">
                                        <div class="card-body">
                                            <p class="text-size-16 text-left mb-0 p-0">
                                                <ul class="py-0 my-0 px-0">
                                                    <li><p class="mb-0 pt-0">@lang('messages.indication_p51')</p></li>
                                                    <li><p class="py-0 my-0">@lang('messages.indication_p52')</p></li>
                                                    <li><p class="py-0 my-0">@lang('messages.indication_p53')</p></li>
                                                </ul>
                                            </p>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card">
                                        <div class="card-header" id="headingP5-3">
                                        <i class="fa-regular fa-rectangle-list" style="color: #583d44;"></i>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseP5-3" aria-expanded="false" aria-controls="collapseP5-3">
                                                 @lang('messages.mode')
                                            </button>
                                        </div>
                                        <div id="collapseP5-3" class="collapse" aria-labelledby="headingP5-3">
                                        <div class="card-body">
                                            <p class="text-size-16 text-left mb-0 p-0"> @lang('messages.mode1')<br> @lang('messages.mode2')</p>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <figure class="mb-0 register_big_foot_shape position-absolute left_right_shape">
                    <img src="./assets/images/birds/9.png" alt="" class="img-fluid">
                </figure>
                <figure class="mb-0 register_small_foot_shape position-absolute left_right_shape">
                    <img src="./assets/images/birds/12.png" alt="" class="img-fluid">
                </figure>
            </div>

            <figure class="mb-0 register_right_shape position-absolute top_bottom_shape">
                <img src="./assets/images/birds/bird200/1.png" alt="" class="img-fluid">
            </figure>
            
        </div>
    </section>
    <section  id="PULMO" class="register_now_section position-relative" style="background-color: #3d89bf;">
        <div class="container">
            <div class="row position-relative">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-3">
                    <div class="register_images">
                        <figure class="register_packet_image mb-4">
                            <img src="./assets/images/products/PULMO.png" alt="" class="img-fluid">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="register_content" data-aos="fade-right" @if(app()->getLocale() === 'ar') dir="rtl" @endif>
                        <h2 class="">PULMO - 30ml</h2>
                        <h3>@lang('messages.compement_pulmonaire')</h3>
                        <p>@lang('messages.ceproduit6')</p>
                        <div class="accordian-product" >
                            <div class="accordian-inner" data-aos="fade-up">
                                <div id="accordion2">
                                    <div class="accordion-card">
                                        <div class="card-header" id="headingP6-1">
                                            <i class="fa-solid fa-atom" style="color: #3d89bf;"></i>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseP6-1" aria-expanded="false" aria-controls="collapseP6-1">
                                                @lang('messages.composition') 
                                            </button>
                                        </div>
                                        <div id="collapseP6-1" class="collapse" aria-labelledby="headingP6-1">
                                            <div class="card-body pb-2 my-0">
                                                <p class="text-size-16 text-left mb-0 p-0">
                                                    <ul class="py-0 my-0 px-0">
                                                        <li >
                                                            <p class="mb-0 pt-0">@lang('messages.Chlorure_magnesium')</p>
                                                        </li>
                                                        <li><p class="py-0 my-0">@lang('messages.eauu')</p></li>
                                                        <li>
                                                            <p class="py-0 my-0">@lang('messages.Constituants_analytiques')
                                                            </p>
                                                        </li>
                                                    </ul>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card">
                                        <div class="card-header" id="headingP6-2">
                                            <i class="fa-solid fa-pills" style="color: #3d89bf;"></i>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseP6-2" aria-expanded="false" aria-controls="collapseP6-2">
                                                @lang('messages.espece')
                                            </button>
                                        </div>
                                        <div id="collapseP6-2" class="collapse" aria-labelledby="headingP6-2">
                                        <div class="card-body">
                                            <p class="text-size-16 text-left mb-0 p-0">
                                                <ul class="py-0 my-0 px-0">
                                                    <li><p class="mb-0 pt-0">@lang('messages.indication_p61')</p></li>
                                                    <li><p class="py-0 my-0">@lang('messages.indication_p62')</p></li>
                                                </ul>
                                            </p>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card">
                                        <div class="card-header" id="headingP6-3">
                                        <i class="fa-regular fa-rectangle-list" style="color: #3d89bf;"></i>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseP6-3" aria-expanded="false" aria-controls="collapseP6-3">
                                                                                            @lang('messages.mode')
                                            </button>
                                        </div>
                                        <div id="collapseP6-3" class="collapse" aria-labelledby="headingP6-3">
                                        <div class="card-body">
                                            <p class="text-size-16 text-left mb-0 p-0"> @lang('messages.mode1')<br> @lang('messages.mode2')</p>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <figure class="mb-0 register_big_foot_shape position-absolute left_right_shape">
                    <img src="./assets/images/birds/9.png" alt="" class="img-fluid">
                </figure>
                <figure class="mb-0 register_small_foot_shape position-absolute left_right_shape">
                    <img src="./assets/images/birds/12.png" alt="" class="img-fluid">
                </figure>
            </div>

            <figure class="mb-0 register_right_shape position-absolute top_bottom_shape">
                <img src="./assets/images/birds/bird200/5.png" alt="" class="img-fluid">
            </figure>
            
        </div>
    </section>
</section>
    

@endsection