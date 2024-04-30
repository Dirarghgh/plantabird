@extends('layouts.app')
 
@section('content')
<div class="sub-banner-section-outer contact-banner-section-outer">
    <!-- SUB BANNER SECTION -->
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-12 col-sm-12 col-12 d-lg-block d-none"></div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12 text-center">
                    <div class="banner-section-content">
                        <h1 data-aos="fade-up">Contact</h1>
                        <p data-aos="fade-right">N'hésitez pas à nous contacter pour toute question, suggestion ou demande d'information. Nous sommes là pour vous aider!</p>
                        <div class="btn_wrapper" data-aos="fade-up">
                            <span>Plantabird </span><span class="slash">/</span><span class="sub_span"> Contact</span>
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
<section class="contact_info_section position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="contact_info_content">
                            <h6>Nos Informations</h6>
                            <h2>Prenez Contact</h2>
                            <p class="text-size-18">N'hésitez pas à nous contacter pour toute question, suggestion ou demande d'information. Nous sommes là pour vous aider!</p>
                        </div>
                    </div>
                </div>
                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="contact_info_box box1 hover-effect">
                            <div class="contact_info_box_image">
                                <figure class="mb-0">
                                    <img src="./assets/images/location.png" alt="" class="img-fluid hover-effect">
                                </figure>
                            </div>
                            <div class="contact_info_box_content_wrapper">
                                <h3>Emplacement:</h3>
                                <p class="text-size-16 mb-0">Rue Ahmed Boukhlef - Birtouta, 16045, Alger</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="contact_info_box box2 hover-effect">
                            <div class="contact_info_box_image">
                                <figure class="mb-0">
                                    <img src="./assets/images/phone.png" alt="" class="img-fluid hover-effect">
                                </figure>
                            </div>
                            <div class="contact_info_box_content_wrapper">
                                <h3>Téléphone:</h3>
                                <p class="mb-0"><a href="tel:+012(345)67899" class="text-decoration-none">+(213)770 07 61 67</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="contact_info_box box3 hover-effect">
                            <div class="contact_info_box_image">
                                <figure class="mb-0">
                                    <img src="./assets/images/email.png" alt="" class="img-fluid hover-effect">
                                </figure>
                            </div>
                            <div class="contact_info_box_content_wrapper">
                                <h3>Email:</h3>
                                <p class="mb-0"><a href="mailto:Plantabird@gmail.com" class="text-decoration-none">Plantabird@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12 col-12" data-aos="fade-right">
                <div class="contact_info_form_content">
                    <h6>CONTACTEZ-NOUS</h6>
                    <h2>Envoie-nous un message</h2>
                    <p class="text-size-18">Tout ce que vous avez à faire est de remplir vos informations personnelles et d'appuyer sur Envoyer.</p>
                    <form id="contactpage" method="POST" action="./contact-form.php">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group mb-0">
                                <input type="text" name="fullname" id="name" class="form-control" placeholder="Nome:">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group mb-0">    
                                <input type="tel" name="phone" id="phonenum" class="form-control" placeholder="Numéro de téléphone:"> 
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group mb-0">    
                                <input type="email" name="emailaddress" id="emailaddrs" class="form-control" placeholder="Email:"> 
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class=" form-group mb-0">    
                                <textarea rows="3" name="msg" id="comment" class="form-control" placeholder="Message:"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="btn_wrapper">
                            <button type="submit" name="get_started" id="started" class="default-btn">Envoyer</button>
                        </div>
                    </form>
                    <figure class="contact_info_right_shape mb-0 position-absolute left_right_shape">
                        <img src="./assets/images/contact_info_right_shape.png" alt="" class="img-fluid">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CONTACT MAP SECTION -->
<div class="contact_map_section">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m24!1m12!1m3!1d102381.74015131898!2d2.966688643925535!3d36.68821861155655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m9!3e6!4m3!3m2!1d36.731270599999995!2d3.0876794!4m3!3m2!1d36.645392699999995!2d2.9955032!5e0!3m2!1sfr!2sdz!4v1714415499527!5m2!1sfr!2sdz" width="1920" height="615" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
@endsection