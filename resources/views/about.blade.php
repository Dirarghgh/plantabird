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
                        <h1 data-aos="fade-up">À Propos de nous</h1>
                        <p data-aos="fade-right">"Nous sommes passionnés par les oiseaux et nous nous engageons à fournir les meilleurs produits et conseils pour le bien-être de vos compagnons à plumes."</p>
                        <div class="btn_wrapper" data-aos="fade-up">
                            <span>Platntabird </span><span class="slash">/</span><span class="sub_span"> À Propos</span>
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

@include('sections.aboutSection' , ['button' => false])

<!-- CHOOSE US SECTION -->
@include('sections.offreSection', ['button' => false] )

<!-- TESTIMONIALS SECTION -->
@include('sections.testimonialsSection' )

@endsection