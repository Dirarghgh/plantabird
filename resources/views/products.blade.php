@extends('layouts.app')
 
@section('content')
<div class="sub-banner-section-outer">
    <!-- SUB BANNER SECTION -->
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-12 col-sm-12 col-12 d-lg-block d-none"></div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12 text-center">
                    <div class="banner-section-content">
                        <h1 data-aos="fade-up">Nos produits</h1>
                        <p data-aos="fade-right">Nous proposons une gamme de complément alimentaire naturels. </p>
                        <div class="btn_wrapper" data-aos="fade-up">
                            <span>Plantabird </span><span class="slash">/</span><span class="sub_span"> Produits</span>
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

    <section class="register_now_section position-relative">
    <div class="container">
        <div class="row position-relative">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="register_images">
                    <figure class="register_packet_image mb-4">
                        <img src="./assets/images/products/CLOSTRI.png" alt="" class="img-fluid">
                    </figure>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="register_content" data-aos="fade-right">
                    <h2>CLOSTRI - 30ml</h2>
                    <h3>Complément alimentaire Antioxydant digestif.</h3>
                    <p>Ce produit est un aliment complémentaire pour la gestion des CLOSTRIDIOSE.</p>
                    <div class="composition-container">
                        <h3>COMPOSITION:</h3>
                        <div>
                            <ul>
                                <li>
                                    <p>Extraits de plantes aromatiques: 16%</p>
                                    <ul>
                                        <li>Eucalyptus globules</li>
                                        <li>Origanum vulgare </li>
                                        <li>Tanavetum vulgare </li>
                                    </ul>
                                </li>
                                <li><p>Eau: 79%</p></li>
                                <li><p>Alcool: 5%</p></li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <h3>ESPECE DE DESTINATION :</h3>
                        <p>Toutes les espèces oiseaux.</p>
                    </div>
                    <div>
                        <h3>MODE D’EMPLOI :</h3>
                        <p>5 Gouttes / 100ml d’eau de boisson, pendant 7 jours consécutifs.</p>
                        <p>Renouveler l’eau de boisson chaque 12 heures</p>
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

@endsection