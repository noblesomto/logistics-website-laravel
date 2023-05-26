@include('frontend.layouts.header')
@include('frontend.layouts.nav')

<main>

<!-- breadcrumb-area-start -->
<div class="breadcrumb-area pt-230 pb-240" style="background-image:url({{ asset('frontend/img/bg/bg-10.jpg') }})">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-text text-center">
                    <h1>Sea Freight</h1>
                    <ul class="breadcrumb-menu">
                        <li><a href="/">home</a></li>
                        <li><span>Sea Freight</span></li>
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
                        <img src="{{ asset('frontend/img/air/s-01.jpg') }}" alt="">
                    </div>
                    <div class="air-text">
                        <h2> <i class="flaticon-boat-1"></i> Sea Freight</h2>
                        <p>
                            {{ config('global.site_name') }} provides flexible and integrated ocean freight services to create the most highly adaptable, reliable, and customizable solutions in the industry.
                        </p>
                        <p>
                            Our approach starts with having the most experienced and dedicated ocean management team, positioned globally to provide skilled and local expertise in all major trade lanes, and backed by one common systems platform. Highly respected and trusted by our service providers, our preferred status with core carriers is coupled with the right people, capacity and pricing to successfully execute on our customers’ needs while providing superior customer service.
                        </p>
                    </div>
                    <div class="row mt-50">
                        <div class="col-xl-6 c-lg-6 col-md-6">
                            <div class="air-img mb-30">
                                <img src="{{ asset('frontend/img/air/s-02.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-xl-6 c-lg-6 col-md-6">
                            <div class="air-img mb-30">
                                <img src="{{ asset('frontend/img/air/s-03.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-45 mb-30">
                        <div class="col-xl-6 col-lg-6 mb-30">
                            <div class="air-img">
                                <img src="{{ asset('frontend/img/air/s-04.jpg') }}" alt="">
                                <div class="air-video-icon">
                                   
                                 </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 mb-30">
                            <div class="sea-wrapper">
                                <div class="air-info">
                                    <h2>Industries We Support</h2>
                                    <p>
                                        Our wide range of ocean services coupled with our global, regional, and local expertise, enable us to service our customer no matter what industry they are in.
                                    </p>
                                </div>
                            
                                <div class="sea-info">
                                    <p class="mb-0">
                                        We have multiple service contracts with ocean carriers to ensure global coverage, capacity, and competitive rates.
                                    </p>
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