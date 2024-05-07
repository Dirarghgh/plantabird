@extends('layouts.app')  
@section('hero')
<div class="sub-banner-section-outer contact-banner-section-outer">
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-12 col-sm-12 col-12 d-lg-block d-none"></div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12 text-center">
                    <div class="banner-section-content " @if(app()->getLocale() === 'ar') dir="rtl" @endif>
                        <h1 data-aos="fade-up">@lang('messages.faq')</h1>
                        <p data-aos="fade-right">@lang('messages.faq3')</p>
                        <div class="btn_wrapper" data-aos="fade-up">
                            <span>Platntabird </span><span class="slash">/</span><span class="sub_span">@lang('messages.faq')</span>
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
                <img src="./assets/images//birds/bird300/2.png" alt="" class="img-fluid">
            </figure>
            <figure class="sub_banner_right_shape mb-0 position-absolute top_bottom_shape">
                <img src="./assets/images/sub_banner_right_shape.png" alt="" class="img-fluid">
            </figure>
        </div>
    </section>
</div>
@endsection
@section('content')

<div id="faq" class="accordian-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="faq_content {{ app()->getLocale() === 'ar' ? 'rtl-text-align' : '' }}" data-aos="fade-right" @if(app()->getLocale() === 'ar') dir="rtl" @endif>
                    <h6>@lang('messages.faq')</h6>
                    <h2>@lang('messages.faq1')</h2>
                    <p class="text-size-18">@lang('messages.faq2')</p>
                    <figure class="mb-0 faq_content_shape position-absolute left_right_shape">
                        <img src="./assets/images/faq_content_shape.png" alt="" class="img-fluid">
                    </figure>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="position-relative">
                    <div class="accordian-inner" data-aos="fade-up">
                        <div id="accordion1">
                            <div class="accordion-card">
                                <div class="card-header" id="headingOne">
                                    <i class="fa-solid fa-question"></i>
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    @lang('messages.question1')
                                    </button>
                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne">
                                <div class="card-body">
                                    <p class="text-size-16 text-left mb-0 p-0" @if(app()->getLocale() === 'ar') dir="rtl" @endif>@lang('messages.reponse1')</p>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="card-header" id="headingTwo">
                                    <i class="fa-solid fa-question"></i>
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    @lang('messages.question2')
                                    </button>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                                <div class="card-body">
                                    <p class="text-size-16 text-left mb-0 p-0" @if(app()->getLocale() === 'ar') dir="rtl" @endif>@lang('messages.reponse2')</p>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="card-header" id="headingTree">
                                    <i class="fa-solid fa-question"></i>
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTree" aria-expanded="false" aria-controls="collapseTree">
                                    @lang('messages.question3')
                                    </button>
                                </div>
                                <div id="collapseTree" class="collapse" aria-labelledby="headingTree">
                                <div class="card-body">
                                    <p class="text-size-16 text-left mb-0 p-0" @if(app()->getLocale() === 'ar') dir="rtl" @endif>@lang('messages.reponse3')</p>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="card-header" id="headingFour">
                                    <i class="fa-solid fa-question"></i>
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    @lang('messages.question4')
                                    </button>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour">
                                <div class="card-body">
                                    <p class="text-size-16 text-left mb-0 p-0" @if(app()->getLocale() === 'ar') dir="rtl" @endif>@lang('messages.reponse4')</p>
                                </div>
                                </div>
                            </div>
                        </div>
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
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="position-relative">
                    <div class="accordian-inner" data-aos="fade-up">
                        <div id="accordion2">
                            <div class="accordion-card">
                                <div class="card-header" id="headingNine">
                                    <i class="fa-solid fa-question"></i>
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    @lang('messages.question5')
                                    </button>
                                </div>
                                <div id="collapseNine" class="collapse" aria-labelledby="headingNine">
                                <div class="card-body">
                                    <p class="text-size-16 text-left mb-0 p-0" @if(app()->getLocale() === 'ar') dir="rtl" @endif>@lang('messages.reponse5')</p>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="card-header" id="headingTen">
                                    <i class="fa-solid fa-question"></i>
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    @lang('messages.question6')
                                    </button>
                                </div>
                                <div id="collapseTen" class="collapse" aria-labelledby="headingTen">
                                    <div class="card-body">
                                        <p class="text-size-16 text-left mb-0 p-0" @if(app()->getLocale() === 'ar') dir="rtl" @endif>@lang('messages.reponse6')</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="card-header" id="headingEleven">
                                    <i class="fa-solid fa-question"></i>
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                    @lang('messages.question7')
                                    </button>
                                </div>
                                <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven">
                                <div class="card-body">
                                    <p class="text-size-16 text-left mb-0 p-0" @if(app()->getLocale() === 'ar') dir="rtl" @endif>@lang('messages.reponse7')</p>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="position-relative">
                    <div class="accordian-inner" data-aos="fade-up">
                        <div id="accordion3">
                            <div class="accordion-card">
                                <div class="card-header" id="headingFive">
                                    <i class="fa-solid fa-question"></i>
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    @lang('messages.question9')
                                    </button>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive">
                                <div class="card-body">
                                    <p class="text-size-16 text-left mb-0 p-0" @if(app()->getLocale() === 'ar') dir="rtl" @endif>@lang('messages.reponse9')</p>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="card-header" id="headingSeven">
                                    <i class="fa-solid fa-question"></i>
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    @lang('messages.question11')
                                    </button>
                                </div>
                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven">
                                <div class="card-body">
                                    <p class="text-size-16 text-left mb-0 p-0" @if(app()->getLocale() === 'ar') dir="rtl" @endif>@lang('messages.reponse11')</p>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="card-header" id="headingEight">
                                    <i class="fa-solid fa-question"></i>
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    @lang('messages.question12')
                                    </button>
                                </div>
                                <div id="collapseEight" class="collapse" aria-labelledby="headingEight">
                                    <div class="card-body">
                                        <p class="text-size-16 text-left mb-0 p-0" @if(app()->getLocale() === 'ar') dir="rtl" @endif>@lang('messages.reponse12')</p>
                                    </div>
                                </div>
                            </div>
                        </div>
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

</div>

@endsection