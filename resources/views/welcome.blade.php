@extends('layouts.frontendlayouts')
@section('content')


<header class="personal-header position-re sub-bg">
    <div class="container ontop">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="caption text-center mb-50">
                    <h5 class="text-u ls1 mb-15">Hello, I'm</h5>
                    <h1>{{ $hero->name }}</h1>
                    <p>{{ $hero->title }}</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-around">
            <div class="col-lg-3">
                <div class="pt-40">
                    <div class="info-item mb-80">
                        <h6>Expertise</h6>
                        <span class="sub-title mt-5">{{ $hero->expertise }}</span>
                    </div>
                    <div class="info-item">
                        <div class="rate-stars mb-10 fz-14">
                            <span class="rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="ml-10">4.9</span>
                            </span>
                        </div>
                        <p>{{ $hero->total_clients }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="img">
                    <img src="{{ env('APP_URL')."/storage/".$hero->featured_img }}" alt="">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="pt-40 text-right">
                    <div class="info-item d-flex align-items-center justify-content-end mb-80">
                        <h6 class="sub-title mr-10">Years <br> of Experience</h6>
                        <h2>{{ $hero->experience }}</h2>
                    </div>
                    @if ($hero->featured_work)
                    <div class="info-item">
                        <span class="sub-title ls1 mb-15">Featured Work</span>

                            
                        @foreach ($hero->featured_work as $featuredWork)
                        <h6 class="fz-18">{{ $featuredWork['project'] }}</h6>
                        
                        @endforeach
                        <div class="underline sub-title mt-15">
                            <a href="project-details1.html">Explore</a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="curve">
        <svg version="1.1" id="circle" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0px" y="0px" viewBox="0 0 500 250" enable-background="new 0 0 500 250" xml:space="preserve"
            preserveAspectRatio="none">
            <path fill="#1d1d1d"
                d="M250,246.5c-97.85,0-186.344-40.044-250-104.633V250h500V141.867C436.344,206.456,347.85,246.5,250,246.5z">
            </path>
        </svg>
    </div>
</header>

<!-- ==================== End Slider ==================== -->



<!-- ==================== Start Marquee ==================== -->

<section>
    <div class="main-marq pt-60 pb-60">
        <div class="slide-har st1">
            <div class="box">
                @forelse ($serviceTitles as $serviceTitle)
                    
                <div class="item">
                    <h4 class="d-flex align-items-center fz-70"><span>{{ $serviceTitle->title }}</span>
                        <span class="fz-50 ml-50 stroke icon">*</span>
                    </h4>
                </div>
                @empty
                  
                @endforelse


            </div>
            <div class="box">
                @forelse ($serviceTitles as $serviceTitle)
                <div class="item">
                    <h4 class="d-flex align-items-center fz-70"><span>{{ $serviceTitle->title }}</span>
                        <span class="fz-50 ml-50 stroke icon">*</span>
                    </h4>
                </div>
                @empty
                @endforelse
                
            </div>
        </div>
    </div>
</section>

<!-- ==================== End Marquee ==================== -->



<!-- ==================== Start Services ==================== -->

<section class="serv-box section-padding pb-0 sub-bg position-re">
    <div class="container pt-30">
        <div class="row">
            <div class="col-lg-4">
                <div class="sec-lg-head mb-80">
                    <div class="position-re">
                        <h6 class="dot-titl-non mb-15 wow fadeIn">Featured Services</h6>
                        <h2 class="d-rotate wow">
                            <span class="rotate-text">Our Services</span>
                        </h2>
                        <p class="fz-14 mt-15">Nemo enim ipsam voluptatem quia voluptas sit odit aut
                            fugit, sed quia.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 offset-lg-1">
                <div class="serv-list2">
                    @forelse ($serviceTitles as $serviceTitle)
                        
                   
                    <div class="item pt-30 pb-30 bord-thin-top">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="icon-img-50 md-mb30">
                                    <img src="{{ env('APP_URL') . '/storage/' . $serviceTitle->service_icon }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <h6>{{ $serviceTitle->title }}</h6>
                            </div>
                            <div class="col-lg-6 offset-lg-1">
                                <p>{!! $serviceTitle->short_detail !!}</p>
                            </div>
                        </div>
                    </div>
                    @empty
                    
                    @endforelse
                  
                </div>
            </div>
        </div>
    </div>
    <div class="curve revers">
        <svg version="1.1" id="circle" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0px" y="0px" viewBox="0 0 500 250" enable-background="new 0 0 500 250" xml:space="preserve"
            preserveAspectRatio="none">
            <path fill="#1d1d1d"
                d="M250,246.5c-97.85,0-186.344-40.044-250-104.633V250h500V141.867C436.344,206.456,347.85,246.5,250,246.5z">
            </path>
        </svg>
    </div>
</section>

<!-- ==================== End Services ==================== -->



<!-- ==================== Start Portfolio ==================== -->

<section class="portfolio section-padding pb-70 sub-bg">
    <div class="container-fluid">
        <div class="gallery2">

            <div class="row">

                <div class="items web info-overlay mb-50">
                    <div class="item-img o-hidden">
                        <a href="project-details1.html">
                            <div class="inner wow">
                                <img src="assets/imgs/freelancer/works2/1.jpg" alt="image">
                            </div>
                        </a>
                    </div>
                    <div class="info text-center mt-30">
                        <span class="sub-title tag mb-5 opacity-8"><a href="project-details1.html">Design
                                ART</a></span>
                        <h6><a href="project-details1.html">Million Dollar Investment</a></h6>
                    </div>

                </div>

                <div class="width2 items app info-overlay mb-50">
                    <div class="item-img o-hidden">
                        <a href="project-details1.html">
                            <div class="inner wow">
                                <img src="assets/imgs/freelancer/works2/2.jpg" alt="image">
                            </div>
                        </a>
                    </div>
                    <div class="info text-center mt-30">
                        <span class="sub-title tag mb-5 opacity-8"><a href="project-details1.html">Design
                                ART</a></span>
                        <h6><a href="project-details1.html">Character Design</a></h6>
                    </div>
                </div>

                <div class="width2 items brand info-overlay mb-50">
                    <div class="item-img o-hidden">
                        <a href="project-details1.html">
                            <div class="inner wow">
                                <img src="assets/imgs/freelancer/works2/3.jpg" alt="image">
                            </div>
                        </a>
                    </div>
                    <div class="info text-center mt-30">
                        <span class="sub-title tag mb-5 opacity-8"><a href="project-details1.html">Design
                                ART</a></span>
                        <h6><a href="project-details1.html">Arch Website Design</a></h6>
                    </div>
                </div>

                <div class="items app info-overlay mb-50">
                    <div class="item-img o-hidden">
                        <a href="project-details1.html">
                            <div class="inner wow">
                                <img src="assets/imgs/freelancer/works2/4.jpg" alt="image">
                            </div>
                        </a>
                    </div>
                    <div class="info text-center mt-30">
                        <span class="sub-title tag mb-5 opacity-8"><a href="project-details1.html">Design
                                ART</a></span>
                        <h6><a href="project-details1.html">Tamu Swahili Food</a></h6>
                    </div>
                </div>

                <div class="width2 items web info-overlay mb-50">
                    <div class="item-img o-hidden">
                        <a href="project-details1.html">
                            <div class="inner wow">
                                <img src="assets/imgs/freelancer/works2/5.jpg" alt="image">
                            </div>
                        </a>
                    </div>
                    <div class="info text-center mt-30">
                        <span class="sub-title tag mb-5 opacity-8"><a href="project-details1.html">Design
                                ART</a></span>
                        <h6><a href="project-details1.html">Sheno Brand Identity</a></h6>
                    </div>
                </div>

                <div class="width2 items brand info-overlay mb-50">
                    <div class="item-img o-hidden">
                        <a href="project-details1.html">
                            <div class="inner wow">
                                <img src="assets/imgs/freelancer/works2/6.jpg" alt="image">
                            </div>
                        </a>
                    </div>
                    <div class="info text-center mt-30">
                        <span class="sub-title tag mb-5 opacity-8"><a href="project-details1.html">Design
                                ART</a></span>
                        <h6><a href="project-details1.html">Digital research</a></h6>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

<!-- ==================== End Portfolio ==================== -->



<!-- ==================== Start skills ==================== -->

<section class="skills-exp section-padding" data-scroll-index="4">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="sec-lg-head mb-80">
                    <div class="position-re">
                        <h6 class="dot-titl-non mb-10 wow fadeIn">Skills & Experience</h6>
                        <h2 class="fz-50 d-rotate wow">
                            <span class="rotate-text">My Experience</span>
                        </h2>
                    </div>
                </div>
                <div class="skill-item d-flex justify-content-between md-mb50">
                    <div class="item text-center">
                        <div class="icon-img-60 m-auto">
                            <img src="assets/imgs/freelancer/skills/figma.png" alt="">
                        </div>
                        <span class="mt-15">Figma</span>
                    </div>
                    <div class="item text-center">
                        <div class="icon-img-60 m-auto">
                            <img src="assets/imgs/freelancer/skills/wordpress.png" alt="">
                        </div>
                        <span class="mt-15">WordPress</span>
                    </div>
                    <div class="item text-center">
                        <div class="icon-img-60 m-auto">
                            <img src="assets/imgs/freelancer/skills/angular.png" alt="">
                        </div>
                        <span class="mt-15">Angular</span>
                    </div>
                    <div class="item text-center">
                        <div class="icon-img-60 m-auto">
                            <img src="assets/imgs/freelancer/skills/webflow.png" alt="">
                        </div>
                        <span class="mt-15">Webflow</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 valign">
                <div class="exp-items full-width">
                    <div class="item d-flex pb-30 pt-30 mb-30 bord-thin-top bord-thin-bottom">
                        <div class="title">
                            <h6>Android Studio</h6>
                            <p class="fz-12">Junior Product Designer</p>
                        </div>
                        <div class="date ml-auto text-right">
                            <span class="icon">
                                <a href="page-about.html">
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </span>
                            <p class="fz-12">2014 - 2015</p>
                        </div>
                    </div>
                    <div class="item d-flex pb-30 mb-30 bord-thin-bottom">
                        <div class="title">
                            <h6>Slack</h6>
                            <p class="fz-12">UI/UX Designer & Developer</p>
                        </div>
                        <div class="date ml-auto text-right">
                            <span class="icon">
                                <a href="page-about.html">
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </span>
                            <p class="fz-12">2015 - 2019</p>
                        </div>
                    </div>
                    <div class="item d-flex pb-30 bord-thin-bottom">
                        <div class="title">
                            <h6>Apple</h6>
                            <p class="fz-12">ios Developer</p>
                        </div>
                        <div class="date ml-auto text-right">
                            <span class="icon">
                                <a href="page-about.html">
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </span>
                            <p class="fz-12">2019 - 2021</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== End skills ==================== -->



<!-- ==================== Start Testimonials ==================== -->

<section class="testim-crv section-padding sub-bg" data-scroll-index="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 valign">
                <div class="sec-lg-head md-mb80">
                    <div class="position-re">
                        <h6 class="dot-titl-non mb-10 wow fadeIn">What Clients Says?</h6>
                        <h2 class="fz-50 d-rotate wow">
                            <span class="rotate-text">Testimonials</span>
                        </h2>
                    </div>
                    <div class="swiper-controls testim-controls arrow-out d-flex mt-50">
                        <div class="swiper-button-prev">
                            <span class="left">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.2031 10.3281L11.5781 15.9531C11.535 15.9961 11.4839 16.0303 11.4276 16.0536C11.3713 16.077 11.3109 16.089 11.25 16.089C11.1891 16.089 11.1287 16.077 11.0724 16.0536C11.0161 16.0303 10.965 15.9961 10.9219 15.9531C10.8788 15.91 10.8446 15.8588 10.8213 15.8025C10.798 15.7462 10.786 15.6859 10.786 15.6249C10.786 15.564 10.798 15.5036 10.8213 15.4473C10.8446 15.391 10.8788 15.3399 10.9219 15.2968L15.7422 10.4687H3.125C3.00068 10.4687 2.88145 10.4193 2.79354 10.3314C2.70564 10.2435 2.65625 10.1242 2.65625 9.99993C2.65625 9.87561 2.70564 9.75638 2.79354 9.66847C2.88145 9.58056 3.00068 9.53118 3.125 9.53118H15.7422L10.9219 4.70305C10.8349 4.61603 10.786 4.498 10.786 4.37493C10.786 4.25186 10.8349 4.13383 10.9219 4.0468C11.0089 3.95978 11.1269 3.91089 11.25 3.91089C11.3731 3.91089 11.4911 3.95978 11.5781 4.0468L17.2031 9.6718C17.2476 9.71412 17.2829 9.76503 17.3071 9.82143C17.3313 9.87784 17.3438 9.93856 17.3438 9.99993C17.3438 10.0613 17.3313 10.122 17.3071 10.1784C17.2829 10.2348 17.2476 10.2857 17.2031 10.3281Z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                        </div>
                        <div class="swiper-button-next ml-50">
                            <span class="right">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.2031 10.3281L11.5781 15.9531C11.535 15.9961 11.4839 16.0303 11.4276 16.0536C11.3713 16.077 11.3109 16.089 11.25 16.089C11.1891 16.089 11.1287 16.077 11.0724 16.0536C11.0161 16.0303 10.965 15.9961 10.9219 15.9531C10.8788 15.91 10.8446 15.8588 10.8213 15.8025C10.798 15.7462 10.786 15.6859 10.786 15.6249C10.786 15.564 10.798 15.5036 10.8213 15.4473C10.8446 15.391 10.8788 15.3399 10.9219 15.2968L15.7422 10.4687H3.125C3.00068 10.4687 2.88145 10.4193 2.79354 10.3314C2.70564 10.2435 2.65625 10.1242 2.65625 9.99993C2.65625 9.87561 2.70564 9.75638 2.79354 9.66847C2.88145 9.58056 3.00068 9.53118 3.125 9.53118H15.7422L10.9219 4.70305C10.8349 4.61603 10.786 4.498 10.786 4.37493C10.786 4.25186 10.8349 4.13383 10.9219 4.0468C11.0089 3.95978 11.1269 3.91089 11.25 3.91089C11.3731 3.91089 11.4911 3.95978 11.5781 4.0468L17.2031 9.6718C17.2476 9.71412 17.2829 9.76503 17.3071 9.82143C17.3313 9.87784 17.3438 9.93856 17.3438 9.99993C17.3438 10.0613 17.3313 10.122 17.3071 10.1784C17.2829 10.2348 17.2476 10.2857 17.2031 10.3281Z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="testim-swiper2" data-carousel="swiper" data-items="2" data-loop="true" data-space="30">
                    <div id="content-carousel-container-unq-testim" class="swiper-container" data-swiper="container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="item">
                                    <div class="cont mb-40">
                                        <div class="rate-stars mb-20 fz-12">
                                            <span class="rate main-color">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                        </div>
                                        <p class="fw-400">I have been hiring people in this
                                            space for a number of years
                                            and I have never seen this level of
                                            professionalism. It really feels like you are
                                            working with a team that can get the job
                                            done.</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="img circle-60">
                                                <img src="assets/imgs/testim/1.jpg" alt="" class="circle-img">
                                            </div>
                                        </div>
                                        <div class="ml-30">
                                            <div class="info">
                                                <h6 class="fz-16">Leonard Heiser</h6>
                                                <span class="opacity-7 sub-title">Ceo</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item">
                                    <div class="cont mb-40">
                                        <div class="rate-stars mb-20 fz-12">
                                            <span class="rate main-color">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                        </div>
                                        <p class="fw-400">I have been hiring people in this
                                            space for a number of years
                                            and I have never seen this level of
                                            professionalism. It really feels like you are
                                            working with a team that can get the job
                                            done.</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="img circle-60">
                                                <img src="assets/imgs/testim/2.jpg" alt="" class="circle-img">
                                            </div>
                                        </div>
                                        <div class="ml-30">
                                            <div class="info">
                                                <h6 class="fz-16">Leonard Heiser</h6>
                                                <span class="opacity-7 sub-title">Ceo</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== End Testimonials ==================== -->



<!-- ==================== Start Marquee ==================== -->

<div class="brand-sec">
    <div class="container">
        <div class="sec-lg-head text-center mb-80">
            <h6 class="dot-titl-non mb-15 wow fadeIn">Our Clients</h6>
            <h2 class="d-rotate wow">
                <span class="rotate-text">Companies I've Worked With</span>
            </h2>
        </div>
    </div>
    <div class="brand-marq main-marq">
        <div class="slide-har st1">
            <div class="box">
                <div class="item">
                    <a href="home-personal.html#0" class="img">
                        <img src="assets/imgs/brands/b1.png" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="home-personal.html#0" class="img">
                        <img src="assets/imgs/brands/b2.png" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="home-personal.html#0" class="img">
                        <img src="assets/imgs/brands/b3.png" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="home-personal.html#0" class="img">
                        <img src="assets/imgs/brands/b4.png" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="home-personal.html#0" class="img">
                        <img src="assets/imgs/brands/b5.png" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="home-personal.html#0" class="img">
                        <img src="assets/imgs/brands/b6.png" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="home-personal.html#0" class="img">
                        <img src="assets/imgs/brands/b7.png" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="home-personal.html#0" class="img">
                        <img src="assets/imgs/brands/b8.png" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="home-personal.html#0" class="img">
                        <img src="assets/imgs/brands/b4.png" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="home-personal.html#0" class="img">
                        <img src="assets/imgs/brands/b5.png" alt="">
                    </a>
                </div>
            </div>
            <div class="box">
                <div class="item">
                    <a href="home-personal.html#0" class="img">
                        <img src="assets/imgs/brands/b1.png" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="home-personal.html#0" class="img">
                        <img src="assets/imgs/brands/b2.png" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="home-personal.html#0" class="img">
                        <img src="assets/imgs/brands/b3.png" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="home-personal.html#0" class="img">
                        <img src="assets/imgs/brands/b4.png" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="home-personal.html#0" class="img">
                        <img src="assets/imgs/brands/b5.png" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="home-personal.html#0" class="img">
                        <img src="assets/imgs/brands/b6.png" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="home-personal.html#0" class="img">
                        <img src="assets/imgs/brands/b7.png" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="home-personal.html#0" class="img">
                        <img src="assets/imgs/brands/b8.png" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="home-personal.html#0" class="img">
                        <img src="assets/imgs/brands/b4.png" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="home-personal.html#0" class="img">
                        <img src="assets/imgs/brands/b5.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ==================== End Marquee ==================== -->



<!-- ==================== Start Blog ==================== -->

<section class="blog-list-half crev section-padding sub-bg">
    <div class="container">
        <div class="sec-lg-head mb-80">
            <div class="row">
                <div class="col-lg-6">
                    <h6 class="dot-titl-non mb-15 wow fadeIn">Our Blog</h6>
                    <h2 class="d-rotate wow">
                        <span class="rotate-text">Latest News.</span>
                    </h2>
                </div>
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="full-width d-flex justify-content-end justify-end">
                        <div class="vew-all">
                            <a href="blog-list.html">View All Our News
                                <span>
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row wow fadeIn" data-wow-delay=".4s">
            <div class="col-lg-6">
                <div class="item md-mb80">
                    <div class="row rest">
                        <div class="col-md-6">
                            <div class="img">
                                <img src="assets/imgs/blog/h1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 valign">
                            <div class="cont">
                                <span class="date fz-12 ls1 text-u opacity-7 mb-15">August 6,
                                    2022</span>
                                <h5>
                                    <a href="blog-details.html">Free advertising for your online
                                        business.</a>
                                </h5>
                                <div class="tags colorbg mt-15">
                                    <a href="blog-half-img.html">Marketing</a>
                                    <a href="blog-half-img.html">Design</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="item">
                    <div class="row rest">
                        <div class="col-md-6">
                            <div class="img">
                                <img src="assets/imgs/blog/h4.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 valign">
                            <div class="cont">
                                <span class="date fz-12 ls1 text-u opacity-7 mb-15">August 6,
                                    2022</span>
                                <h5>
                                    <a href="blog-details.html">Business meeting 2023 in San
                                        Francisco.</a>
                                </h5>
                                <div class="tags colorbg mt-15">
                                    <a href="blog-half-img.html">Marketing</a>
                                    <a href="blog-half-img.html">Design</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== End Blog ==================== -->


</main>


<!-- ==================== Start Contact ==================== -->

<section class="contact-crev section-padding" data-scroll-index="7">
    <div class="contact-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="sec-lg-head md-mb80">
                        <h6 class="dot-titl-non mb-10 wow fadeIn">Get In Touch</h6>
                        <h2 class="fz-50 d-rotate wow">
                            <span class="rotate-text">Let's make your brand brilliant!</span>
                        </h2>
                        <p class="fz-15 mt-10 wow fadeIn">If you would like to work with us or just want to
                            get in
                            touch, we’d love to hear from you!</p>
                        <div class="phone fz-30 fw-600 mt-30 underline wow fadeIn">
                            <a href="home-personal.html#0">+1 840 841 25 69</a>
                        </div>
                        <ul class="rest social-text d-flex mt-60">
                            <li class="mr-30">
                                <a href="home-personal.html#0" class="hover-this"><span
                                        class="hover-anim">Facebook</span></a>
                            </li>
                            <li class="mr-30">
                                <a href="home-personal.html#0" class="hover-this"><span
                                        class="hover-anim">Twitter</span></a>
                            </li>
                            <li class="mr-30">
                                <a href="home-personal.html#0" class="hover-this"><span
                                        class="hover-anim">LinkedIn</span></a>
                            </li>
                            <li>
                                <a href="home-personal.html#0" class="hover-this"><span
                                        class="hover-anim">Instagram</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 valign">
                    <div class="full-width">
                        <form id="contact-form" method="post"
                            action="https://ui-themez.smartinnovates.net/items/geekfolio/dark/contact.php">

                            <div class="messages"></div>

                            <div class="controls row">

                                <div class="col-lg-6">
                                    <div class="form-group mb-30">
                                        <input id="form_name" type="text" name="name" placeholder="Name"
                                            required="required">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-30">
                                        <input id="form_email" type="email" name="email" placeholder="Email"
                                            required="required">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group mb-30">
                                        <input id="form_subject" type="text" name="subject" placeholder="Subject">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea id="form_message" name="message" placeholder="Message" rows="4"
                                            required="required"></textarea>
                                    </div>
                                    <div class="mt-30">
                                        <button type="submit" class="butn butn-full butn-bord radius-30">
                                            <span class="text">Let's Talk</span>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== End Contact ==================== -->

@endsection