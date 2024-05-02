@extends('layouts.app')  
@section('hero')
<div class="sub-banner-section-outer contact-banner-section-outer">
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-12 col-sm-12 col-12 d-lg-block d-none"></div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12 text-center">
                    <div class="banner-section-content">
                        <h1 data-aos="fade-up">FAQ</h1>
                        <p data-aos="fade-right">"Cette section FAQ vise à répondre à vos questions les plus fréquentes."</p>
                        <div class="btn_wrapper" data-aos="fade-up">
                            <span>Platntabird </span><span class="slash">/</span><span class="sub_span"> FAQ</span>
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
@endsection
@section('content')

<div id="faq" class="accordian-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="faq_content" data-aos="fade-right">
                    <h6>FAQ</h6>
                    <h2>Nous sommes prêts à répondre à vos questions</h2>
                    <p class="text-size-18">&nbsp; &nbsp; &nbsp; Nous comprenons l'importance de maintenir la santé et le bien-être de vos précieux compagnons à plumes. Cette section FAQ vise à répondre à vos questions les plus fréquentes concernant les médicaments pour oiseaux, afin de vous aider à prendre soin de vos amis à plumes de la meilleure façon possible. </p>
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
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="position-relative">
                    <div class="accordian-inner" data-aos="fade-up">
                        <div id="accordion2">
                            <div class="accordion-card">
                                <div class="card-header" id="headingNine">
                                    <i class="fa-solid fa-question"></i>
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    Est-ce que vous vendez des médicaments sans ordonnance?
                                    </button>
                                </div>
                                <div id="collapseNine" class="collapse" aria-labelledby="headingNine">
                                <div class="card-body">
                                    <p class="text-size-16 text-left mb-0 p-0">Nous ne vendons que des médicaments approuvés par des vétérinaires et pouvons fournir des recommandations basées sur les symptômes de votre oiseau. Cependant, nous recommandons toujours une consultation vétérinaire pour un traitement approprié.</p>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="card-header" id="headingTen">
                                    <i class="fa-solid fa-question"></i>
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                        Comment puis-je savoir si mon oiseau est malade?
                                    </button>
                                </div>
                                <div id="collapseTen" class="collapse" aria-labelledby="headingTen">
                                    <div class="card-body">
                                        <p class="text-size-16 text-left mb-0 p-0">Les signes courants de maladie chez les oiseaux incluent des changements dans le comportement, une perte d'appétit, des écoulements nasaux, ou un plumage ébouriffé. Si vous observez l'un de ces signes, consultez un vétérinaire aviaire pour un diagnostic précis.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="card-header" id="headingEleven">
                                    <i class="fa-solid fa-question"></i>
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                        Est-ce que vous vendez des jouets pour les oiseaux?
                                    </button>
                                </div>
                                <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven">
                                <div class="card-body">
                                    <p class="text-size-16 text-left mb-0 p-0">Non, Notre magasin est actuellement spécialisé dans la vente de compléments nutritionnels pour oiseaux.</p>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="card-header" id="headingTwelve">
                                    <i class="fa-solid fa-question"></i>
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                    Quels types de cages recommandez-vous pour les oiseaux?
                                    </button>
                                </div>
                                <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve">
                                <div class="card-body">
                                    <p class="text-size-16 text-left mb-0 p-0">Nous recommandons des cages spacieuses et sécurisées qui offrent suffisamment d'espace pour que l'oiseau puisse se déplacer librement et étendre ses ailes. Assurez-vous que la cage est fabriquée à partir de matériaux sûrs et non toxiques pour la santé de votre oiseau.</p>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="position-relative">
                    <div class="accordian-inner" data-aos="fade-up">
                        <div id="accordion3">
                            <div class="accordion-card">
                                <div class="card-header" id="headingFive">
                                    <i class="fa-solid fa-question"></i>
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Quelle est votre politique de retour?
                                    </button>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive">
                                <div class="card-body">
                                    <p class="text-size-16 text-left mb-0 p-0">Nous acceptons les retours dans les 7 jours suivant l'achat, sous réserve que les produits soient dans leur emballage d'origine et dans un état neuf. Veuillez consulter notre politique de retour complète pour plus de détails.</p>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="card-header" id="headingSix">
                                    <i class="fa-solid fa-question"></i>
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Offrez-vous des conseils sur l'alimentation des oiseaux?
                                    </button>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix">
                                <div class="card-body">
                                    <p class="text-size-16 text-left mb-0 p-0">Oui, notre équipe est formée pour fournir des conseils d'experts sur l'alimentation équilibrée et nutritive pour les oiseaux. N'hésitez pas à nous contacter pour des recommandations personnalisées pour votre ami à plumes.</p>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="card-header" id="headingSeven">
                                    <i class="fa-solid fa-question"></i>
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Est-ce que vos médicaments conviennent à toutes les espèces d'oiseaux ?
                                    </button>
                                </div>
                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven">
                                <div class="card-body">
                                    <p class="text-size-16 text-left mb-0 p-0">Oui, nos médicaments sont formulés pour convenir à une variété d'espèces d'oiseaux, y compris les perroquets, les perruches, les canaris, et plus encore. Cependant, il est toujours recommandé de consulter un vétérinaire aviaire pour un diagnostic précis et des recommandations spécifiques à votre oiseau.</p>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="card-header" id="headingEight">
                                    <i class="fa-solid fa-question"></i>
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    Est-ce que vous vendez des oiseaux ou facilitez-vous leur adoption ?
                                    </button>
                                </div>
                                <div id="collapseEight" class="collapse" aria-labelledby="headingEight">
                                    <div class="card-body">
                                        <p class="text-size-16 text-left mb-0 p-0">Non, nous ne vendons pas d'oiseaux. Notre boutique se spécialise dans la vente de produits et de médicaments pour les oiseaux, ainsi que dans la fourniture de conseils et d'assistance pour leur bien-être.</p>
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

@endsection