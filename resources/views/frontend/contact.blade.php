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

<!-- map-area-start -->
 <div class="map-area">
    <div class="map-wrapper">
        <div id="contact-map" class="contact-map"></div>
    </div>
</div>
<!-- map-area-end -->

<!-- contact-us-area-start -->
<div class="contact-us-area pt-125 pb-115 mb-130" style="background-image:url({{ asset('frontend/img/bg/09.jpg') }})">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
                <div class="section-title white-title section-2 text-center pos-rel mr-80 ml-80 mb-75">
                    <h1>07</h1>
                    <span class="border-left-1"></span>
                    <span>Contact Us</span>
                    <span class="border-right-1"></span>
                    <h2>Don't Hesitated To Contact Us</h2>
                </div>
            </div> 
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4">
                <div class="single-contact-us mb-30">
                    <div class="contact-us-list">
                        <div class="contact-us-icon f-right">
                            <i class="far fa-phone"></i>
                        </div>
                        <div class="contact-us-text f-right">
                            <span>Phone Number</span>
                            <h4>{{ config('global.site_phone') }}</h4>
                        </div>
                    </div>
                    <div class="contact-us-list">
                        <div class="contact-us-icon f-right">
                            <i class="far fa-envelope-open"></i>
                        </div>
                        <div class="contact-us-text f-right">
                            <span>Email Address</span>
                            <h4>{{ config('global.site_email') }}</h4>
                        </div>
                    </div>
                    <div class="contact-us-list">
                        <div class="contact-us-icon f-right">
                            <i class="far fa-phone"></i>
                        </div>
                        <div class="contact-us-text f-right">
                            <span>Main Office</span>
                            <h4>North Avenue, Chicago <br>
                                ILiok, 55030, USA</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8">
                <div class="container">
                    <div class="row mt20">
                        @if(session('status'))
                           <div class="alert alert-{{session('status')['type']}}">
                               <h5 class="text-danger">{{session('status')['text']}}</h5>
                           </div>
                       @endif
                    </div>
                </div>
                <div class="contact-us-wrapper">
                    <form id="contact-form" action="/contact-us" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-2-box user-2-icon mb-30">
                                    <input type="text" name="name" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-2-box email-2-icon mb-30">
                                    <input type="text" name="email" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-2-box phone-2-icon mb-30">
                                    <input type="text" name="phone" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-2-box subject-2-icon mb-30">
                                    <input type="text" name="subject" placeholder="Your Subject">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-2-box message-2-icon mb-30">
                                    <textarea name="message" id="message" cols="30" rows="10" placeholder="send message"></textarea>
                                </div>
                                <div class="contact-btn">
                                    <button class="btn btn-icon" type="submit">send request <i class="far fa-paper-plane"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <p class="ajax-response"></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact-us-area-end -->


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