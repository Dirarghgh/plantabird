<div class="banner-section-outer">
    <header>
        <div class="main_header" >
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
                        <ul class="navbar-nav " >
                            <li class="nav-item {{ request()->path() === '/' ? 'active ' : '' }}">
                                <a class="nav-link" href="/">@lang('messages.Accueil')</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle dropdown-color navbar-text-color {{ request()->path() === 'products' ? 'active ' : '' }}" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">@lang('messages.produits')</a>
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
                                <a class="nav-link" href="/about">@lang('messages.apropos')</a>
                            </li>
                            <li class="nav-item {{ request()->path() === 'faq' ? 'active ' : '' }}">
                                <a class="nav-link" href="/faq">@lang('messages.faq')</a>
                            </li>
                            <li class="nav-item {{ request()->path() === 'pdv' ? 'active ' : '' }}">
                                <a class="nav-link" href="/pdv">@lang('messages.pdv')</a>
                            </li>
                            <li>
                                <div class="dropdown">
                                    <button class="btn lang_btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" @if(app()->getLocale() === 'ar') dir="rtl" @endif>
                                        {{ strtoupper(app()->getLocale()) }}
                                    </button>
                                    <div class="dropdown-menu mt-4" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="locale/fr"><img src="./assets/images/france.png" alt=""> Français </a>
                                        <a class="dropdown-item" href="locale/ar"><img src="./assets/images/algerie.png" alt=""> العربية</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link default-btn contact_us" href="/contact">@lang('messages.contacts')</a>
                            </li>
                        </ul>
                        <div class="outer_div_footer">
                            <a href="tel:+213770076167">
                                <i class="fa-solid fa-phone fa-2x"></i>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    @yield('hero')
</div>
<!-- 8cc63f -->