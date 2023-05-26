@include('frontend.layouts.header')
@include('frontend.layouts.nav')

<main>

<!-- breadcrumb-area-start -->
<div class="breadcrumb-area pt-230 pb-240" style="background-image:url({{ asset('frontend/img/services/ground-marquee.jpg') }})">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-text text-center">
                    <h1>Land Freight</h1>
                    <ul class="breadcrumb-menu">
                        <li><a href="/">home</a></li>
                        <li><span>Land Freight</span></li>
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
                                <div class="air-text mb-35">
                                    <h2> <i class="flaticon-delivery"></i> Land Freight</h2>
                                    <p>
                                        Multimodal, domestic and intracontinental transportation and delivery services offered around the globe. 
                                    </p>
                                    <p>
                                        {{ config('global.site_name') }} ground transportation specializes in performing value-added, white glove, and time definite services to ensure ultimate satisfaction for your customers. These services, in addition to domestic air, ocean, and rail shipments, are what we call Transcon. 
                                    </p>
                                </div>
                                <div class="air-img mb-40">
                                    <img src="{{ asset('frontend/img/air/r-01.jpg') }}" alt="">
                                </div>
                                <div class="sea-info mb-50">
                                    <p class="mb-0">
                                        Through our integrated network of premium service providers, we have access to top global, regional and local asset-based carriers around the world, providing optimal space allocation and pricing. We set a very high bar for our service providers, ensuring the most stringent performance, security, equipment and technology standards are applied to your shipment. 
                                    </p>
                                </div>
                                <div class="air-img mb-40 pos-rel">
                                    <img src="{{ asset('frontend/img/air/r-02.jpg') }}" alt="">
                                    <div class="air-video-icon">
                                        
                                     </div>
                                </div>
                                <div class="air-info mb-45">
                                    <h2>Features</h2>
                                    <p>Strengthen your supply chain with the power of our scale and reliable truckload capacity in all markets—we move the most full truckload freight (FTL) of any company in the world.</p>
                                    <p>
                                        Navigate today's increasingly fragmented truckload market with ease—access the largest network of vetted, high-quality carriers in North America and enhance your truckload strategy. 
                                    </p>
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