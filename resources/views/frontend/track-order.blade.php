@include('frontend.layouts.header')
@include('frontend.layouts.nav')

<main>

<!-- breadcrumb-area-start -->
<div class="breadcrumb-area pt-230 pb-240" style="background-image:url({{ asset('frontend/img/services/adobestock_210716488.jpg') }})">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-text text-center">
                    <h1>Track Packages</h1>
                    <ul class="breadcrumb-menu">
                        <li><a href="/">home</a></li>
                        <li><span>Track Packages</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area-end -->

<!-- appiontment-area-start -->
<div class="appiontment-area appiontment-padding pt-200 pb-130" style="background-image:url({{ asset('frontend/img/bg/bg-06.jpg') }})">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 offset-xl-4 col-lg-7 offset-lg-5">
                <div class="appiontment-wrapper app-wrapper">
                    <div class="section-title pos-rel mb-70">
                        <h1>02</h1>
                        <span class="line">Order Tracking</span>
                        <h2>Enter Order/Package Number</h2>
                    </div>
                    <form class="appiontment-form" action="/get-order">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-box track-icon mb-20">
                                    <input type="text" name="order_id" placeholder="Order Number" required>
                                </div>
                            </div>
                          
                            
                            <div class="col-lg-12">
                                <div class="app-button">
                                    <button class="btn" type="submit">Search <i class="far fa-paper-plane"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- appiontment-area-end -->


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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCo_pcAdFNbTDCAvMwAD19oRTuEmb9M50c"></script>
@include('frontend.layouts.footer')