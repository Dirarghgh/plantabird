<!-- STATISTICS_NEWSLETTER COMBO SECTION -->
<section class="stats_news_combo_section">
    <!-- STATISTICS SECTION -->
    <div class="statistics_section">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="statistics_box box1">
                        <figure>
                            <img src="./assets/images/statistics_image1.png" alt="" class="img-fluid hover-effect">
                        </figure>
                        <div class="statistics_span_wrapper">
                            <span class="counter">85</span>
                            <span class="plus">+</span>
                        </div>
                        <p class="text-size-18 mb-0">@lang('messages.footer_prix')</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="statistics_box box2">
                        <figure>
                            <img src="./assets/images/statistics_image2.png" alt="" class="img-fluid hover-effect">
                        </figure>
                        <div class="statistics_span_wrapper">
                            <span class="counter">96</span>
                            <span class="plus">k</span>
                        </div>
                        <p class="text-size-18 mb-0">@lang('messages.footer_clients')</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="statistics_box box3">
                        <figure>
                            <img src="./assets/images/statistics_image3.png" alt="" class="img-fluid hover-effect">
                        </figure>
                        <div class="statistics_span_wrapper">
                            <span class="counter">60</span>
                            <span class="plus">+</span>
                        </div>
                        <p class="text-size-18 mb-0">@lang('messages.footer_vet')</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="statistics_box box4">
                        <figure>
                            <img src="./assets/images/statistics_image4.png" alt="" class="img-fluid hover-effect">
                        </figure>
                        <div class="statistics_span_wrapper">
                            <span class="counter">99</span>
                            <span class="plus">.99%</span>
                        </div>
                        <p class="text-size-18 mb-0">@lang('messages.footer_pro')</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- NEWSLETTER SECTION -->
    <div class="newsletter_section">
        <div class="container">
            <div class="newsletter_box position-relative">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-12 order-md-1 order-2">
                        <figure class="newsletter_image mb-0 position-absolute">
                            <img src="./assets/images/designs/8.png" alt="" class="img-fluid">
                        </figure>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 col-12 order-md-2 order-1">
                        <div class="newsletter_content">
                            <h6>@lang('messages.contantez_nous_maintenant')</h6>
                            <h2>@lang('messages.footer1')</h2>
                            <div class="form-row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contact-footer-container">
                                    <div>
                                        <a href="">
                                            <a class="nav-link default-btn contact_us" href="/contact">@lang('messages.contantez_nous')</a>
                                        </a>
                                    </div>
                                    <div class="outer_div_footer">
                                        <a href="tel:+213770076167">
                                        <i class="fa-solid fa-phone fa-2x"></i>
                                        </a>
                                    </div>
                                    <div class="outer_div_footer">
                                        <a href="mailto:Plantabird@gmail.com">
                                        <i class="fa-solid fa-at fa-2x"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <figure class="newsletter_yellow_shape mb-0 position-absolute left_right_shape">
                    <img src="./assets/images/newsletter_yellow_shape.png" alt="" class="img-fluid">
                </figure>
            </div>
            <figure class="newsletter_purple_foot mb-0 position-absolute top_bottom_shape">
                <img src="./assets/images/birds/12.png" alt="" class="img-fluid">
            </figure>
            <figure class="newsletter_green_foot mb-0 position-absolute top_bottom_shape">
                <img src="./assets/images/birds/14.png" alt="" class="img-fluid">
            </figure>
        </div>
    </div>
</section>
<!-- FOOTER SECTION -->
<section class="footer-section">
    <div class="container">
        <div class="middle-portion">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-6 col-12">
                    <div class="about_col">
                        <a href="./index.html">
                            <figure>
                                <img src="./assets/images/favicon/logo_t.png" alt="" class="img-fluid">
                            </figure>
                        </a>
                        <p class="{{ app()->getLocale() === 'ar' ? 'rtl-text-align' : '' }}" @if(app()->getLocale() === 'ar') dir="rtl" @endif>@lang('messages.footer2')</p>
                        <div class="headphone_wrapper">
                            <figure class="mb-0">
                                <img src="./assets/images/footer_headphone.png" alt="" class="img-fluid">
                            </figure>
                            <div class="headphone_content">
                                <a href="tel:+213770076167" class="text-decoration-none d-block">+213 770 07 61 67</a>
                                <span>@lang('messages.footer3')</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-12 d-lg-block d-none">
                    <div class="hours_col">
                        <h3>@lang('messages.heures_ouverture')</h3>
                        <ul class="list-unstyled">
                            <li>
                                <p>@lang('messages.dimanche_jeudi')</p>
                            </li>
                            <li>
                                <span>09:00 am – 04:00 pm</span>
                            </li>
                            <li>
                                <p>@lang('messages.vendredi_samedi')</p>
                            </li>
                            <li>
                                <span>@lang('messages.ferme')</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-12 d-md-block d-none">
                    <div class="links_col">
                        <h3>@lang('messages.navigation')</h3>
                        <ul class="list-unstyled">
                            <li>
                                <i class="fa-solid fa-angle-right"></i>
                                <a href="/home">@lang('messages.Accueil')</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-angle-right"></i>
                                <a href="/products">@lang('messages.produits')</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-angle-right"></i>
                                <a href="/about">@lang('messages.apropos')</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-angle-right"></i>
                                <a href="/faq">@lang('messages.faq')</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-angle-right"></i>
                                <a href="/pdv">@lang('messages.pdv')</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 d-sm-block d-none">
                    <div class="contact_col">
                        <h3>@lang('messages.contantez_nous')</h3>
                        <ul class="list-unstyled">
                            <li>
                                <p>@lang('messages.adresse')</p>
                            </li>
                            <li class="mail">
                                <a href="https://www.google.com/maps/dir/?api=1&destination=36.645392666286%2C2.9955031700211">@lang('messages.adresse_nom')</a>
                            </li>
                            <li>
                                <p>@lang('messages.email')</p>
                            </li>
                            <li class="mail">
                                <a href="mailto:Plantabird@gmail.com" class="text-decoration-none">Plantabird@gmail.com</a>
                                <a href="mailto:Zeghar@plantabird.com" class="text-decoration-none">Zeghar@plantabird.com</a>
                                <a href="mailto:Abdat@plantabird.com" class="text-decoration-none">Abdat@plantabird.com</a>

                            </li>
                        </ul>
                        <ul class="list-unstyled">
                            <li class="icons"><a href="https://www.facebook.com/profile.php?id=61555825628635"><i class="fa-brands fa-facebook-f hover-effect" aria-hidden="true"></i></a></li>
                            <li class="icons"><a href="https://www.facebook.com/profile.php?id=61555825628635"><i class="fa-brands fa-twitter hover-effect" aria-hidden="true"></i></a></li>
                            <li class="icons"><a href="https://www.facebook.com/profile.php?id=61555825628635"><i class="fa-brands fa-instagram mr-0 hover-effect" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-portion">
        <div class="col-12"> 
            <div class="copyright" @if(app()->getLocale() === 'ar') dir="rtl" @endif>
                <p>@lang('messages.copyright') © - {{ date('Y') }} @lang('messages.by') <a class="text-white" href="https://sadeeminfo.com/"> Sadeem informatique.</a> @lang('messages.rights_reserved')</p>
            </div>
        </div>
    </div>
   
</section>