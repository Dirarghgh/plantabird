@extends('layouts.app')  
@section('content')   
<div class="banner-section-outer">
<!-- BANNER SECTION -->
    <section class="banner-section">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-5 col-md-12 col-sm-12 col-12 text-lg-left text-center">
                    <div class="banner-section-content">
                        <h1 data-aos="fade-up">La santé de votre oiseau <span></span> est notre priorité.</h1>
                        <p data-aos="fade-right">&nbsp; &nbsp; &nbsp;Nos produits offrent une solution pour soutenir la santé et le bien-être des petits oiseaux . Nous proposons une gamme de complément alimentaire naturels , Chaque produit est fabriqué à partir des extraits des plantes, garantissant une qualité optimale, afin de préserver la santé des oiseaux.</p>
                        <div class="btn_wrapper" data-aos="fade-up">
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
                            <img src="./assets/images/designs/6.png" alt="" class="img-fluid">
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
                            <i class="fa-solid fa-face-smile-beam fa-lg"></i>
                            </div>
                            <div class="box_content_wrapper">
                                <p class="box_heading text-size-16 mb-0">Régulateur du <br>stress oxydatif</p>
                            </div>
                        </div>
                        <div class="box pet_training_box position-absolute hover-effect">
                        <div class="icon-container-rounded">
                            <i class="fa-solid fa-dove fa-lg"></i>
                            </div>
                            <div class="box_content_wrapper">
                                <p class="box_heading text-size-16 mb-0">Pour toutes les <br>espèces oiseaux</p>
                            </div>
                        </div>
                        <div class="box satisfied_client_box position-absolute hover-effect">
                            <div class="icon-container-rounded">
                                <i class="fa-solid fa-leaf fa-lg"></i>
                            </div>
                            <div class="box_content_wrapper">
                                <p class="box_heading text-size-16 mb-0">A base d’extraits <br> des plantes</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <figure class="banner_left_shape mb-0 position-absolute top_bottom_shape">
                <img src="./assets/images/birds/9.png" alt="" class="img-fluid">
            </figure>
            <figure class="banner_right_shape mb-0 position-absolute top_bottom_shape">
                <img src="./assets/images/birds/10.png" alt="" class="img-fluid">
            </figure>
        </div>
    </section>
</div>
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
                                                <p class="text-size-16">Antioxydant digestif.</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">DZD</span>
                                                <span class="counter">600</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="/product-details">
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
                                                <p class="text-size-16">Antioxydant digestif</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">DZD</span>
                                                <span class="counter">800</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="/product-details">
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
                                                <p class="text-size-16">Antioxydant digestif</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">DZD</span>
                                                <span class="counter">900</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="/product-details">
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
                                                <p class="text-size-16">Antioxydant hepatique</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">DZD</span>
                                                <span class="counter">1200</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="/product-details">
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
                                                <p class="text-size-16">Antioxydant pulmonaire</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">DZD</span>
                                                <span class="counter">600</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="/product-details">
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
                                                <p class="text-size-16">Antioxydant digestif</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">DZD</span>
                                                <span class="counter">800</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="/product-details">
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
                        <span class="fw-bold mb-0">Depuis 2014</span>
                    </div>
                    <figure class="mb-0 about_foot_shape position-absolute top_bottom_shape">
                        <img src="./assets/images/birds/5.png" alt="" class="img-fluid">
                    </figure>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                <div class="about_content" data-aos="fade-right">
                    <h6>QUI SOMMES NOUS ?</h6>
                    <h2>Depuis son implantation en Algérie en 2014, </h2>
                    <p class="text-size-18 about_first_p">la société PLANTAXION s’est donné comme objectif de devenir un acteur important dans la lutte contre les phénomènes d'antibiorésistances en santé animale. </p>
                    <p class="text-size-18"><span class="about-span-green"> PLANTABIRD </span> est une filière de PLANTAXION qui offre une gamme de produits phytogéniques destinés pour les petits oiseaux </p>
                    <div class="btn_wrapper">
                        <a class="text-decoration-none default-btn" href="about">En savoir plus</a>
                    </div>
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
<div class="accordian-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="faq_content" data-aos="fade-right">
                    <h6>FAQ</h6>
                    <h2>Nous sommes prêts à répondre à vos questions</h2>
                    <p class="text-size-18">&nbsp; &nbsp; &nbsp; Nous comprenons l'importance de maintenir la santé et le bien-être de vos précieux compagnons à plumes. Cette section FAQ vise à répondre à vos questions les plus fréquentes concernant les médicaments pour oiseaux, afin de vous aider à prendre soin de vos amis à plumes de la meilleure façon possible. </p>
                    <div class="btn_wrapper">
                        <a class="text-decoration-none default-btn" href="./contact.html">Contactez-nous</a>
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
                                <div class="card-header" id="headingFour">
                                    <i class="fa-solid fa-question"></i>
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Comment puis-je savoir si mon oiseau a besoin de médicaments?
                                    </button>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour">
                                <div class="card-body">
                                    <p class="text-size-16 text-left mb-0 p-0">Les signes courants de maladie chez les oiseaux incluent un plumage ébouriffé, une perte d'appétit, ou des changements dans leur comportement. Si vous observez l'un de ces signes, consultez un vétérinaire aviaire pour un diagnostic précis.</p>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="card-header" id="headingSix">
                                    <i class="fa-solid fa-question"></i>
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Comment administrer les médicaments à mon oiseau?
                                    </button>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix">
                                <div class="card-body">
                                    <p class="text-size-16 text-left mb-0 p-0">L'administration de médicaments aux oiseaux peut varier selon le type de médicament et la taille de l'oiseau. Suivez toujours les instructions du vétérinaire ou lisez attentivement les indications fournies avec le médicament.</p>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="card-header" id="headingTwo">
                                    <i class="fa-solid fa-question"></i>
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Est-ce que vous offrez des conseils sur les soins généraux des oiseaux?
                                    </button>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                                <div class="card-body">
                                    <p class="text-size-16 text-left mb-0 p-0">Oui, notre équipe est disponible pour fournir des conseils sur la nutrition, l'environnement et d'autres aspects du soin des oiseaux. N'hésitez pas à nous contacter pour toute question.</p>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="card-header" id="headingTen">
                                    <i class="fa-solid fa-question"></i>
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                        Quelles sont vos options de livraison?
                                    </button>
                                </div>
                                <div id="collapseTen" class="collapse" aria-labelledby="headingTen">
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
                    <h3>Bouira</h3>
                    <p class="text-size-18">Cité des 2000 logements</p>
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
                    <h3>Alger</h3>
                    <p class="text-size-18">Rue Ahmed Boukhlef, Birtouta</p>
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
                    <h3>Oran</h3>
                    <p class="text-size-18">Cité Les Amandiers </p>
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

 @endsection 