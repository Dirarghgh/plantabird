<section class="about_section position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                <div class="about_images_wrapper position-relative">
                    <figure class="mb-0 about_main_image">
                        <img src="./assets/images/designs/14.png" alt="" class="img-fluid">
                    </figure>
                    <figure class="mb-0 about_left_image position-absolute">
                        <img src="./assets/images/designs/13.jpg" alt="" class="img-fluid">
                    </figure>
                    <div class="about_left_box_wrapper">
                        <figure class="mb-0">
                            <img src="./assets/images/about_left_box_image.png" alt="" class="img-fluid hover-effect">
                        </figure>
                        <span class="fw-bold mb-0">@lang('messages.depuis')</span>
                    </div>
                    <figure class="mb-0 about_foot_shape position-absolute top_bottom_shape">
                        <img src="./assets/images/birds/5.png" alt="" class="img-fluid">
                    </figure>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                <div class="about_content " data-aos="fade-right" @if(app()->getLocale() === 'ar') dir="rtl" @endif>
                    <h6 class="{{ app()->getLocale() === 'ar' ? 'rtl-text-align' : '' }}">@lang('messages.aui_sommes_nous')</h6>
                    <h2 class="{{ app()->getLocale() === 'ar' ? 'rtl-text-align' : '' }}">@lang('messages.about1')</h2>
                    <p class="text-size-18 about_first_p {{ app()->getLocale() === 'ar' ? 'rtl-text-align' : '' }}">@lang('messages.about2')</p>
                    <p class="text-size-18 {{ app()->getLocale() === 'ar' ? 'rtl-text-align' : '' }}"><span class="about-span-green"> PLANTABIRD </span> @lang('messages.about3')</p>
                    @if($button === true)
                    <div class="btn_wrapper">
                        <a class="text-decoration-none default-btn" href="about">@lang('messages.plus')</a>
                    </div>
                    @endif
                    <figure class="mb-0 about_content_shape position-absolute left_right_shape">
                        <img src="./assets/images/about_content_shape.png" alt="" class="img-fluid">
                    </figure>
                </div>
            </div>
        </div>
        <figure class="mb-0 about_left_shape position-absolute top_bottom_shape">
            <img src="./assets/images/about_left_shape.png" alt="" class="img-fluid">
        </figure>
        <figure class="mb-0 about_right_shape position-absolute top_bottom_shape">
            <img src="./assets/images/birds/bird200/2.png" alt="" class="img-fluid">
        </figure>
    </div>
</section>