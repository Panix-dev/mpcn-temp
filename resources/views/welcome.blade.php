@extends('layouts.app')

@section('title', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit')
@section('meta_description', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit')

@section('content')

<div class="slider-area ">
    <div class="slider-active">

        @foreach ($slides as $slide)
            <div class="single-slider slider-height slider-padding sky-blue d-flex align-items-center">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-6 col-md-9 ">
                            <div class="hero__caption">
                                <span data-animation="fadeInUp" data-delay=".4s">{{ $slide->tag_line }}</span>
                                <h1 data-animation="fadeInUp" data-delay=".6s">{{ $slide->title }}</h1>
                                <p data-animation="fadeInUp" data-delay=".8s">{{ $slide->teaser }}</p>
                                <div class="slider-btns">
                                    <a data-animation="fadeInLeft" data-delay="1.0s" href="{{ $slide->link }}" class="btn radius-btn">{{ $slide->link_button_text }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero__img d-none d-lg-block f-right" data-animation="fadeInRight" data-delay="1s">
                                <img src="{{ Voyager::image( $slide->image )}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<section class="best-features-area section-padd4">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-xl-8 col-lg-10">

                <div class="row">
                    <div class="col-lg-10 col-md-10">
                        <div class="section-tittle">
                            <h2>Some of the best features Of Our Service!</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="single-features mb-70">
                            <div class="features-icon">
                                <span class="flaticon-support"></span>
                            </div>
                            <div class="features-caption">
                                <h3>Lorem ipsum dolor</h3>
                                <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="single-features mb-70">
                            <div class="features-icon">
                                <span class="flaticon-support"></span>
                            </div>
                            <div class="features-caption">
                                <h3>Lorem ipsum dolor</h3>
                                <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="single-features mb-70">
                            <div class="features-icon">
                                <span class="flaticon-support"></span>
                            </div>
                            <div class="features-caption">
                                <h3>Lorem ipsum dolor</h3>
                                <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="single-features mb-70">
                            <div class="features-icon">
                                <span class="flaticon-support"></span>
                            </div>
                            <div class="features-caption">
                                <h3>Lorem ipsum dolor</h3>
                                <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="features-shpae d-none d-lg-block">
        <img src="{{ asset('img/shape/best-features.png') }}" alt="">
    </div>
</section>

<section class="service-area sky-blue section-padding2">
    <div class="container">

        <div class="row d-flex justify-content-center">
            <div class="col-lg-6">
                <div class="section-tittle text-center">
                    <h2>Key values section title<br>goes here!</h2>
                </div>
            </div>
        </div>
     
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="services-caption text-center mb-30">
                    <div class="service-icon">
                        <span class="flaticon-businessman"></span>
                    </div>
                    <div class="service-cap">
                        <h4><a href="#">Easily Manage</a></h4>
                        <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="services-caption active text-center mb-30">
                    <div class="service-icon">
                        <span class="flaticon-pay"></span>
                    </div>
                    <div class="service-cap">
                        <h4><a href="#">Get Payments Easily</a></h4>
                        <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="services-caption text-center mb-30">
                    <div class="service-icon">
                        <span class="flaticon-plane"></span>
                    </div>
                    <div class="service-cap">
                        <h4><a href="#">Quick Messaging</a></h4>
                        <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="best-pricing pricing-padding" data-background="{{ asset('img/gallery/best_pricingbg.jpg') }}">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="section-tittle section-tittle2 text-center">
                    <h2>Choose The Best Package For Your Case.</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="pricing-card-area" style="padding-bottom: 0;">
    <div class="container">
        <div class="row">

            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-card text-center mb-30">
                    <div class="card-top">
                        <span>Silver</span>
                        <h4>&#163;{{ setting('site.silver_package_price') }} <span>/ project</span></h4>
                    </div>
                    <div class="card-bottom">
                        <ul>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>24/7 support</li>
                        </ul>
                        <a href="#" class="btn card-btn1">Get Started</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-card  text-center mb-30">
                    <div class="card-top">
                        <span>Gold</span>
                        <h4>&#163;{{ setting('site.gold_package_price') }} <span>/ project</span></h4>
                    </div>
                    <div class="card-bottom">
                        <ul>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>24/7 support</li>
                        </ul>
                        <a href="#" class="btn card-btn1">Get Started</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-card text-center mb-30">
                    <div class="card-top">
                        <span>Platinum</span>
                        <h4>&#163;{{ setting('site.platinum_package_price') }} <span>/ project</span></h4>
                    </div>
                    <div class="card-bottom">
                        <ul>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>24/7 support</li>
                        </ul>
                        <a href="#" class="btn card-btn1">Get Started</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="our-customer section-padd-top30">
    <div class="container-fluid">
        <div class="our-customer-wrapper">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-8">
                    <div class="section-tittle text-center">
                        <h2>What Our Customers<br> Have to Say</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="customar-active dot-style d-flex dot-style">
                        @foreach ($testimonials as $testimonial)
                            <div class="single-customer mb-100">
                                <div class="what-img">
                                    <img src="{{ Voyager::image( $testimonial->thumbnail('cropped') )}}" alt="">
                                </div>
                                <div class="what-cap">
                                    <h4>
                                        <a href="#">{{ $testimonial->title }}</a>
                                    </h4>
                                    <p>{{ $testimonial->body }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@include('blocks.cta')

@endsection