@include('frontend.layouts.header')
@include('frontend.layouts.nav')

<main>

<!-- breadcrumb-area-start -->
<div class="breadcrumb-area pt-230 pb-240" style="background-image:url({{ asset('frontend/img/bg/bg-10.jpg') }})">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-text text-center">
                    <h1>Request Quote</h1>
                    <ul class="breadcrumb-menu">
                        <li><a href="/">home</a></li>
                        <li><span>Request Quote</span></li>
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
                        <span class="line">Request A Quote</span>
                        <h2>Booking Order Form</h2>
                    </div>
                    <div class="container">
                    <div class="row mt20">
                        @if(session('status'))
                           <div class="alert alert-{{session('status')['type']}}">
                               <h5 class="text-danger">{{session('status')['text']}}</h5>
                           </div>
                       @endif
                    </div>
                </div>
                    <form class="appiontment-form" action="/quote" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-box user-icon mb-20">
                                    <input type="text" name="name" placeholder="Full Name" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-box email-icon mb-20">
                                    <input type="text" name="phone" placeholder="Phone No" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 mb-20">
                                <div class="">
                                    <div class=" mb-20">
                                    <input type="email" name="email" placeholder="Email Address" required>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-20">
                                <div class="pro-filter">
                                    <select name="freight_type" required>
                                        <option value="">Freight Type</option>
                                        <option value="Air Freight">Air Freight </option>
                                        <option value="Land Freight">Land Freight </option>
                                        <option value="Sea Freight">Sea Freight</option>
                                    </select>
                                </div>
                            </div> 
                            <div class="col-lg-6 col-md-6 mb-20">
                                <div class=" mb-20">
                                    <input type="date" name="departure" placeholder="Depature Date" required>
                                </div>
                            </div> 
                       
                            <div class="col-lg-6 col-md-6 mb-20">
                                <div class="">
                                    <div class=" mb-20">
                                    <input type="text" name="weight" placeholder="Package Weight" required>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-20">
                                <div class="pro-filter">
                                    <div class="pro-filter">
                                    <select name="delivery_mode" required>
                                        <option value="">Delivery Type</option>
                                        <option value="Normal Delivery">Normal Delivery </option>
                                        <option value="Express Delivery">Express Delivery </option>
                                    </select>
                                </div>
                                </div>
                                </div>
                            </div> 
                            <div class="col-lg-12 col-md-6 mb-20">
                                <div class="">
                                    <div class=" mb-20">
                                    <input type="text" name="address" placeholder="Deleivery Address" required>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="app-button">
                                    <button class="btn" type="submit">send request <i class="far fa-paper-plane"></i></button>
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