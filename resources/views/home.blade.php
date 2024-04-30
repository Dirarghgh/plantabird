@extends('layouts.app')  
@section('hero')
    <section class="banner-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 col-12 text-lg-left text-center">
                    <div class="banner-section-content">
                        <h1 data-aos="fade-up">La santé de votre <span></span> est notre priorité.</h1>
                        <p data-aos="fade-right">&nbsp; &nbsp; &nbsp;Nos produits offrent une solution pour soutenir la santé et le bien-être des petits oiseaux . Nous proposons une gamme de complément alimentaire naturels.</p>
                        <div class="" data-aos="fade-up">
                            <a class="text-decoration-none default-btn" href="./about.html">En savoir plus</a>
                        </div>
                        <figure class="banner_top_shape mb-0 position-absolute left_right_shape">
                            <img src="./assets/images/banner_content_top_shape.png" alt="" class="img-fluid">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                    <div class="banner-section-image position-relative">
                        <figure class="banner-image mb-0 left_right_shape">
                            <img src="./assets/images/designs/2.png" alt="" class="img-fluid">
                        </figure> 
                        <figure class="banner-background-image mb-0 position-absolute">
                            <img src="./assets/images/banner_image_background.png" alt="" class="img-fluid">
                        </figure>
                        <figure class="banner-pink_foot_shape mb-0 position-absolute top_bottom_shape">
                            <img src="./assets/images/birds/12.png" alt="" class="img-fluid">
                        </figure> 
                        <figure class="banner-green_foot_shape mb-0 position-absolute top_bottom_shape">
                            <img src="./assets/images/birds/3.png" alt="" class="img-fluid">
                        </figure> 
                        <div class="box vaccination_box position-absolute hover-effect">
                            <div class="icon-container-rounded">
                                <i class="fa-solid fa-face-smile-beam fa-2x"></i>
                            </div>
                            <div class="box_content_wrapper">
                                <p class="box_heading text-size-16 mb-0">Régulateur du <br>stress oxydatif</p>
                            </div>
                        </div>
                        <div class="box pet_training_box position-absolute hover-effect">
                            <div class="icon-container-rounded">
                                <i class="fa-solid fa-dove fa-2x"></i>
                            </div>
                            <div class="box_content_wrapper">
                                <p class="box_heading text-size-16 mb-0">Pour toutes les <br>espèces oiseaux</p>
                            </div>
                        </div>
                        <div class="box satisfied_client_box position-absolute hover-effect">
                            <div class="icon-container-rounded">
                                <i class="fa-solid fa-leaf fa-2x"></i>
                            </div>
                            <div class="box_content_wrapper">
                                <p class="box_heading text-size-16 mb-0">A base d’extraits <br> des plantes</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <figure class="banner_left_shape mb-0 position-absolute top_bottom_shape">
                <img src="./assets/images/birds/bird300/2.png" alt="" class="img-fluid">
            </figure>
            <figure class="banner_right_shape mb-0 position-absolute top_bottom_shape">
                <img src="./assets/images/birds/10.png" alt="" class="img-fluid">
            </figure>
        </div>
    </section>
@endsection
@section('content')   

<!-- OUR STORE SECTION -->
<section class="store_section position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="store_content">
                    <h6>Nos produits</h6>
                    <h2>Nous proposons une gamme de complément alimentaire naturels</h2>
                </div>
            </div>
        </div>
        <div class="tabs-box tabs-options">
            <div class="tab-content" data-aos="fade-up">
                <div id="all" class="tab-pane fade in active show">
                    <div class="row position-relative">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="store_box">
                                    <div class="store_image_box">
                                        <figure class="mb-0">
                                            <img src="./assets/images/products/CLOSTRI.png" alt="" class="img-fluid">
                                        </figure>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>CLOSTRI</h5>
                                                <p class="text-size-16 text-no-wrap">Antioxydant digestif.</p>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <a href="products#CLOSTRI">
                                                <figure class="cart">
                                                    <i class="fa-solid fa-eye fa-lg"></i>
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="store_box">
                                    <div class="store_image_box">
                                        <figure class="mb-0">
                                            <img src="./assets/images/products/COLIBA.png" alt="" class="img-fluid">
                                        </figure>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>COLIBA</h5>
                                                <p class="text-size-16 text-no-wrap">Antioxydant digestif</p>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <a href="products#COLIBA">
                                                <figure class="cart">
                                                    <i class="fa-solid fa-eye fa-lg"></i>
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="store_box">
                                    <div class="store_image_box">
                                        <figure class="mb-0">
                                            <img src="./assets/images/products/COXI.png" alt="" class="img-fluid">
                                        </figure>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>COXI</h5>
                                                <p class="text-size-16 text-no-wrap">Antioxydant digestif.</p>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <a href="products#COXI">
                                                <figure class="cart">
                                                    <i class="fa-solid fa-eye fa-lg"></i>
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="store_box">
                                    <div class="store_image_box">
                                        <figure class="mb-0">
                                            <img src="./assets/images/products/HEPA.png" alt="" class="img-fluid">
                                        </figure>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>HEPA</h5>
                                                <p class="text-size-16 text-no-wrap">Antioxydant hépatique.</p>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <a href="products#HEPA">
                                                <figure class="cart">
                                                    <i class="fa-solid fa-eye fa-lg"></i>
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="store_box">
                                    <div class="store_image_box">
                                        <figure class="mb-0">
                                            <img src="./assets/images/products/PULMO.png" alt="" class="img-fluid">
                                        </figure>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>PULMO</h5>
                                                <p class="text-size-16 text-no-wrap">Antioxydant pulmonaire.</p>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <a href="products#PULMO">
                                                <figure class="cart">
                                                    <i class="fa-solid fa-eye fa-lg"></i>
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="store_box">
                                    <div class="store_image_box">
                                        <figure class="mb-0">
                                            <img src="./assets/images/products/TRICHOM.png" alt="" class="img-fluid">
                                        </figure>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>TRICHOM</h5>
                                                <p class="text-size-16 text-no-wrap">Antioxydant digestif.</p>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <a href="products#TRICHOM">
                                                <figure class="cart">
                                                    <i class="fa-solid fa-eye fa-lg"></i>
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <figure class="store_box_right_shape mb-0 position-absolute left_right_shape">
                            <img src="./assets/images/birds/12.png" alt="" class="img-fluid">
                        </figure>
                    </div>
                </div>
            </div>
        </div> 
        <figure class="store_big_foot_shape mb-0 position-absolute top_bottom_shape">
            <img src="./assets/images/birds/12.png" alt="" class="img-fluid">
        </figure>
        <figure class="store_small_foot_shape mb-0 position-absolute top_bottom_shape">
            <img src="./assets/images/birds/14.png" alt="" class="img-fluid">
        </figure>
    </div>
</section>

<!-- ABOUT SECTION -->

@include('sections.aboutSection' , ['button' => true])

<!-- CHOOSE US SECTION -->

@include('sections.offreSection', ['button' => true] )

<!-- OUR MISSION SECTION -->
<section class="mission_section position-relative" id="video_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="mission_content">
                    <h6>Nos engagement</h6>
                    <h2>Nous garantissons la santé de vos oiseaux</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="mission_box_wrapper" data-aos="fade-right">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-6 col-12">
                            <div class="mission_box">
                                <figure class="mession-icons">
                                    <i class="fa-solid fa-feather-pointed hover-effect fa-4x"></i>
                                </figure>
                                <h3>Ailes</h3>
                                <p class="text-size-18">Des médicaments adaptés à chaque volée.</p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-6 col-12">
                            <div class="mission_box">
                                <figure class="mession-icons">
                                    <i class="fa-solid fa-hand-holding-medical hover-effect fa-4x"></i>
                                </figure>
                                <h3>Soin </h3>
                                <p class="text-size-18">Votre oiseau mérite le meilleur soin.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="mission_center_portion position-relative" data-aos="fade-up">
                    <figure class="mission_center_image mb-0">
                        <img src="./assets/images/designs/12.png" alt="" class="img-fluid">
                    </figure>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="mission_box_wrapper" data-aos="fade-right">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-6 col-12">
                            <div class="mission_box">
                                <figure class="mession-icons">
                                    <i class="fa-solid fa-solid fa-notes-medical hover-effect fa-4x"></i>
                                </figure>
                                <h3>La santé</h3>
                                <p class="text-size-18">Pour des oiseaux en pleine forme, faites confiance à notre traitement.</p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-6 col-12">
                            <div class="mission_box">
                                <figure class="mession-icons">
                                    <i class="fa-solid fa-solid fa-heart-pulse hover-effect fa-4x"></i>
                                </figure>
                                <h3>Guérison</h3>
                                <p class="text-size-18">Du bec au bout des plumes, une santé radieuse.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <figure class="mb-0 mission_left_shape position-absolute top_bottom_shape">
            <img src="./assets/images/mission_left_shape.png" alt="" class="img-fluid">
        </figure>
        <figure class="mb-0 mission_right_shape position-absolute top_bottom_shape">
            <img src="./assets/images/birds/bird200/1.png" alt="" class="img-fluid">
        </figure>
    </div>
</section>

<!-- FAQ SECTION -->
<div id="faq" class="accordian-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="faq_content" data-aos="fade-right">
                    <h6>FAQ</h6>
                    <h2>Nous sommes prêts à répondre à vos questions</h2>
                    <p class="text-size-18">&nbsp; &nbsp; &nbsp; Nous comprenons l'importance de maintenir la santé et le bien-être de vos précieux compagnons à plumes. Cette section FAQ vise à répondre à vos questions les plus fréquentes concernant les médicaments pour oiseaux, afin de vous aider à prendre soin de vos amis à plumes de la meilleure façon possible. </p>
                    <div class="btn_wrapper">
                        <a class="text-decoration-none default-btn" href="/faq">En savoir plus</a>
                    </div>
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
                                    Comment puis-je savoir si mon oiseau a besoin de médicaments?
                                    </button>
                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne">
                                <div class="card-body">
                                    <p class="text-size-16 text-left mb-0 p-0">Les signes courants de maladie chez les oiseaux incluent un plumage ébouriffé, une perte d'appétit, ou des changements dans leur comportement. Si vous observez l'un de ces signes, consultez un vétérinaire aviaire pour un diagnostic précis.</p>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="card-header" id="headingTwo">
                                    <i class="fa-solid fa-question"></i>
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Comment administrer les médicaments à mon oiseau?
                                    </button>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                                <div class="card-body">
                                    <p class="text-size-16 text-left mb-0 p-0">L'administration de médicaments aux oiseaux peut varier selon le type de médicament et la taille de l'oiseau. Suivez toujours les instructions du vétérinaire ou lisez attentivement les indications Onenies avec le médicament.</p>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="card-header" id="headingTree">
                                    <i class="fa-solid fa-question"></i>
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTree" aria-expanded="false" aria-controls="collapseTree">
                                        Est-ce que vous offrez des conseils sur les soins généraux des oiseaux?
                                    </button>
                                </div>
                                <div id="collapseTree" class="collapse" aria-labelledby="headingTree">
                                <div class="card-body">
                                    <p class="text-size-16 text-left mb-0 p-0">Oui, notre équipe est disponible pour Onenir des conseils sur la nutrition, l'environnement et d'autres aspects du soin des oiseaux. N'hésitez pas à nous contacter pour toute question.</p>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="card-header" id="headingFour">
                                    <i class="fa-solid fa-question"></i>
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Quelles sont vos options de livraison?
                                    </button>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour">
                                <div class="card-body">
                                    <p class="text-size-16 text-left mb-0 p-0">Nous offrons une variété d'options de livraison pour répondre à vos besoins, y compris la livraison express et standard. Les détails spécifiques sur les frais et les délais de livraison sont disponibles lors du passage à la caisse.</p>
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
<!-- PDV SECTION -->
<section class="team_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="team_content">
                    <h6>Points de vente</h6>
                    <h2>Bienvenue dans nos magasins</h2>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-up">
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="team_box">
                    <figure><img src="./assets/images/point_de_vente.jpg" alt="" class="img-fluid"></figure>
                    <h3>Pet Shop</h3>
                    <p class="text-size-18">Cité des 2000 logements, Bouira.</p>
                    <div class="team_social_icons">
                        <a href="https://www.facebook.com/profile.php?id=61555825628635" class="text-decoration-none">
                            <i class="fa-brands fa-facebook-f hover-effect" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.facebook.com/profile.php?id=61555825628635" class="text-decoration-none">
                            <i class="fa-brands fa-twitter hover-effect" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.facebook.com/profile.php?id=61555825628635" class="text-decoration-none">
                            <i class="fa-brands fa-instagram hover-effect mr-0" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="team_box">
                    <figure><img src="./assets/images/point_de_vente.jpg" alt="" class="img-fluid"></figure>
                    <h3>Pet Shop</h3>
                    <p class="text-size-18">Rue Ahmed Boukhlef, Birtouta, Alger.</p>
                    <div class="team_social_icons">
                        <a href="https://www.facebook.com/profile.php?id=61555825628635" class="text-decoration-none">
                            <i class="fa-brands fa-facebook-f hover-effect" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.facebook.com/profile.php?id=61555825628635" class="text-decoration-none">
                            <i class="fa-brands fa-twitter hover-effect" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.facebook.com/profile.php?id=61555825628635" class="text-decoration-none">
                            <i class="fa-brands fa-instagram hover-effect mr-0" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="team_box">
                    <figure><img src="./assets/images/point_de_vente.jpg" alt="" class="img-fluid"></figure>
                    <h3>Pet Shop</h3>
                    <p class="text-size-18">Cité Les Amandiers, Oran.</p>
                    <div class="team_social_icons">
                        <a href="https://www.facebook.com/profile.php?id=61555825628635" class="text-decoration-none">
                            <i class="fa-brands fa-facebook-f hover-effect" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.facebook.com/profile.php?id=61555825628635" class="text-decoration-none">
                            <i class="fa-brands fa-twitter hover-effect" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.facebook.com/profile.php?id=61555825628635" class="text-decoration-none">
                            <i class="fa-brands fa-instagram hover-effect mr-0" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS SECTION -->
@include('sections.testimonialsSection' )

 @endsection 