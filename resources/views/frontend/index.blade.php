@include('frontend.layouts.header')
@include('frontend.layouts.nav-home')
@include('frontend.layouts.slider')

<!-- features-area-start -->
    <div class="features-area features-03-padding grey-bg pt-30 pl-55 pr-55">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="features-03-wrapper mb-30">
                        <div class="features-03-img pos-rel">
                           <img src="{{ asset('frontend/img/features/01.jpg') }}" alt="">
                           <div class="features-03-text">
                               <div class="features-03-icon-img">
                                    <img src="{{ asset('frontend/img/icon/01.png') }}" alt="">
                               </div>
                                <h3>We Provide the<br> Best Land Freight </h3>
                                <h2>01</h2>
                            </div>
                            <div class="b-button services-b-btton">
                                <a href="land-freight">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="features-03-wrapper mb-30">
                        <div class="features-03-img pos-rel">
                           <img src="{{ asset('frontend/img/features/02.jpg') }}" alt="">
                           <div class="features-03-text">
                               <div class="features-03-icon-img">
                                    <img src="{{ asset('frontend/img/icon/02.png') }}" alt="">
                               </div>
                                <h3>We  Provide the<br>Best Sea Freight</h3>
                                <h2>02</h2>
                            </div>
                            <div class="b-button services-b-btton">
                                <a href="sea-freight">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="features-03-wrapper mb-30">
                        <div class="features-03-img pos-rel">
                           <img src="{{ asset('frontend/img/features/03.jpg') }}" alt="">
                           <div class="features-03-text">
                               <div class="features-03-icon-img">
                                    <img src="{{ asset('frontend/img/icon/03.png') }}" alt="">
                               </div>
                                <h3>We Provide the <br>Best Air Freight</h3>
                                <h2>03</h2>
                            </div>
                            <div class="b-button services-b-btton">
                                <a href="air-freight">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="features-03-wrapper mb-30">
                        <div class="features-03-img pos-rel">
                           <img src="{{ asset('frontend/img/features/04.jpg') }}" alt="">
                           <div class="features-03-text">
                               <div class="features-03-icon-img">
                                    <img src="{{ asset('frontend/img/icon/04.png') }}" alt="">
                               </div>
                                <h3>We Provide Much <br> More Services</h3>
                                <h2>04</h2>
                            </div>
                            <div class="b-button services-b-btton">
                                <a href="warehousing">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- features-area-end -->

    <!-- about-us-area-start -->
    <div class="about-us-area pt-130 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="about-img mb-30">
                        <img src="{{ asset('frontend/img/home/ocean-tile-01.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about-wrapper mb-30">
                        <div class="section-title pos-rel mb-35">
                            <h1>01</h1>
                            <span class="line">About Us</span>
                            <h2>Modern & Trusted Logistics Company</h2>
                        </div>
                        <div class="about-us-text pos-rel">
                            <p>
                                {{ config('global.site_name') }} has years of experience in the logistics field, which enabled us to build a private fleet of carriers servicing the transport of freight across the nation and around the globe.
                            </p>
                            <p>
                                {{ config('global.site_name') }} offers flexible options for every shipping need. From a single shipment to managing shipping for your entire supply chain, when we take charge of your shipping needs, our focus is on closely monitoring your shipments from pickup to delivery.
                            </p>
                        </div>
                        
                        <div class="about-name">
                            <div class="about-say-img">
                                <img src="{{ asset('frontend/img/about/02.png') }}" alt="">
                            </div>
                            <div class="about-say-content">
                                <h4>Richard S. Hobbs</h4>
                                <span>Ceo & founder</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about-us-area-end -->

    <!-- services-area-start -->
    <div class="services-area pt-125 pb-220" style="background-image:url({{ asset('frontend/img/bg/bg-07.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
                    <div class="section-title section-2 text-center pos-rel mr-60 ml-60 mb-75">
                        <h1>02</h1>
                        <span class="border-left-1"></span>
                        <span>Our Services</span>
                        <span class="border-right-1"></span>
                        <h2>What We Offer To Highest Quality Services</h2>
                    </div>
                </div> 
            </div>
            <div class="row services-02-active arrow-style">
                <div class="col-xl-12">
                    <div class="services-02-wrapper">
                        <div class="services-02-icon">
                            <img src="{{ asset('frontend/img/icon/s-01.png') }}" alt="">
                        </div>
                        <div class="services-02-text">
                            <h3>Land Freight</h3>
                            <p>
                                {{ config('global.site_name') }} ground transportation specializes in performing value-added, white glove, and time definite services to ensure ultimate satisfaction for your customers.
                            </p>
                            <div class="b-button black-b-button">
                                <a href="/land-freight">Read More</a>
                             </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="services-02-wrapper">
                        <div class="services-02-icon">
                            <img src="{{ asset('frontend/img/icon/s-02.png') }}" alt="">
                        </div>
                        <div class="services-02-text">
                            <h3>Sea Freight</h3>
                            <p>
                                Our approach starts with having the most experienced and dedicated ocean management team, positioned globally to provide skilled and local expertise in all major trade lanes
                            </p>
                            <div class="b-button black-b-button">
                                <a href="sea-freight">Read More</a>
                             </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="services-02-wrapper">
                        <div class="services-02-icon">
                            <img src="{{ asset('frontend/img/icon/s-03.png') }}" alt="">
                        </div>
                        <div class="services-02-text">
                            <h3>Air Freight</h3>
                            <p>
                                Our experts focus on delivering predictable and consistent airfreight solutions while providing proactive communication throughout the entire process.
                            </p>
                            <div class="b-button black-b-button">
                                <a href="air-freight">Read More</a>
                             </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="services-02-wrapper">
                        <div class="services-02-icon">
                            <img src="{{ asset('frontend/img/icon/s-04.png') }}" alt="">
                        </div>
                        <div class="services-02-text">
                            <h3>Ware Housing</h3>
                            <p>
                                {{ config('global.site_name') }} facilities combine function with labor and space synergy to drive down costs and move products through your supply chain, on time and accurately.
                            </p>
                            <div class="b-button black-b-button">
                                <a href="warehousing">Read More</a>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- services-area-end -->

     <!-- our-skills-area-start -->
    <div class="our-skills-area pt-125 pb-85" style="background-image:url({{ asset('frontend/img/bg/bg-09.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="single-our-skills mb-30">
                        <div class="section-title white-title pos-rel mb-35">
                            <h1>03</h1>
                            <span class="line line-white">{{ config('global.site_name') }}</span>
                            <h2>OUR MISSION</h2>
                        </div>
                        <div class="our-skills-text">
                            <p>
                                Our mission is to provide the highest quality freight services with extra TLC to our customers. We take pride in our custom database of vetted and certified reputable carriers sourced from experienced carriers.
                            </p>
                            <p>
                                Our private fleet of carriers enables us to provide our customers with the resources to deliver freight to where and when you need it, safely, efficiently, and cost-effectively. We make every effort to find our customers the best price possible for every shipment, big or small.
                            </p>
                            <a class="btn white-btn" href="contact.html">make appointment <i class="far fa-paper-plane"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="progress-skills text-center mb-45">
                                <div class="progress-circular">
                                    <input type="text" class="knob" value="0" data-rel="95" data-linecap="round"
                                       data-width="200" data-height="200" data-bgcolor="#ff7c40" data-fgcolor="#fff" data-thickness=".15" data-readonly="true" disabled/>
                                  </div>
                                  <div class="our-skills-content">
                                      <h3>Sea Freight</h3>
                                  </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="progress-skills text-center mb-45">
                                <div class="progress-circular">
                                    <input type="text" class="knob" value="0" data-rel="90" data-linecap="round"
                                       data-width="200" data-height="200" data-bgcolor="#ff7c40" data-fgcolor="#fff" data-thickness=".15" data-readonly="true" disabled/>
                                  </div>
                                  <div class="our-skills-content">
                                      <h3>Land Freight</h3>
                                  </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="progress-skills text-center mb-45">
                                <div class="progress-circular">
                                    <input type="text" class="knob" value="0" data-rel="94" data-linecap="round"
                                       data-width="200" data-height="200" data-bgcolor="#ff7c40" data-fgcolor="#fff" data-thickness=".15" data-readonly="true" disabled/>
                                  </div>
                                  <div class="our-skills-content">
                                      <h3>Air Freight</h3>
                                  </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="progress-skills text-center mb-45">
                                <div class="progress-circular">
                                    <input type="text" class="knob" value="0" data-rel="95" data-linecap="round"
                                       data-width="200" data-height="200" data-bgcolor="#ff7c40" data-fgcolor="#fff" data-thickness=".15" data-readonly="true" disabled/>
                                  </div>
                                  <div class="our-skills-content">
                                      <h3>Ware Housing</h3>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our-skills-area-end -->
   

   
    <!-- counter-area-start -->
    <div class="counter-area pt-130 pb-100" style="background-image:url({{ asset('frontend/img/bg/bg-04.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
                    <div class="section-title white-02-title section-2 text-center pos-rel mb-80">
                        <h1>04</h1>
                        <span class="border-left-1 border-left-theme"></span>
                        <span>Company Statistics</span>
                        <span class="border-right-1 border-right-theme"></span>
                        <h2>We Are Professional Logistics &  Transportations Agency</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-xl-2 col-lg-3 col-md-6">
                    <div class="counter-wrapper mb-30">
                        <div class="counter-icon">
                            <i class="flaticon-delivery"></i>
                        </div>
                        <div class="counter-text">
                            <h1>1512 <span>+</span></h1>
                            <span>Product Delivery</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar wow slideInLeft" role="progressbar" style="width: 70%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-wow-duration="1s" data-wow-delay=".5s">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6">
                    <div class="counter-wrapper mb-30">
                        <div class="counter-icon">
                            <i class="flaticon-box-1"></i>
                        </div>
                        <div class="counter-text">
                            <h1>653 <span>+</span></h1>
                            <span>World Wide Branch</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar wow slideInLeft" role="progressbar" style="width: 70%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-wow-duration="1s" data-wow-delay=".5s">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6">
                    <div class="counter-wrapper mb-30">
                        <div class="counter-icon">
                            <i class="flaticon-mail"></i>
                        </div>
                        <div class="counter-text">
                            <h1>632 <span>+</span></h1>
                            <span>Modern Transport</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar wow slideInLeft" role="progressbar" style="width: 70%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-wow-duration="1s" data-wow-delay=".5s">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6">
                    <div class="counter-wrapper mb-30">
                        <div class="counter-icon">
                            <i class="flaticon-box-2"></i>
                        </div>
                        <div class="counter-text">
                            <h1>715 <span>+</span></h1>
                            <span>Awards Winning</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar wow slideInLeft" role="progressbar" style="width: 70%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-wow-duration="1s" data-wow-delay=".5s">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter-area-end -->

  

    <!-- brand-area-start -->
    <div class="brand-02-area grey-bg pb-65 pt-65">
        <div class="container">
            <div class="row brand-active">
                <div class="col-xl-12">
                    <div class="brand-img text-center">
                        <img src="{{ asset('frontend/img/brand/01.png') }}" alt="" />
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="brand-img text-center">
                        <img src="{{ asset('frontend/img/brand/02.png') }}" alt="" />
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="brand-img text-center">
                            <img src="{{ asset('frontend/img/brand/03.png') }}" alt="" />
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="brand-img text-center">
                            <img src="{{ asset('frontend/img/brand/04.png') }}" alt="" />
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="brand-img text-center">
                        <img src="{{ asset('frontend/img/brand/05.png') }}" alt="" />
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="brand-img text-center">
                        <img src="{{ asset('frontend/img/brand/06.png') }}" alt="" />
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="brand-img text-center">
                        <img src="{{ asset('frontend/img/brand/01.png') }}" alt="" />
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="brand-img text-center">
                        <img src="{{ asset('frontend/img/brand/02.png') }}" alt="" />
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="brand-img text-center">
                        <img src="{{ asset('frontend/img/brand/03.png') }}" alt="" />
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="brand-img text-center">
                        <img src="{{ asset('frontend/img/brand/04.png') }}" alt="" />
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="brand-img text-center">
                        <img src="{{ asset('frontend/img/brand/05.png') }}" alt="" />
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="brand-img text-center">
                        <img src="{{ asset('frontend/img/brand/06.png') }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand-area-end -->
</main>


@include('frontend.layouts.footer')