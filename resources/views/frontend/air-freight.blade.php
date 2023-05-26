@include('frontend.layouts.header')
@include('frontend.layouts.nav')

<main>

<!-- breadcrumb-area-start -->
<div class="breadcrumb-area pt-230 pb-240" style="background-image:url({{ asset('frontend/img/services/services-transportation-air.jpg') }})">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-text text-center">
                    <h1>Air Freight</h1>
                    <ul class="breadcrumb-menu">
                        <li><a href="/">home</a></li>
                        <li><span>Air Freight</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area-end -->



 <!-- air-freight-area-start -->
            <div class="air-freight-area pt-130 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2 col-lg-8 offset-lg-2">
                            <div class="air-wrapper">
                                <div class="air-img mb-45">
                                    <img src="{{ asset('frontend/img/air/01.jpg') }}" alt="">
                                </div>
                                <div class="air-text">
                                    <h2> <i class="flaticon-plane-1"></i> Air Freight</h2>
                                    <p>
                                        Our experts focus on delivering predictable and consistent airfreight solutions while providing proactive communication throughout the entire process. Preferential access to aircraft capacity worldwide allows us to customize supply chain solutions for optimal routing, pricing, and delivery speed.
                                    </p>
                                    <p>
                                        As a non-asset based logistics provider {{ config('global.site_name') }} depends greatly on the performance of our carrier partners to help us deliver a high-quality, competitive and integrated service for our customers.  These airline partners align with our network and strategy, and share our focus on technology, compliance and sustainability. 
                                    </p>
                                </div>
                                <div class="row mt-45 mb-30">
                                    <div class="col-xl-6 col-lg-6 mb-30">
                                        <div class="air-img">
                                            <img src="{{ asset('frontend/img/air/02.jpg') }}" alt="">
                                            <div class="air-video-icon">
                                                
                                             </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 mb-30">
                                        <div class="air-info">
                                            <h2>What We Do</h2>
                                            <p>We leverages our global tonnage to secure competitive pricing, access preferential capacity, and create a well-defined engagement that provides consistent and predictable service for our customers.</p>
                                            <div class="air-link">
                                                <ul>
                                                    <li><i class="far fa-check-double"></i> <span>Provide door-to-door solutions by dedicated, highly trained, and customer-focused employees.</span> </li>
                                                    <li><i class="far fa-check-double"></i> <span>Produce customized solutions to meet customer needs.</span> </li>
                                                
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
              
   
                </div>
            </div>
      
        </div>
    </div>
</div>
<!-- air-freight-area-end -->

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