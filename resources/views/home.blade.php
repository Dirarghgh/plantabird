@extends('layouts.app')  
@section('content')   
<div class="banner-section-outer">
<!-- BANNER SECTION -->
    <section class="banner-section">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-5 col-md-12 col-sm-12 col-12 text-lg-left text-center">
                    <div class="banner-section-content">
                        <h1 data-aos="fade-up">We’re Here to Care <span></span> of Your Pet’s</h1>
                        <p data-aos="fade-right">Consequat nisl vel pretium lectus ruam iea leo in viverra cras pulvinar mattis hendrerit dolor magna eraeu esa malese seneca aeo neaus ameo consecaur.</p>
                        <div class="btn_wrapper" data-aos="fade-up">
                            <a class="text-decoration-none default-btn" href="./about.html">Read more</a>
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
                            <figure class="mb-0">
                                <img src="./assets/images/string.png" alt="" class="img-fluid hover-effect">
                            </figure>
                            <div class="box_content_wrapper">
                                <p class="box_heading text-size-16 mb-0">Vaccination</p>
                                <p class="content_line mb-0">Cats & Dog’s</p>
                            </div>
                        </div>
                        <div class="box pet_training_box position-absolute hover-effect">
                            <figure class="mb-0">
                                <img src="./assets/images/banner_pet_training_dog.png" alt="" class="img-fluid hover-effect">
                            </figure>
                            <div class="box_content_wrapper">
                                <p class="box_heading text-size-16 mb-0">Pet’s Training</p>
                                <p class="content_line mb-0">Cats & Dog’s</p>
                            </div>
                        </div>
                        <div class="box satisfied_client_box position-absolute hover-effect">
                            <div class="image_wrapper">
                                <figure class="satisfied_client1 mb-0">
                                    <img src="./assets/images/banner_satisfied_client1.png" alt="" class="img-fluid hover-effect">
                                </figure>
                                <figure class="satisfied_client2 mb-0">
                                    <img src="./assets/images/banner_satisfied_client2.png" alt="" class="img-fluid hover-effect">
                                </figure>
                                <figure class="satisfied_client3 mb-0">
                                    <img src="./assets/images/banner_satisfied_client3.png" alt="" class="img-fluid hover-effect">
                                </figure>
                            </div>
                            <div class="box_content_wrapper">
                                <p class="box_heading text-size-16 mb-0 counter">156</p>
                                <span>+</span>
                                <p class="content_line mb-0">Satisfied clients</p>
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
                    <h6>Our Store</h6>
                    <h2>Our Best Selling Products</h2>
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
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina cat chow defense plus</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">60</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
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
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina beneful perros</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">80</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/products/CLOSTRI.png"s="img-fluid">
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
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina pro plan urinary</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">90</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/products/CLOSTRI.png"s="img-fluid">
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
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina of the lata hills</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">120</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/products/CLOSTRI.png"s="img-fluid">
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
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina cat chow defense plus</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">60</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/products/CLOSTRI.png"s="img-fluid">
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
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina beneful perros</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">80</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <figure class="store_box_right_shape mb-0 position-absolute left_right_shape">
                            <img src="./assets/images/our_store_box_right_shape.png" alt="" class="img-fluid">
                        </figure>
                    </div>
                </div>
                <div id="treats" class="tab-pane fade">
                    <div class="row position-relative">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="store_box">
                                    <div class="store_image_box">
                                        <figure class="mb-0">
                                            <img src="./assets/images/our_store_image1.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina cat chow defense plus</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">60</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
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
                                            <img src="./assets/images/our_store_image2.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina beneful perros</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">80</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
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
                                            <img src="./assets/images/our_store_image1.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina cat chow defense plus</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">60</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
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
                                            <img src="./assets/images/our_store_image2.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina beneful perros</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">80</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
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
                                            <img src="./assets/images/our_store_image1.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina cat chow defense plus</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">60</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
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
                                            <img src="./assets/images/our_store_image2.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina beneful perros</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">80</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
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
                                            <img src="./assets/images/our_store_image1.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina cat chow defense plus</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">60</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
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
                                            <img src="./assets/images/our_store_image2.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina beneful perros</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">80</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
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
                                            <img src="./assets/images/our_store_image1.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina cat chow defense plus</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">60</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
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
                                            <img src="./assets/images/our_store_image2.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina beneful perros</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">80</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <figure class="store_box_right_shape mb-0 position-absolute left_right_shape">
                            <img src="./assets/images/our_store_box_right_shape.png" alt="" class="img-fluid">
                        </figure>
                    </div>
                </div>
                <div id="dog_food" class="tab-pane fade">
                    <div class="row position-relative">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="store_box">
                                    <div class="store_image_box">
                                        <figure class="mb-0">
                                            <img src="./assets/images/our_store_image3.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina pro plan urinary</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">90</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
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
                                            <img src="./assets/images/our_store_image4.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina of the lata hills</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">120</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
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
                                            <img src="./assets/images/our_store_image3.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina pro plan urinary</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">90</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
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
                                            <img src="./assets/images/our_store_image4.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina of the lata hills</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">120</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
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
                                            <img src="./assets/images/our_store_image3.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina pro plan urinary</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">90</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
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
                                            <img src="./assets/images/our_store_image4.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina of the lata hills</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">120</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
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
                                            <img src="./assets/images/our_store_image3.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina pro plan urinary</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">90</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
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
                                            <img src="./assets/images/our_store_image4.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina of the lata hills</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">120</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
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
                                            <img src="./assets/images/our_store_image3.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina pro plan urinary</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">90</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
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
                                            <img src="./assets/images/our_store_image4.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina of the lata hills</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">120</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <figure class="store_box_right_shape mb-0 position-absolute left_right_shape">
                            <img src="./assets/images/our_store_box_right_shape.png" alt="" class="img-fluid">
                        </figure>
                    </div>
                </div>
                <div id="deals" class="tab-pane fade">
                    <div class="row position-relative">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="store_box">
                                    <div class="store_image_box">
                                        <figure class="mb-0">
                                            <img src="./assets/images/our_store_image2.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina beneful perros</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">80</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
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
                                            <img src="./assets/images/our_store_image3.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina pro plan urinary</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">90</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
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
                                            <img src="./assets/images/our_store_image2.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina beneful perros</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">80</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
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
                                            <img src="./assets/images/our_store_image3.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina pro plan urinary</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">90</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
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
                                            <img src="./assets/images/our_store_image2.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina beneful perros</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">80</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
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
                                            <img src="./assets/images/our_store_image3.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina pro plan urinary</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">90</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
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
                                            <img src="./assets/images/our_store_image2.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina beneful perros</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">80</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
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
                                            <img src="./assets/images/our_store_image3.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina pro plan urinary</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">90</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
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
                                            <img src="./assets/images/our_store_image2.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina beneful perros</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">80</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
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
                                            <img src="./assets/images/our_store_image3.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina pro plan urinary</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">90</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <figure class="store_box_right_shape mb-0 position-absolute left_right_shape">
                            <img src="./assets/images/our_store_box_right_shape.png" alt="" class="img-fluid">
                        </figure>
                    </div>
                </div>
                <div id="puppy_food" class="tab-pane fade">
                    <div class="row position-relative">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="store_box">
                                    <div class="store_image_box">
                                        <figure class="mb-0">
                                            <img src="./assets/images/our_store_image1.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina cat chow defense plus</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">60</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
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
                                            <img src="./assets/images/our_store_image4.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina of the lata hills</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">120</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
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
                                            <img src="./assets/images/our_store_image1.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina cat chow defense plus</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">60</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
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
                                            <img src="./assets/images/our_store_image4.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina of the lata hills</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">120</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
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
                                            <img src="./assets/images/our_store_image1.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina cat chow defense plus</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">60</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
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
                                            <img src="./assets/images/our_store_image4.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina of the lata hills</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">120</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
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
                                            <img src="./assets/images/our_store_image1.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina cat chow defense plus</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">60</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
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
                                            <img src="./assets/images/our_store_image4.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina of the lata hills</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">120</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
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
                                            <img src="./assets/images/our_store_image1.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina cat chow defense plus</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">60</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
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
                                            <img src="./assets/images/our_store_image4.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Purina of the lata hills</h5>
                                                <p class="text-size-16">Adultos</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">$</span>
                                                <span class="counter">120</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="./assets/images/cart.png" alt="" class="img-fluid">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <figure class="store_box_right_shape mb-0 position-absolute left_right_shape">
                            <img src="./assets/images/our_store_box_right_shape.png" alt="" class="img-fluid">
                        </figure>
                    </div>
                </div>
            </div>
        </div> 
        <figure class="store_big_foot_shape mb-0 position-absolute top_bottom_shape">
            <img src="./assets/images/our_store_big_foot_shape.png" alt="" class="img-fluid">
        </figure>
        <figure class="store_small_foot_shape mb-0 position-absolute top_bottom_shape">
            <img src="./assets/images/our_store_small_foot_shape.png" alt="" class="img-fluid">
        </figure>
    </div>
</section>

<section class="about_section position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                <div class="about_images_wrapper position-relative">
                    <figure class="mb-0 about_main_image">
                        <img src="./assets/images/about_main_image.jpg" alt="" class="img-fluid">
                    </figure>
                    <figure class="mb-0 about_left_image position-absolute">
                        <img src="./assets/images/about_left_image.jpg" alt="" class="img-fluid">
                    </figure>
                    <div class="about_left_box_wrapper">
                        <figure class="mb-0">
                            <img src="./assets/images/about_left_box_image.png" alt="" class="img-fluid hover-effect">
                        </figure>
                        <div class="left_box_content">
                            <div class="span_wrapper">
                                <span class="counter">25</span>
                                <span class="plus">+</span>
                            </div>
                            <p class="text-size-18 mb-0">Years of Experience</p>
                        </div>
                    </div>
                    <figure class="mb-0 about_foot_shape position-absolute top_bottom_shape">
                        <img src="./assets/images/about_foot_shape.png" alt="" class="img-fluid">
                    </figure>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                <div class="about_content" data-aos="fade-right">
                    <h6>About Us</h6>
                    <h2>We are The Best For Your Pet Care</h2>
                    <p class="text-size-18 about_first_p">Em ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua nulla. </p>
                    <p class="text-size-18">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliuie commodo.</p>
                    <div class="btn_wrapper">
                        <a class="text-decoration-none default-btn" href="./about.html">Read more</a>
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
            <img src="./assets/images/about_right_shape.png" alt="" class="img-fluid">
        </figure>
    </div>
</section>

<!-- OUR MISSION SECTION -->
<section class="mission_section position-relative" id="video_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="mission_content">
                    <h6>Our Mission</h6>
                    <h2>We Love Pets and Care For Them</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="mission_box_wrapper" data-aos="fade-right">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-6 col-12">
                            <div class="mission_box">
                                <figure>
                                    <img src="./assets/images/mission_box_image1.png" alt="" class="img-fluid hover-effect">
                                </figure>
                                <h3>Maintain a Daily Routine</h3>
                                <p class="text-size-18">Qorem ipsum dolor sit amet coe aur adipiscing elit elit tellus sed massa lectus.</p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-6 col-12">
                            <div class="mission_box">
                                <figure>
                                    <img src="./assets/images/mission_box_image2.png" alt="" class="img-fluid hover-effect">
                                </figure>
                                <h3>Gives Pets 1-to-1 Attention</h3>
                                <p class="text-size-18">Sorem ipsum dolor sit amet coe aur adipiscing elit elit tellus sed massa lectus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="mission_center_portion position-relative" data-aos="fade-up">
                    <figure class="mission_center_image mb-0">
                        <img src="./assets/images/mission_center_image.jpg" alt="" class="img-fluid">
                    </figure>
                    <div class="mission_video_icon">
                        <a class="popup-vimeo" href="https://previews.customer.envatousercontent.com/852b951f-6d7a-4672-8f40-4f777205c293/watermarked_preview/watermarked_preview.mp4">
                            <figure class="video_img mb-0">
                                <img class="thumb img-fluid" style="cursor: pointer" src="./assets/images/mission_video_icon.png" alt="">
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="mission_box_wrapper" data-aos="fade-right">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-6 col-12">
                            <div class="mission_box">
                                <figure>
                                    <img src="./assets/images/mission_box_image3.png" alt="" class="img-fluid hover-effect">
                                </figure>
                                <h3>Keep Your Pets & Home Safe</h3>
                                <p class="text-size-18">Rorem ipsum dolor sit amet coe aur adipiscing elit elit tellus sed massa lectus.</p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-6 col-12">
                            <div class="mission_box">
                                <figure>
                                    <img src="./assets/images/mission_box_image4.png" alt="" class="img-fluid hover-effect">
                                </figure>
                                <h3>Succeed The Mental Formation</h3>
                                <p class="text-size-18">Dorem ipsum dolor sit amet coe aur adipiscing elit elit tellus sed massa lectus.</p>
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
            <img src="./assets/images/mission_right_shape.png" alt="" class="img-fluid">
        </figure>
    </div>
</section>

<div class="accordian-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="faq_content" data-aos="fade-right">
                    <h6>Asked Questions</h6>
                    <h2>We are Ready For Your Any Questions</h2>
                    <p class="text-size-18">Em ipsum dolor sit amet, consectetur adipiscing elit sed do tempor incididunt ut labore et dolore magna aliqua nulla. </p>
                    <p class="text-size-18 second_p">Ut enim ad minim veniam, quis nostrud exercitation ullamco nisi ut aliuie commodo.</p>
                    <div class="btn_wrapper">
                        <a class="text-decoration-none default-btn" href="./contact.html">Contact Us</a>
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
                                        Quisquam est rui dolorem ipsum euia?
                                    </button>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour">
                                <div class="card-body">
                                    <p class="text-size-16 text-left mb-0 p-0">Quisquam est, qui dolorem ipsum quia dolor sit amet cone aetur
                                        adipisci velit, sed quia non numquam eius modi temor incidunt aut labore et dolore magnam.</p>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="card-header" id="headingFive">
                                    <i class="fa-solid fa-question"></i>
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Autem vel eum iure reprehenderit nulla?
                                    </button>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive">
                                <div class="card-body">
                                    <p class="text-size-16 text-left mb-0 p-0">Quisquam est, qui dolorem ipsum quia dolor sit amet cone aetur
                                        adipisci velit, sed quia non numquam eius modi temor incidunt aut labore et dolore magnam.</p>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="card-header" id="headingSix">
                                    <i class="fa-solid fa-question"></i>
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Dolorem eum fugiat ruo voluetas esse?
                                    </button>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix">
                                <div class="card-body">
                                    <p class="text-size-16 text-left mb-0 p-0">Quisquam est, qui dolorem ipsum quia dolor sit amet cone aetur
                                        adipisci velit, sed quia non numquam eius modi temor incidunt aut labore et dolore magnam.</p>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="card-header" id="headingTwo">
                                    <i class="fa-solid fa-question"></i>
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Eirure dolor in reprehenderit in voluate?
                                    </button>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                                <div class="card-body">
                                    <p class="text-size-16 text-left mb-0 p-0">Quisquam est, qui dolorem ipsum quia dolor sit amet cone aetur
                                        adipisci velit, sed quia non numquam eius modi temor incidunt aut labore et dolore magnam.</p>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="card-header" id="headingTen">
                                    <i class="fa-solid fa-question"></i>
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                        Nostrum exercitationem ullam corporis?
                                    </button>
                                </div>
                                <div id="collapseTen" class="collapse" aria-labelledby="headingTen">
                                <div class="card-body">
                                    <p class="text-size-16 text-left mb-0 p-0">Quisquam est, qui dolorem ipsum quia dolor sit amet cone aetur
                                        adipisci velit, sed quia non numquam eius modi temor incidunt aut labore et dolore magnam.</p>
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
            <img src="./assets/images/faq_right_shape.png" alt="" class="img-fluid">
        </figure>
    </div>
</div>

<!-- OUR TEAM SECTION -->
<section class="team_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="team_content">
                    <h6>Our Team</h6>
                    <h2>Meet The Expert Team</h2>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-up">
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="team_box">
                    <figure><img src="./assets/images/point_de_vente.jpg" alt="" class="img-fluid"></figure>
                    <h3>Benjamin Shah</h3>
                    <p class="text-size-18">Pet Specialist</p>
                    <div class="team_social_icons">
                        <a href="#" class="text-decoration-none">
                            <i class="fa-brands fa-facebook-f hover-effect" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <i class="fa-brands fa-twitter hover-effect" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <i class="fa-brands fa-instagram hover-effect mr-0" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="team_box">
                    <figure><img src="./assets/images/point_de_vente.jpg" alt="" class="img-fluid"></figure>
                    <h3>Helene Paquet</h3>
                    <p class="text-size-18">Parasitology Specialist</p>
                    <div class="team_social_icons">
                        <a href="#" class="text-decoration-none">
                            <i class="fa-brands fa-facebook-f hover-effect" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <i class="fa-brands fa-twitter hover-effect" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <i class="fa-brands fa-instagram hover-effect mr-0" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="team_box">
                    <figure><img src="./assets/images/point_de_vente.jpg" alt="" class="img-fluid"></figure>
                    <h3>Itsuki Takahashi</h3>
                    <p class="text-size-18">Veterinary Surgeon</p>
                    <div class="team_social_icons">
                        <a href="#" class="text-decoration-none">
                            <i class="fa-brands fa-facebook-f hover-effect" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <i class="fa-brands fa-twitter hover-effect" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <i class="fa-brands fa-instagram hover-effect mr-0" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 @endsection 