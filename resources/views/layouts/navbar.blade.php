<div class="banner-section-outer">
    <header>
        <div class="main_header">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <a class="navbar-brand" href="/">
                        <figure class="">
                            <img src="./assets/images/favicon/logo_t.png" alt="" class="img-fluid">
                        </figure>
                    </a>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item {{ request()->path() === '/' ? 'active ' : '' }}">
                                <a class="nav-link" href="/">Accuil</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle dropdown-color navbar-text-color {{ request()->path() === 'products' ? 'active ' : '' }}" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"> Produits </a>
                                <div class="dropdown-menu drop-down-content">
                                    <ul class="list-unstyled drop-down-pages">
                                        <li class="nav-item {{ request()->path() === 'products#CLOSTRI' ? 'active ' : '' }}">
                                            <a class="dropdown-item nav-link" href="products#CLOSTRI">CLOSTRI</a>
                                        </li>
                                        <li class="nav-item {{ request()->path() === 'products#COLIBA' ? 'active ' : '' }}">
                                            <a class="dropdown-item nav-link" href="products#COLIBA">COLIBA</a>
                                        </li>
                                        <li class="nav-item {{ request()->path() === 'products#COXI' ? 'active ' : '' }}">
                                            <a class="dropdown-item nav-link" href="products#COXI">COXI</a>
                                        </li>
                                        <li class="nav-item {{ request()->path() === 'products#HEPA' ? 'active ' : '' }}">
                                            <a class="dropdown-item nav-link" href="products#HEPA">HEPA</a>
                                        </li>
                                        <li class="nav-item {{ request()->path() === 'products#TRICHOM' ? 'active ' : '' }}">
                                            <a class="dropdown-item nav-link" href="products#TRICHOM">TRICHOM</a>
                                        </li>
                                        <li class="nav-item   {{ request()->path() === 'products#PULMO' ? 'active ' : '' }}">
                                            <a class="dropdown-item  nav-link  pl-2" href="products#PULMO">PULMO</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item {{ request()->path() === 'about' ? 'active ' : '' }}">
                                <a class="nav-link" href="/about">À Propos</a>
                            </li>
                            <li class="nav-item {{ request()->path() === 'faq' ? 'active ' : '' }}">
                                <a class="nav-link" href="/#faq">FAQ</a>
                            </li>
                            <li class="nav-item {{ request()->path() === 'pdv' ? 'active ' : '' }}">
                                <a class="nav-link" href="/pdv">Points de vente</a>
                            </li>
                                <div class="switch">
                                    <input id="language-toggle" class="check-toggle check-toggle-round-flat" type="checkbox">
                                    <label for="language-toggle"></label>
                                    <span class="on">fr</span>
                                    <span class="off">عر</span>
                                </div>
                            <li class="nav-item">
                                <a class="nav-link default-btn contact_us" href="/contact">Contacts</a>
                            </li>
                        </ul>
                        <div class="outer_div">
                            <figure class="mb-0">
                                <img src="./assets/images/navbar_call_image.png" alt="" class="img-fluid hover-effect">
                            </figure>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
</div>
<!-- 8cc63f -->