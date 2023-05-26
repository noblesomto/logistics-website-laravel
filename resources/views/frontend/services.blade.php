@include('frontend.layouts.header')
@include('frontend.layouts.nav')

<main>

<!-- breadcrumb-area-start -->
<div class="breadcrumb-area pt-230 pb-240" style="background-image:url({{ asset('frontend/img/bg/bg-10.jpg') }})">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-text text-center">
                    <h1>Our Services</h1>
                    <ul class="breadcrumb-menu">
                        <li><a href="/">home</a></li>
                        <li><span>Our Services</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area-end -->



<!-- services-area-start -->
<div class="services-area grey-bg pt-125 pb-100">
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
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="services-02-wrapper mb-30">
                    <div class="services-02-icon">
                        <img src="{{ asset('frontend/img/icon/s-01.png') }}" alt="">
                    </div>
                    <div class="services-02-text">
                        <h3>Land Freight</h3>
                        <p>{{ config('global.site_name') }} ground transportation specializes in performing value-added, white glove, and time definite services to ensure ultimate satisfaction for your customers.</p>
                        <div class="b-button black-b-button">
                            <a href="/land-freight">Read More</a>
                         </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="services-02-wrapper mb-30">
                    <div class="services-02-icon">
                        <img src="{{ asset('frontend/img/icon/s-02.png') }}" alt="">
                    </div>
                    <div class="services-02-text">
                        <h3>Sea Freight</h3>
                        <p>
                            Our approach starts with having the most experienced and dedicated ocean management team, positioned globally to provide skilled and local expertise in all major trade lanes
                        </p>
                        <div class="b-button black-b-button">
                            <a href="/sea-freight">Read More</a>
                         </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="services-02-wrapper mb-30">
                    <div class="services-02-icon">
                        <img src="{{ asset('frontend/img/icon/s-03.png') }}" alt="">
                    </div>
                    <div class="services-02-text">
                        <h3>Air Freight</h3>
                        <p>
                            Our experts focus on delivering predictable and consistent airfreight solutions while providing proactive communication throughout the entire process.
                        </p>
                        <div class="b-button black-b-button">
                            <a href="/air-freight">Read More</a>
                         </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="services-02-wrapper mb-30">
                    <div class="services-02-icon">
                        <img src="{{ asset('frontend/img/icon/s-04.png') }}" alt="">
                    </div>
                    <div class="services-02-text">
                        <h3>Ware Housing</h3>
                        <p>
                            {{ config('global.site_name') }} facilities combine function with labor and space synergy to drive down costs and move products through your supply chain, on time and accurately.
                        </p>
                        <div class="b-button black-b-button">
                            <a href="/warehousing">Read More</a>
                         </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="services-02-wrapper mb-30">
                    <div class="services-02-icon">
                        <img src="{{ asset('frontend/img/icon/s-05.png') }}" alt="">
                    </div>
                    <div class="services-02-text">
                        <h3>Delivery Management</h3>
                        <p>
                            Delivery Management is a managed solution that tracks and plans container deliveries. We take care of the multiple parties involved and fragmented data that are critical to predictable deliveries.
                        </p>
                        <div class="b-button black-b-button">
                            <a href="">Read More</a>
                         </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="services-02-wrapper mb-30">
                    <div class="services-02-icon">
                        <img src="{{ asset('frontend/img/icon/s-06.png') }}" alt="">
                    </div>
                    <div class="services-02-text">
                        <h3>Supply Chain</h3>
                        <p>
                            We are there for you every step of the way. Quality data, in the hands of dedicated teams, combined with our global network, ensures we can help you stay on target for every shipment. 
                        </p>
                        <div class="b-button black-b-button">
                            <a href="">Read More</a>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- services-area-end -->

 

<!-- cta-area-start -->
<div class="cta-area pt-120 pb-130" style="background-image:url({{ asset('frontend/img/bg/01.jpg') }})">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
                <div class="cta-wrapper text-center">
                    <div class="cta-text">
                        <span>24/7 Active Suport Team</span>
                        <h1>Need Immediate Support Or Any Help?</h1>
                        <p>One call to {{ config('global.site_name'); }} is all it takes to send your freight anywhere in the country on time, every time</p>
                        <a class="btn" href="/contact-us">meet with us <i class="far fa-paper-plane"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cta-area-end -->

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


@include('frontend.layouts.footer')