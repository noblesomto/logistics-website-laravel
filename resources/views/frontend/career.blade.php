@include('frontend.layouts.header')
@include('frontend.layouts.nav')

<main>

<!-- breadcrumb-area-start -->
<div class="breadcrumb-area pt-230 pb-240" style="background-image:url({{ asset('frontend/img/bg/bg-10.jpg') }})">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-text text-center">
                    <h1>Career</h1>
                    <ul class="breadcrumb-menu">
                        <li><a href="/">home</a></li>
                        <li><span>Career</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area-end -->

<!-- career-area-start -->
<div class="career-area pt-130 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2">
                <h3>
                    Careers
                </h3>
                <p>
                    Growth from within and high retention are essential components of our achievements as a company. Our ambition challenges us to provide excellent customer service and career opportunities for our employees. Expanding to over 350 locations worldwide, {{ config('global.site_name') }} can help fulfill specific needs through quality in global logistics. We have various roles within the company, from IT to Operations, Sales, Account Management, Customs, and many more. This is a great time to be in digital logistics. Join our team to grow your career while exceeding customers’ expectations in a creative and fun atmosphere. 
                </p>
                
            </div>
        </div>
    </div>
</div>
<!-- career-area-end -->

<!-- career-cta-area-start -->
<div class="career-cta-area pt-130 pb-130" style="background-image:url({{ asset('frontend/img/bg/10.jpg') }})">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-6 col-lg-6 offset-lg-6">
                <div class="career-cta-wrapper">
                    <div class="career-cta-text">
                        <h2>Do You Need Any Job ?</h2>
                        <p>Don't see the job you are looking for? or Learn more about career opportunities? </p>
                        <a class="btn blue-btn" href="/contact-us">Contact Us Now <i class="far fa-paper-plane"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- career-cta-area-end -->


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