 <!-- header-start -->
        <header class="header-shape">
            <div class="header-top-area black-bg d-none d-xl-block">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 offset-xl-1 col-lg-3 offset-lg-3">
                            <div class="header2-top-wrapper">
                                <div class="header-top-info">
                                    <span class="mail-header-icon"><i class="far fa-phone"></i> {{ config('global.site_phone') }}</span>
                                    <span><i class="far fa-envelope-open"></i> {{ config('global.site_email') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="header-right-wrapper ml-150">
                                <div class="header-icon f-right">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                </div>
                                <div class="header-lang header-02-lang f-right pos-rel">
                                    <div class="lang-icon">
                                        <img src="{{ asset('frontend/img/icon/flag-2.png') }}" alt="">
                                        <a href="#">English <i class="far fa-angle-down"></i></a>
                                    </div>
                                    <ul class="header-lang-list">
                                        <li><a href="#">USA</a></li>
                                        <li><a href="#">UK</a></li>
                                        <li><a href="#">CA</a></li>
                                        <li><a href="#">AU</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-menu-area menu-2 grey-soft-bg">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="header-left mr-40">
                                <div class="logo logo-shape">
                                    <a href="/"><img src="{{ asset('frontend/img/logo/logo-white.png') }}" alt="" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">
                            <div class="header-right header-2-search f-right d-none d-lg-block">
                                <div class="main-menu main-menu-2">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="active"><a href="/">Home </a></li>
                                        <li><a href="about-us">About Us</a></li>
                                        <li><a href="services">Services</a>
                                            <ul class="sub-menu text-left">
                                                <li><a href="air-freight">Air Freight</a>
                                                <li><a href="sea-freight">Sea Freight</a>
                                                <li><a href="land-freight">Land Freight</a>
                                                <li><a href="warehousing">Ware Housing</a>
                                            </ul>
                                        </li>
                                       
                                        <li><a href="career">Career </a></li>
                                        
                                        <li><a href="contact-us">Contact</a></li>
                                        <div class="d-lg-none d-xl-none">
                                            <li><a href="track-order">Track Order</a></li>
                                        </div>
                                    </ul>                                   
                                </nav>
                            </div>
                            </div>
                            
                        </div>
                        <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                            <div class="header-button header-2-button">
                                <a class="btn white-btn" href="track-order">Track Orders <i class="far fa-paper-plane"></i></a> 
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
       
        </header>
        <!-- header-start -->