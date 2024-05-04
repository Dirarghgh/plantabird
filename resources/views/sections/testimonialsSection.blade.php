<section class="testimonials_section position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12" data-aos="fade-right" >
                <div class="testimonials_heading_content">
                    <h6>@lang('messages.temoignages')</h6>
                    <h2>@lang('messages.tem_titre')</h2>
                </div>
                <div class="owl-carousel owl-theme">
                    <div class="item " @if(app()->getLocale() === 'ar') dir="rtl" @endif>
                        <div class="testimonials_content position-relative">
                            <p class="paragraph ">@lang('messages.tem_p11') <span class="about-span-green"> PLANTABIRD </span> @lang('messages.tem_p12')</p>
                            <ul class="list-unstyled">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <h3>@lang('messages.tem_o11')</h3>
                            <p class="text-size-18">@lang('messages.tem_o12')</p>
                            <figure class="testimonials_quote mb-0 position-absolute">
                                <img src="./assets/images/testimonials_quote.png" alt="" class="img-fluid">
                            </figure>
                        </div>
                    </div>
                    <div class="item" @if(app()->getLocale() === 'ar') dir="rtl" @endif>
                        <div class="testimonials_content position-relative">
                            <p class="paragraph">@lang('messages.tem_p21') <span class="about-span-green"> PLANTABIRD </span>@lang('messages.tem_p22')</p>
                            <ul class="list-unstyled">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <h3>@lang('messages.tem_o21')</h3>
                            <p class="text-size-18">@lang('messages.tem_o21')</p>
                            <figure class="testimonials_quote mb-0 position-absolute">
                                <img src="./assets/images/testimonials_quote.png" alt="" class="img-fluid">
                            </figure>
                        </div>
                    </div>
                    <div class="item" @if(app()->getLocale() === 'ar') dir="rtl" @endif>
                        <div class="testimonials_content position-relative">
                            <p class="paragraph">@lang('messages.tem_p31') <span class="about-span-green"> PLANTABIRD </span>@lang('messages.tem_p32')</p>
                            <ul class="list-unstyled">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <h3>@lang('messages.tem_o31')</h3>
                            <p class="text-size-18">@lang('messages.tem_o32')</p>
                            <figure class="testimonials_quote mb-0 position-absolute">
                                <img src="./assets/images/testimonials_quote.png" alt="" class="img-fluid">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 d-md-block d-none">
                <div class="testimonials_image">
                    @if(app()->getLocale() === 'fr')  
                    <figure class="testimonials_image1 testimonials_image_border_1 mb-0 position-absolute">
                        <img src="./assets/images/birds/birds_tem/1.png" alt="" class="img-fluid hover-effect">
                    </figure>
                    @endif
                    <figure class="testimonials_image2 testimonials_image_border_2 mb-0 position-absolute">
                        <img src="./assets/images/birds/birds_tem/2.png" alt="" class="img-fluid hover-effect">
                    </figure>
                    <figure class="testimonials_image3 testimonials_image_border_3 mb-0 position-absolute">
                        <img src="./assets/images/birds/birds_tem/3.png" alt="" class="img-fluid hover-effect">
                    </figure>
                    @if(app()->getLocale() === 'fr')  
                    <figure class="testimonials_image4 testimonials_image_border_1 mb-0 position-absolute">
                        <img src="./assets/images/birds/birds_tem/4.png" alt="" class="img-fluid hover-effect">
                    </figure>
                    @endif
                    <figure class="testimonials_image5 testimonials_image_border_4 mb-0 position-absolute">
                        <img src="./assets/images/birds/birds_tem/5.png" alt="" class="img-fluid hover-effect">
                    </figure>
                    <figure class="testimonials_image6 testimonials_image_border_2 mb-0 position-absolute">
                        <img src="./assets/images/birds/birds_tem/6.png" alt="" class="img-fluid hover-effect">
                    </figure>
                    <figure class="testimonials_circle1 mb-0 position-absolute">
                        <img src="./assets/images/testimonials_circle1.png" alt="" class="img-fluid">
                    </figure>
                    <figure class="testimonials_circle2 mb-0 position-absolute">
                        <img src="./assets/images/testimonials_circle2.png" alt="" class="img-fluid">
                    </figure>
                    <figure class="testimonials_circle3 mb-0 position-absolute">
                        <img src="./assets/images/testimonials_circle3.png" alt="" class="img-fluid">
                    </figure>
                    <figure class="testimonials_rightside_shape mb-0 position-absolute left_right_shape">
                        <img src="./assets/images/testimonials_rightside_shape.png" alt="" class="img-fluid">
                    </figure>
                </div>
            </div>
        </div>
        <figure class="testimonials_left_shape mb-0 position-absolute top_bottom_shape">
            <img src="./assets/images/birds/14.png" alt="" class="img-fluid">
        </figure>
        <figure class="testimonials_right_shape mb-0 position-absolute top_bottom_shape">
            <img src="./assets/images/testimonials_right_shape.png" alt="" class="img-fluid">
        </figure>
    </div>
</section>