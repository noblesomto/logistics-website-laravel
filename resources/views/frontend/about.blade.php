@include('frontend.layouts.header')
@include('frontend.layouts.nav')

<main>

<!-- breadcrumb-area-start -->
<div class="breadcrumb-area pt-230 pb-240" style="background-image:url({{ asset('frontend/img/bg/bg-10.jpg') }})">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-text text-center">
                    <h1>About Us</h1>
                    <ul class="breadcrumb-menu">
                        <li><a href="/">home</a></li>
                        <li><span>About Us</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area-end -->

<!-- about-me-area-start -->
<div class="about-me-area pt-125 pb-100">
    <div class="container">
        <div class="row mb-40">
            <div class="cl-xl-6 col-lg-6">
                <div class="about-me-single">
                    <div class="section-title pos-rel mb-30">
                        <h1>01</h1>
                        <span class="line">About Us</span>
                        <h2>Modern & Trusted Logistics Company</h2>
                    </div> 
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="about-right-single mb-30">
                    <div class="about-me-info">
                        <span>Our industry-leading platform and global services simplify the complex logistics ecosystem, delivering supply chain savings, reliability, and visibility for your business.</span>
                        <p>Our services accelerate trade to seamlessly deliver products and goods around the world. With the combination of our multimodal transportation management system and expertise, we use our information advantage to deliver smarter solutions for our 100,000 customers and 96,000 contract carriers.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="about-me-wrapper active mb-30">
                    <div class="about-me-img">
                        <img src="{{ asset('frontend/img/services/services-01.jpg') }}" alt="">
                    </div>
                    <div class="about-me-text">
                        <h3><i class="far fa-anchor"></i> Our Mission</h3>
                        <p>To set the standard for excellence in global logistics through total commitment to quality in people and customer service, with superior financial results.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="about-me-wrapper mb-30">
                    <div class="about-me-img">
                        <img src="{{ asset('frontend/img/services/services-02.jpg') }}" alt="">
                    </div>
                    <div class="about-me-text">
                        <h3><i class="far fa-analytics"></i> Our Vision</h3>
                        <p>To create unlimited opportunities for our people through sustainable growth and strategic focus, inspiring our premier customer-focused logistics organization. </p>
                        
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="about-me-wrapper mb-30">
                    <div class="about-me-img">
                        <img src="{{ asset('frontend/img/services/services-03.jpg') }}" alt="">
                    </div>
                    <div class="about-me-text">
                        <h3><i class="far fa-atom-alt"></i> Why Choose Us</h3>
                        <p>We solves logistics problems for companies across the globe and across industries, from the simple to the most complex. With $30 billion in freight under management and 20 million shipments annually, we are one of the world’s largest logistics platforms.</p>
          
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about-me-area-end -->

<!-- counter-area-start -->
<div class="counter-area counter-white pt-130 pb-100" style="background-image:url({{ asset('frontend/img/bg/bg-11.jpg') }})">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
                <div class="section-title section-2 text-center pos-rel mb-80">
                    <h1>02</h1>
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
                        <h1>53 <span>+</span></h1>
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
                        <h1>15 <span>+</span></h1>
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

<!-- skills-area-start -->
<div class="skills-02-area pos-rel">
    <div class="skills-bg-img" style="background-image:url({{ asset('frontend/img/bg/bg-03.jpg') }})">
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="skills-wrapper skills-2">
                    <div class="section-title white-title pos-rel mb-40">
                        <h1>06</h1>
                        <span class="line line-white">{{ config('global.site_name') }} </span>
                        <h2>Our Professional Experience</h2>
                    </div>
                    <div class="progress-bar-text">
                        <div class="progress-skill">
                             <div class="single-skill mb-35">
                                 <div class="bar-title">
                                     <h4>Sea Freight</h4>
                                 </div>
                                 <div class="progress">
                                     <div class="progress-bar wow slideInLeft" role="progressbar" style="width: 95%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-wow-duration="1s" data-wow-delay=".5s">
                                         <span>95%</span>
                                     </div>
                                 </div>
                             </div>
                             <div class="single-skill mb-35">
                                 <div class="bar-title"> 
                                     <h4>Air Freight</h4>
                                 </div>
                                 <div class="progress">
                                     <div class="progress-bar wow slideInLeft" role="progressbar" style="width: 94%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-wow-duration="2s" data-wow-delay=".5s">
                                         <span>94%</span>
                                     </div>
                                 </div>
                             </div>
                             <div class="single-skill mb-45">
                                 <div class="bar-title">
                                     <h4>Land Freight</h4>
                                 </div>
                                 <div class="progress">
                                     <div class="progress-bar wow slideInLeft" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-wow-duration="2s" data-wow-delay=".5s">
                                         <span>90%</span>
                                     </div>
                                 </div>
                             </div>
                        </div>
                        <a class="btn blue-btn" href="/contact-us">appointment <i class="far fa-paper-plane"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- skills-area-end -->


<!-- video-area-start -->
<div class="video-02-area pt-270 pb-260" style="background-image:url({{ asset('frontend/img/bg/bg-12.jpg') }})">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="video-wrapper text-center">
                  
                    <div class="video-text">
                        <h2>Delivering supply chain <br>solutions with our expertise</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- video-area-end -->




@include('frontend.layouts.footer')