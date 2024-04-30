@extends('layouts.app')
@section('hero')
<div class="sub-banner-section-outer contact-banner-section-outer">
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

<section>
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
                    <div class="register_content" data-aos="fade-right">
                        <h2 class="">CLOSTRI - 30ml</h2>
                        <h3>Complément alimentaire Antioxydant digestif.</h3>
                        <p>Ce produit est un aliment complémentaire pour la gestion des CLOSTRIDIOSE.</p>
                        <!-- <div class="composition-container">
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
                        </div> -->
                        <div class="accordian-product" >
                            <div class="accordian-inner" data-aos="fade-up">
                                <div id="accordion1">
                                    <div class="accordion-card">
                                        <div class="card-header" id="headingP1-1">
                                            <i class="fa-solid fa-atom" style="color: #ba4140;"></i>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseP1-1" aria-expanded="false" aria-controls="collapseP1-1">
                                                COMPOSITION:
                                            </button>
                                        </div>
                                        <div id="collapseP1-1" class="collapse" aria-labelledby="headingP1-1">
                                        <div class="card-body pb-2 my-0">
                                            <p class="text-size-16 text-left mb-0 p-0">
                                                <ul class="py-0 my-0 px-0">
                                                    <li >
                                                        <p class="mb-0 pt-0">Extraits de plantes aromatiques: 16%</p>
                                                        <ul class="mt-0 pl-3 py-1">
                                                            <li>Eucalyptus globules</li>
                                                            <li>Origanum vulgare </li>
                                                            <li>Tanavetum vulgare </li>
                                                        </ul>
                                                    </li>
                                                    <li><p class="py-0 my-0">Eau: 79%</p></li>
                                                    <li><p class="py-0 my-0">Alcool: 5%</p></li>
                                                </ul>
                                            </p>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card">
                                        <div class="card-header" id="headingP1-2">
                                            <i class="fa-solid fa-dove" style="color: #ba4140;"></i>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsP1-2" aria-expanded="false" aria-controls="collapsgP2">
                                                ESPECE DE DESTINATION :
                                            </button>
                                        </div>
                                        <div id="collapsP1-2" class="collapse" aria-labelledby="headingP1-2">
                                        <div class="card-body">
                                            <p class="text-size-16 text-left mb-0 p-0">Toutes les espèces oiseaux.</p>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card">
                                        <div class="card-header" id="headingP1-3">
                                        <i class="fa-regular fa-rectangle-list" style="color: #ba4140;"></i>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseP1-3" aria-expanded="false" aria-controls="collapseP1-3">
                                                MODE D’EMPLOI :
                                            </button>
                                        </div>
                                        <div id="collapseP1-3" class="collapse" aria-labelledby="headingP1-3">
                                        <div class="card-body">
                                            <p class="text-size-16 text-left mb-0 p-0">5 Gouttes / 100ml d’eau de boisson, pendant 7 jours consécutifs. <br> Renouveler l’eau de boisson chaque 12 heures</p>
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
                    <div class="register_content" data-aos="fade-right">
                        <h2 class="">COLIBA - 30ml</h2>
                        <h3>Complément alimentaire Antioxydant digestif.</h3>
                        <p>Ce produit est un aliment complémentaire qui assure la gestion du stress oxydatif , et limite l’impact des E.COLI et des entérocoques , soutenir le petit oiseau lors d’épisodes inflammatoires , c’est un stabilisateur du microbiote intestinal.</p>
                        <div class="accordian-product" >
                            <div class="accordian-inner" data-aos="fade-up">
                                <div id="accordion2">
                                    <div class="accordion-card">
                                        <div class="card-header" id="headingP2-1">
                                            <i class="fa-solid fa-atom" style="color: #a2a2a2;"></i>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseP2-1" aria-expanded="false" aria-controls="collapseP2-1">
                                                COMPOSITION:
                                            </button>
                                        </div>
                                        <div id="collapseP2-1" class="collapse" aria-labelledby="headingP2-1">
                                            <div class="card-body pb-2 my-0">
                                                <p class="text-size-16 text-left mb-0 p-0">
                                                    <ul class="py-0 my-0 px-0">
                                                        <li >
                                                            <p class="mb-0 pt-0">Extraits de plantes aromatiques: 12%</p>
                                                            <ul class="mt-0 pl-3 py-1">
                                                                <li>Rosmarinus officinalis </li>
                                                                <li>Olea Europea </li>
                                                                <li>Citrus paradisi </li>
                                                                <li>Citrus paradisi </li>
                                                            </ul>
                                                        </li>
                                                        <li><p class="py-0 my-0">Eau: 76%</p></li>
                                                        <li><p class="py-0 my-0">Alcool: 12%</p></li>
                                                    </ul>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card">
                                        <div class="card-header" id="headingP2-2">
                                            <i class="fa-solid fa-dove" style="color: #a2a2a2;"></i>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseP2-2" aria-expanded="false" aria-controls="collapseP2-2">
                                                ESPECE DE DESTINATION :
                                            </button>
                                        </div>
                                        <div id="collapseP2-2" class="collapse" aria-labelledby="headingP2-2">
                                        <div class="card-body">
                                            <p class="text-size-16 text-left mb-0 p-0">Toutes les espèces oiseaux.</p>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card">
                                        <div class="card-header" id="headingP2-3">
                                        <i class="fa-regular fa-rectangle-list" style="color: #a2a2a2;"></i>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseP2-3" aria-expanded="false" aria-controls="collapseP2-3">
                                                MODE D’EMPLOI :
                                            </button>
                                        </div>
                                        <div id="collapseP2-3" class="collapse" aria-labelledby="headingP2-3">
                                        <div class="card-body">
                                            <p class="text-size-16 text-left mb-0 p-0">5 Gouttes / 100ml d’eau de boisson, pendant 7 jours consécutifs. <br> Renouveler l’eau de boisson chaque 12 heures</p>
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
                    <div class="register_content" data-aos="fade-right">
                        <h2 class="">COXI - 30ml</h2>
                        <h3>Complément alimentaire Antioxydant digestif.</h3>
                        <p>Ce produit est un aliment complémentaire qui gère les facteurs de risque attribuables aux coccidioses.</p>
                        <div class="accordian-product" >
                            <div class="accordian-inner" data-aos="fade-up">
                                <div id="accordion2">
                                    <div class="accordion-card">
                                        <div class="card-header" id="headingP3-1">
                                            <i class="fa-solid fa-atom" style="color: #836a54;"></i>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseP3-1" aria-expanded="false" aria-controls="collapseP3-1">
                                                COMPOSITION:
                                            </button>
                                        </div>
                                        <div id="collapseP3-1" class="collapse" aria-labelledby="headingP3-1">
                                            <div class="card-body pb-2 my-0">
                                                <p class="text-size-16 text-left mb-0 p-0">
                                                    <ul class="py-0 my-0 px-0">
                                                        <li >
                                                            <p class="mb-0 pt-0">Extraits de plantes aromatiques: 12%</p>
                                                            <ul class="mt-0 pl-3 py-1">
                                                                <li>Lythrum salicaria</li>
                                                                <li>Arctostaphylos uva ursi</li>
                                                                <li>Raphanus sattivus</li>
                                                            </ul>
                                                        </li>
                                                        <li><p class="py-0 my-0">Eau: 79%</p></li>
                                                        <li><p class="py-0 my-0">Alcool: 13%</p></li>
                                                    </ul>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card">
                                        <div class="card-header" id="headingP3-2">
                                            <i class="fa-solid fa-dove" style="color: #836a54;"></i>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseP3-2" aria-expanded="false" aria-controls="collapseP3-2">
                                                ESPECE DE DESTINATION :
                                            </button>
                                        </div>
                                        <div id="collapseP3-2" class="collapse" aria-labelledby="headingP3-2">
                                        <div class="card-body">
                                            <p class="text-size-16 text-left mb-0 p-0">Toutes les espèces oiseaux.</p>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card">
                                        <div class="card-header" id="headingP3-3">
                                        <i class="fa-regular fa-rectangle-list" style="color: #836a54;"></i>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseP3-3" aria-expanded="false" aria-controls="collapseP3-3">
                                                MODE D’EMPLOI :
                                            </button>
                                        </div>
                                        <div id="collapseP3-3" class="collapse" aria-labelledby="headingP3-3">
                                        <div class="card-body">
                                            <p class="text-size-16 text-left mb-0 p-0">5 Gouttes / 100ml d’eau de boisson, pendant 7 jours consécutifs. <br> Renouveler l’eau de boisson chaque 12 heures</p>
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
                    <div class="register_content" data-aos="fade-right">
                        <h2 class="">HEPA - 30ml</h2>
                        <h3>Complément alimentaire Antioxydant hépatique.</h3>
                        <p>Ce produit est un aliment complémentaire hépato-protecteur participant au maintien de la bonne santé des petits oiseaux en détoxifiant son foie et en stimulant son système immunitaire.</p>
                        <div class="accordian-product" >
                            <div class="accordian-inner" data-aos="fade-up">
                                <div id="accordion2">
                                    <div class="accordion-card">
                                        <div class="card-header" id="headingP4-1">
                                            <i class="fa-solid fa-atom" style="color: #466535;"></i>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseP4-1" aria-expanded="false" aria-controls="collapseP4-1">
                                                COMPOSITION:
                                            </button>
                                        </div>
                                        <div id="collapseP4-1" class="collapse" aria-labelledby="headingP4-1">
                                            <div class="card-body pb-2 my-0">
                                                <p class="text-size-16 text-left mb-0 p-0">
                                                    <ul class="py-0 my-0 px-0">
                                                        <li >
                                                            <p class="mb-0 pt-0">Extraits de plantes aromatiques: 4%</p>
                                                            <ul class="mt-0 pl-3 py-1">
                                                                <li>Fumaria Officinalis </li>
                                                                <li>Taraxacum officinale</li>
                                                                <li>Raphanus sattivus</li>
                                                            </ul>
                                                        </li>
                                                        <li><p class="py-0 my-0">Eau: 83%</p></li>
                                                        <li><p class="py-0 my-0">Alcool: 13%</p></li>
                                                    </ul>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card">
                                        <div class="card-header" id="headingP4-2">
                                            <i class="fa-solid fa-dove" style="color: #466535;"></i>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseP4-2" aria-expanded="false" aria-controls="collapseP4-2">
                                                ESPECE DE DESTINATION :
                                            </button>
                                        </div>
                                        <div id="collapseP4-2" class="collapse" aria-labelledby="headingP4-2">
                                        <div class="card-body">
                                            <p class="text-size-16 text-left mb-0 p-0">Toutes les espèces oiseaux.</p>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card">
                                        <div class="card-header" id="headingP4-3">
                                        <i class="fa-regular fa-rectangle-list" style="color: #466535;"></i>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseP4-3" aria-expanded="false" aria-controls="collapseP4-3">
                                                MODE D’EMPLOI :
                                            </button>
                                        </div>
                                        <div id="collapseP4-3" class="collapse" aria-labelledby="headingP4-3">
                                        <div class="card-body">
                                            <p class="text-size-16 text-left mb-0 p-0">5 Gouttes / 100ml d’eau de boisson, pendant 7 jours consécutifs. <br> Renouveler l’eau de boisson chaque 12 heures</p>
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
                    <div class="register_content" data-aos="fade-right">
                        <h2 class="">TRICHOM - 30ml</h2>
                        <h3>Complément alimentaire Antioxydant hépatique.</h3>
                        <p>Ce produit est un aliment complémentaire participant au maintien de l'équilibre du microbiote intestinal.</p>
                        <p>•	Limiter l’impact de l’histomonose en conditions d’élevage non optimales</p>
                        <p>•	Stimuler les défenses immunitaires de l’intestin</p>
                        <div class="accordian-product" >
                            <div class="accordian-inner" data-aos="fade-up">
                                <div id="accordion2">
                                    <div class="accordion-card">
                                        <div class="card-header" id="headingP5-1">
                                            <i class="fa-solid fa-atom" style="color: #583d44;"></i>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseP5-1" aria-expanded="false" aria-controls="collapseP5-1">
                                                COMPOSITION:
                                            </button>
                                        </div>
                                        <div id="collapseP5-1" class="collapse" aria-labelledby="headingP5-1">
                                            <div class="card-body pb-2 my-0">
                                                <p class="text-size-16 text-left mb-0 p-0">
                                                    <ul class="py-0 my-0 px-0">
                                                        <li >
                                                            <p class="mb-0 pt-0">Extraits de plantes: 15.3%</p>
                                                            <ul class="mt-0 pl-3 py-1">
                                                                <li>Elettaria cardamomum</li>
                                                                <li>Origanum hercleoticum</li>
                                                                <li>Punica granatum</li>
                                                            </ul>
                                                        </li>
                                                        <li><p class="py-0 my-0">Eau: 73.3%</p></li>
                                                        <li><p class="py-0 my-0">Alcool: 11%</p></li>
                                                    </ul>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card">
                                        <div class="card-header" id="headingP5-2">
                                            <i class="fa-solid fa-dove" style="color: #583d44;"></i>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseP5-2" aria-expanded="false" aria-controls="collapseP5-2">
                                                ESPECE DE DESTINATION :
                                            </button>
                                        </div>
                                        <div id="collapseP5-2" class="collapse" aria-labelledby="headingP5-2">
                                        <div class="card-body">
                                            <p class="text-size-16 text-left mb-0 p-0">Toutes les espèces oiseaux.</p>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card">
                                        <div class="card-header" id="headingP5-3">
                                        <i class="fa-regular fa-rectangle-list" style="color: #583d44;"></i>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseP5-3" aria-expanded="false" aria-controls="collapseP5-3">
                                                MODE D’EMPLOI :
                                            </button>
                                        </div>
                                        <div id="collapseP5-3" class="collapse" aria-labelledby="headingP5-3">
                                        <div class="card-body">
                                            <p class="text-size-16 text-left mb-0 p-0">5 Gouttes / 100ml d’eau de boisson, pendant 7 jours consécutifs. <br> Renouveler l’eau de boisson chaque 12 heures</p>
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
                    <div class="register_content" data-aos="fade-right">
                        <h2 class="">PULMO - 30ml</h2>
                        <h3>Complément alimentaire Antioxydant pulmonaire.</h3>
                        <p>Ce produit est un complément alimentaire favorisant les performances zootechniques en conditions environnementales défavorables. Il agit en soutenant le système immunitaire pour renforcer les défenses respiratoires, en protégeant la muqueuse des inflammations oxydatives, et en favorisant l'élimination des sécrétions.</p>
                        <div class="accordian-product" >
                            <div class="accordian-inner" data-aos="fade-up">
                                <div id="accordion2">
                                    <div class="accordion-card">
                                        <div class="card-header" id="headingP6-1">
                                            <i class="fa-solid fa-atom" style="color: #3d89bf;"></i>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseP6-1" aria-expanded="false" aria-controls="collapseP6-1">
                                                COMPOSITION:
                                            </button>
                                        </div>
                                        <div id="collapseP6-1" class="collapse" aria-labelledby="headingP6-1">
                                            <div class="card-body pb-2 my-0">
                                                <p class="text-size-16 text-left mb-0 p-0">
                                                    <ul class="py-0 my-0 px-0">
                                                        <li >
                                                            <p class="mb-0 pt-0">Chlorure de magnésium, Chlorure de sodium</p>
                                                        </li>
                                                        <li><p class="py-0 my-0">Eau</p></li>
                                                        <li>
                                                            <p class="py-0 my-0">Constituants analytiques : cendres brutes (&lt;1%), protéines brutes (&lt;1%),
                                                            matières grasses brutes (&lt;1%), cellulose brute (&lt;1%), méthionine (0%), lysine
                                                            (0%), calcium (&lt;5%), phosphore (&lt;2%), magnésium (&lt;0,5%), sodium (0,02%)
                                                            </p>
                                                        </li>
                                                    </ul>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card">
                                        <div class="card-header" id="headingP6-2">
                                            <i class="fa-solid fa-dove" style="color: #3d89bf;"></i>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseP6-2" aria-expanded="false" aria-controls="collapseP6-2">
                                                ESPECE DE DESTINATION :
                                            </button>
                                        </div>
                                        <div id="collapseP6-2" class="collapse" aria-labelledby="headingP6-2">
                                        <div class="card-body">
                                            <p class="text-size-16 text-left mb-0 p-0">Toutes les espèces oiseaux.</p>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card">
                                        <div class="card-header" id="headingP6-3">
                                        <i class="fa-regular fa-rectangle-list" style="color: #3d89bf;"></i>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseP6-3" aria-expanded="false" aria-controls="collapseP6-3">
                                                MODE D’EMPLOI :
                                            </button>
                                        </div>
                                        <div id="collapseP6-3" class="collapse" aria-labelledby="headingP6-3">
                                        <div class="card-body">
                                            <p class="text-size-16 text-left mb-0 p-0">5 Gouttes / 100ml d’eau de boisson, pendant 7 jours consécutifs. <br> Renouveler l’eau de boisson chaque 12 heures</p>
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