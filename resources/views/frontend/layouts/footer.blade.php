<!-- footer-area-start -->
<footer>
    <div class="footer-top-area black-bg pt-80 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="footer-logo mb-30">
                        <a href="/"><img src="{{ asset('frontend/img/logo/white-logo.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="header-top-wrapper mb-30">
                        <div class="header-address-icon">
                            <i class="fal fa-bells"></i>
                        </div>
                        <div class="header-address-text">
                            <h4>Want To Work With Us?</h4>
                            <div class="b-button b-02-button">
                                <a href="/about-us">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="header-top-wrapper mb-30">
                        <div class="header-address-icon">
                            <i class="fal fa-files-medical"></i>
                        </div>
                        <div class="header-address-text">
                            <h4>Make An Appointment</h4>
                            <div class="b-button b-02-button">
                                <a href="/quote">Request a quote</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="header-top-wrapper">
                        <div class="header-address-icon">
                            <i class="fal fa-headset"></i>
                        </div>
                        <div class="header-address-text">
                            <h4>Need Any Help ?</h4>
                            <div class="b-button b-02-button">
                                <a href="/contact-us">contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-middle-area mt-50 pt-60">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-wrapper mb-30">
                            <h3 class="footer-title">Company</h3>
                            <div class="footer-link">
                                <ul>
                                    <li><a href="/about-us">About Company</a></li>
                                    <li><a href="/services">Our Services</a></li>
                                    <li><a href="/career">Career</a></li>
                                    <li><a href="/about-us">Success Story</a></li>
                                </ul>
                            </div>
                        <div></div></div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-wrapper mb-30">
                            <h3 class="footer-title">Quick Links</h3>
                            <div class="footer-link">
                                <ul>
                                    <li><a href="/air-freight">Air Freight</a></li>
                                    <li><a href="/land-freight">Land Freight</a></li>
                                    
                                    <li><a href="/sea-freight">Sea Freight</a></li>
                                    <li><a href="/warehousing">Ware Housing</a></li>
                                </ul>
                             </div>
                         </div>
                     </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-wrapper mb-30">
                            <h3 class="footer-title">Contact Us</h3>
                            <ul class="contact-link">
                                <li>
                                    <div class="contact-address-icon">
                                        <i class="far fa-phone"></i>
                                    </div>
                                    <div class="contact-address-text">
                                        <span>{{ config('global.site_phone') }}</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-address-icon">
                                        <i class="far fa-envelope-open"></i>
                                    </div>
                                    <div class="contact-address-text">
                                        <span>{{ config('global.site_email') }}</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-address-icon">
                                        <i class="far fa-map-marker-alt"></i>
                                    </div>
                                    <div class="contact-address-text">
                                        <span>North Avenue, <br> Chicago, IL, 55030</span>
                                    </div>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-wrapper mb-30">
                            <h3 class="footer-title">About Us</h3>
                            <div class="footer-text">
                                <p>
                                    {{ config('global.site_name') }} has years of experience in the logistics field, which enabled us to build a private fleet of carriers servicing the transport of freight across the nation and around the globe.
                                </p>
                            </div>
                            <div class="footer-icon">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
    </div>
    <div class="footer-bottom-area black-soft-bg pt-25 pb-25">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="copyright text-center">
                        <p>Copyright <i class="far fa-copyright"></i> {{ date('Y') }} <a href="#">{{ config('global.site_name') }}</a>. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-area-end -->

<!-- Modal Search -->
<div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form>
                <input type="text" placeholder="Search here...">
                <button>
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
    </div>
</div>




        <!-- JS here -->
        <script src="{{ asset('frontend/js/vendor/modernizr-3.5.0.min.js') }}"></script>
        <script src="{{ asset('frontend/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('frontend/js/slick.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.meanmenu.min.js') }}"></script>
        <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
        <script src="{{ asset('frontend/js/waypoints.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.appear.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.knob.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.scrollUp.min.js') }}"></script>
        <script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('frontend/js/plugins.js') }}"></script>
        <script src="{{ asset('frontend/js/main.js') }}"></script>

    </body>
</html>