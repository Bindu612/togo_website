@extends('front.layouts.main')
@section('section')
<main>

    <!-- slider area start -->
    <section class="slider__area">
        <div class="slider__active swiper-container">
            <div class="swiper-wrapper">
                @foreach ($banners as $key => $banner )
                <div class="slider__item swiper-slide p-relative slider__height slider__height-3 d-flex align-items-center z-index-1"
                style="background-image:url('{{asset("front/assets/img/slider/slider-bg-1.png")}}')">
                <div class="container">
                    <section class="slider__area slider__height-2 include-bg d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-xxl-6 col-lg-6">
                                    <div class="slider__content-2 mt-30">
                                        <h4 class="slider__title-2">{{$banner->name}}</h4>
                                        <p>MoldTheFuture software is equally helpful in managing educational
                                            s functional and administrative work.We envision our software
                                            as a beacon of progress, guiding the way in skill-building and achieving
                                            superior learning outcomes. </p>
                                        <a href="about-us.php" class="tp-btn-green">Learn More</a>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6">
                                    <div class="slider__thumb-2 p-relative">
                                        <div class="slider__shape">

                                            {{-- <img class="slider__shape-4"
                                                src="{{asset('front/assets/img/slider/2/shape/slider-shape-1.png')}}" alt=""> --}}
                                            {{-- <img class="slider__shape-5"
                                                src="{{asset('front/assets/img/slider/2/shape/slider-shape-33.png')}}" alt=""> --}}
                                        </div>
                                        <span class="slider__thumb-mask">
                                            <img src="{{asset('assets/images/banner_image/')}}{{$banner->banner_image}}/" alt="">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
                @endforeach
               





            </div>
            <div class="main-slider-paginations main-slider-paginations-2">
                <button class="slider-button-next"><i class="fa-regular fa-arrow-right"></i></button>
                <button class="slider-button-prev"><i class="fa-regular fa-arrow-left"></i></button>
            </div>
        </div>
    </section>
    <!-- slider area end -->

    <!-- research area start -->
    <section class="research__area pt-115 pb-60 light-pink">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <div class="research__wrapper-2">
                        <div class="section__title-wrapper-2">
                            <h3 class="section__title-2">More than just learning, MoldTheFuture</h3>
                        </div>
                        <p>MoldTheFuture, as we imagine it, will dramatically transform the user and management
                            experiences. We also help to "shape tomorrow" by using a data-driven strategy. We create a
                            variety of reports to measure students' progress and future strategy.</p>
                        <div class="research__btn-2 mb-70">
                            <a href="contact.html" class="tp-btn-5 tp-btn-6">Explore Now</a>
                        </div>

                        <div class="research__download">
                            <div class="research__download-bg include-bg"
                                data-background="{{asset('front/assets/img/research/2/research-bg.jpg')}}"></div>
                            <div class="research__content-2 p-relative z-index-1">
                                <h3 class="research__title-2">Start Learning by Downloading Apps</h3>
                                <div class="research__store">
                                    <ul>
                                        <li>
                                            <a href="#"><img src="{{asset('front/assets/img/icon/google-play-store.png')}}"
                                                    alt="google-play-store"> Google play</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="{{asset('front/assets/img/icon/apple-store.png')}}"
                                                    alt="apple-store">Apple store</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="research__thumb-2">
                                <img src="{{asset('front/assets/img/research/2/research-1.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 offset-xxl-1 col-xl-5 offset-xl-1 col-lg-6">
                    <div class="research__features-wrapper pt-35">
                        <div class="research__features-item d-sm-flex align-items-start mb-40">
                            <div class="research__features-icon mr-25">
                                <span>
                                    <svg width="27" height="27" viewBox="0 0 27 27" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M26 13.9961V15.1656C26 19.8436 24.8875 21 20.45 21H6.55C2.1125 21 1 19.8305 1 15.1656V6.83443C1 2.16951 2.1125 1 6.55 1H8.5"
                                            stroke="#6151FB" stroke-width="1.6" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M13.5 21.5V25.5" stroke="#6151FB" stroke-width="1.6"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1 14.75H26" stroke="#6151FB" stroke-width="1.6"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M7.875 26H19.125" stroke="#6151FB" stroke-width="1.6"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M20.825 10.2127H14.875C13.15 10.2127 12.575 9.0627 12.575 7.9127V3.5127C12.575 2.1377 13.7 1.0127 15.075 1.0127H20.825C22.1 1.0127 23.125 2.0377 23.125 3.31269V7.9127C23.125 9.1877 22.1 10.2127 20.825 10.2127Z"
                                            stroke="#6151FB" stroke-width="1.6" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M24.6375 8.39985L23.125 7.33735V3.88735L24.6375 2.82485C25.3875 2.31235 26 2.62485 26 3.53735V7.69985C26 8.61235 25.3875 8.92485 24.6375 8.39985Z"
                                            stroke="#6151FB" stroke-width="1.6" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>
                            <div class="research__features-content">
                                <h4>Secure</h4>
                                <p>MoldTheFuture software is efficient in handling large set of data and your data is
                                    equally secure with this software.

                                </p>
                            </div>
                        </div>
                        <div class="research__features-item d-sm-flex align-items-start mb-40">
                            <div class="research__features-icon mr-25">
                                <span class="yellow-bg">
                                    <svg width="28" height="27" viewBox="0 0 28 27" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.4 19.746H6.47299C2.092 19.746 1 18.654 1 14.273V6.47299C1 2.092 2.092 1 6.47299 1H20.162C24.543 1 25.635 2.092 25.635 6.47299"
                                            stroke="#F4930E" stroke-width="1.7" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M11.3999 25.6218V19.7458" stroke="#F4930E" stroke-width="1.7"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1 14.5459H11.4" stroke="#F4930E" stroke-width="1.7"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M7.16211 25.6218H11.4001" stroke="#F4930E" stroke-width="1.7"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M26.9999 14.3509V21.7739C26.9999 24.8549 26.2329 25.6219 23.152 25.6219H18.537C15.456 25.6219 14.689 24.8549 14.689 21.7739V14.3509C14.689 11.2699 15.456 10.5029 18.537 10.5029H23.152C26.2329 10.5029 26.9999 11.2699 26.9999 14.3509Z"
                                            stroke="#F4930E" stroke-width="1.7" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M20.8179 21.4359H20.8296" stroke="#F4930E" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>
                            <div class="research__features-content">
                                <h4>Faster</h4>
                                <p> MoldTheFuture is a software designed and developed to ease the process of learning.
                                    MoldTheFuture software provides seamless experience in managing the activities of
                                    educational institutes.
                                </p>
                            </div>
                        </div>
                        <div class="research__features-item d-sm-flex align-items-start">
                            <div class="research__features-icon mr-25">
                                <span class="green-bg">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14.6185 23.8234H7.24516C3.5585 23.8234 2.3335 21.3734 2.3335 18.9118V9.08842C2.3335 5.40176 3.5585 4.17676 7.24516 4.17676H14.6185C18.3052 4.17676 19.5302 5.40176 19.5302 9.08842V18.9118C19.5302 22.5984 18.2935 23.8234 14.6185 23.8234Z"
                                            stroke="#20AD96" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M22.7736 19.9502L19.5303 17.6752V10.3135L22.7736 8.03849C24.3603 6.93015 25.6669 7.60682 25.6669 9.55515V18.4452C25.6669 20.3935 24.3603 21.0702 22.7736 19.9502Z"
                                            stroke="#20AD96" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M13.4165 12.8345C14.383 12.8345 15.1665 12.051 15.1665 11.0845C15.1665 10.118 14.383 9.33447 13.4165 9.33447C12.45 9.33447 11.6665 10.118 11.6665 11.0845C11.6665 12.051 12.45 12.8345 13.4165 12.8345Z"
                                            stroke="#20AD96" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>
                            <div class="research__features-content">
                                <h4>Reliable
                                </h4>
                                <p>MoldTheFuture software is reliable in terms of usage. Multiple features used in
                                    this software will guarantee better and efficient management of your educational
                                    .


                                </p>
                            </div>
                        </div>

                        <div class="research__features-item d-sm-flex align-items-start mt-40">
                            <div class="research__features-icon mr-25">
                                <span class="yellow-bg">
                                    <svg width="28" height="27" viewBox="0 0 28 27" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.4 19.746H6.47299C2.092 19.746 1 18.654 1 14.273V6.47299C1 2.092 2.092 1 6.47299 1H20.162C24.543 1 25.635 2.092 25.635 6.47299"
                                            stroke="#F4930E" stroke-width="1.7" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M11.3999 25.6218V19.7458" stroke="#F4930E" stroke-width="1.7"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1 14.5459H11.4" stroke="#F4930E" stroke-width="1.7"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M7.16211 25.6218H11.4001" stroke="#F4930E" stroke-width="1.7"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M26.9999 14.3509V21.7739C26.9999 24.8549 26.2329 25.6219 23.152 25.6219H18.537C15.456 25.6219 14.689 24.8549 14.689 21.7739V14.3509C14.689 11.2699 15.456 10.5029 18.537 10.5029H23.152C26.2329 10.5029 26.9999 11.2699 26.9999 14.3509Z"
                                            stroke="#F4930E" stroke-width="1.7" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M20.8179 21.4359H20.8296" stroke="#F4930E" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>
                            <div class="research__features-content">
                                <h4>Affordable</h4>

                                <p>MoldTheFuture software (SaaS) is completely customized as per the user. All these
                                    features will eye to solve the complexity of education management at an affordable
                                    price.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- research area end -->





    <section class="home2_area  p-relative" style="    background: linear-gradient(#000000, #252525);">
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 section-titles2">
                    <div class="about__thumb-wrapper d-sm-flex mr-20 p-relative">
                        <div class="section__title-wrapper mb-15">
                            <h2 class="section__title  text-white">End-to-end
                                event planning</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-8 col-xl-8 col-lg-8">
                    <div class="about__content pl-70 pr-25">

                        <p class="text-white">Empower your team with all the tools they need to streamline your event
                            planning process—be
                            it setting the event agenda, accepting sponsor proposals, addressing attendee questions, or
                            even hosting rehearsals.</p>

                        <img src="{{asset('front/assets/img/about/home-bg-section.png')}}" class="img-fluid">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="min">
        <div class="container">
            <div class="row justify-content-center mb-40">
                <div class="col-lg-7 col-md-10 text-center">
                    <div class="sec-heading center mb-4">
                        <h2>Explore Top <span class="text-megenta"> Features </span></h2>
                        <h5>Explore some of the advance and important feature.</h5>
                    </div>


                </div>
            </div>
            @foreach ($services as $service)
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="edu_cat_2 cat-1">
                        <div class="edu_cat_icons">
                            <a class="pic-main" href="#"><img src="{{asset('front/assets/img/edu/content.png')}}"
                                    class="img-fluid" alt=""></a>
                        </div>
                        <div class="edu_cat_data">
                            <h4 class="title"><a href="Online-registration-and-admission.php"> {{$service->name}}</a></h4>
                            <!-- <ul class="meta">
                                23 Classes</li>
                            </ul> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="edu_cat_2 cat-2">
                        <div class="edu_cat_icons">
                            <a class="pic-main" href="#"><img src="{{asset('front/assets/img/edu/briefcase.png')}}"
                                    class="img-fluid" alt=""></a>
                        </div>
                        <div class="edu_cat_data">
                            <h4 class="title"><a href="Student-management-system.php"> {{$service->name}}</a>
                            </h4>
                            <!-- <ul class="meta">
                                58 Classes</li>
                            </ul> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="edu_cat_2 cat-3">
                        <div class="edu_cat_icons">
                            <a class="pic-main" href="Staff-management-system.php"><img
                                    src="{{asset('front/assets/img/edu/career.png')}}" class="img-fluid" alt=""></a>
                        </div>
                        <div class="edu_cat_data">
                            <h4 class="title"><a href="Staff-management-system.php"> {{$service->name}}</a></h4>
                            <!-- <ul class="meta">
                                74 Classes</li>
                            </ul> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="edu_cat_2 cat-4">
                        <div class="edu_cat_icons">
                            <a class="pic-main" href="Fee management system.php"><img src="{{asset('front/assets/img/edu/python.png')}}"
                                    class="img-fluid" alt=""></a>
                        </div>
                        <div class="edu_cat_data">
                            <h4 class="title"><a href="Fee management system.php"> {{$service->name}}</a></h4>
                            <!-- <ul class="meta">
                                65 Classes</li>
                            </ul> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="edu_cat_2 cat-10">
                        <div class="edu_cat_icons">
                            <a class="pic-main" href="Examination and Result preparation.php"><img
                                    src="{{asset('front/assets/img/edu/designer.png')}}" class="img-fluid" alt=""></a>
                        </div>
                        <div class="edu_cat_data">
                            <h4 class="title"><a href="Examination and Result preparation.php"> {{$service->name}}
                                    </a></h4>
                            <!-- <ul class="meta">
                                43 Classes</li>
                            </ul> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="edu_cat_2 cat-6">
                        <div class="edu_cat_icons">
                            <a class="pic-main" href="Communication Management system.php"><img
                                    src="{{asset('front/assets/img/edu/speaker.png')}}" class="img-fluid" alt=""></a>
                        </div>
                        <div class="edu_cat_data">
                            <h4 class="title"><a href="Communication Management system.php"> 
                            {{$service->name}} </a></h4>
                            <!-- <ul class="meta">
                                82 Classes</li>
                            </ul> -->
                        </div>
                    </div>
                </div>


            </div>
            @endforeach

            <center>
                <div class="research__btn-2 pt-45">
                    <a href="feature.php" class="tp-btn-5 tp-btn-6">Explore Now</a>
                </div>
            </center>

        </div>
    </section>


    <section class="app__area app__bgExplore Top Categories pt-60 pb-60">
        <div class="container">
            <div class="app__inner theme-bg-3 p-relative fix">
                <div class="app__shape">
                    <img class="app__shape-1" src="{{asset('front/assets/img/app/app-shape-1.png')}}" alt="">
                    <img class="app__shape-2" src="{{asset('front/assets/img/app/app-shape-2.png')}}" alt="">
                </div>
                <div class="row align-items-center">
                    <div class="col-xxl-4 col-xl-12 col-lg-12">
                        <h1 class="section__title section__title-44 text-left text-white">What can you
                            do with an LMS?</h1>
                    </div>
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <div class="about__list mb-40">
                                <ul>
                                    <li><i class="fa-solid fa-check"></i> Develop a clear training and development
                                        strategy
                                    </li>
                                    <li><i class="fa-solid fa-check"></i> Attract the best talent</li>
                                    <li><i class="fa-solid fa-check"></i> Increase engagement</li>
                                    <li><i class="fa-solid fa-check"></i> Identify skill gaps</li>
                                    <li><i class="fa-solid fa-check"></i> Build a future-ready workforce</li>
                                    <li><i class="fa-solid fa-check"></i> Centralize management</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <div class="about__list mb-40">
                                <ul>
                                    <li><i class="fa-solid fa-check"></i> Align individual training to company goals
                                    </li>
                                    <li><i class="fa-solid fa-check"></i> Retain employees</li>
                                    <li><i class="fa-solid fa-check"></i> Improve your employer brand reputation</li>
                                    <li><i class="fa-solid fa-check"></i> Improve quality of work</li>
                                    <li><i class="fa-solid fa-check"></i> Simplify processes</li>
                                    <li><i class="fa-solid fa-check"></i> Learn on the go</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="education_area pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-xl-12 col-lg-12">
                    <h1 class="section__title section__title-44 text-left">Common challenges in the education industry
                    </h1>
                </div>
                <div class="col-xxl-8 col-xl-8 col-lg-8">
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <div class="mt-0">
                                <img src="{{asset('front/assets/img/about/icon1.png')}}" class="img-fluid mb-20"
                                    style="height:auto; width:20%">
                                <h4>Status: Unknown</h4>
                                <p>Students' progress can be evaluated only if their performance in all areas of growth
                                    is
                                    known. A gap in communication between teachers handling various courses, between
                                    teachers
                                    and students, or between teachers and parents can lead to an incomplete assessment.
                                </p>
                            </div>

                            <div class="mt-50">
                                <img src="{{asset('front/assets/img/about/icon2.png')}}" class="img-fluid mb-20"
                                    style="height:auto; width:20%">

                                <h4>Getting it right
                                </h4>
                                <p>Maintaining quality standards is an important aspect of any educational .
                                    Forgetting to check the quality of some critical lab equipment or a chemical
                                    solution can end up in disaster. Literally.</p>
                            </div>



                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">

                            <div class="mt-0">
                                <img src="{{asset('front/assets/img/about/icon3.png')}}" class="img-fluid mb-20"
                                    style="height:auto; width:20%">

                                <h4>Back to square one</h4>
                                <p>On-boarding new employees is always a chore. It can be a new teacher, someone wanting
                                    to try their hand at a new course, or a change in syllabus. All of this takes a lot
                                    of time and effort from someone else willing to spend it, in order to achieve.</p>
                            </div>

                            <div class="mt-50">
                                <img src="{{asset('front/assets/img/about/icon4.png')}}" class="img-fluid mb-20"
                                    style="height:auto; width:20%">

                                <h4>Waiting for the right person
                                </h4>
                                <p>We've all been in the situation where we had to spend hours trying to figure out who
                                    to
                                    get
                                    approval from for a particular request. Spending more time searching than actually
                                    doing
                                    is
                                    a clear sign of waste.</p>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- testimonial area start -->
    <!-- <section class="testimonial__area pt-80 pb-120 fix" style="background:url('{{asset("front/assets/img/home-ng.png")}});
            background-size: cover;
            background-position: left;">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="section__title-wrapper-2 mb-40 text-center">
                        <span class="section__title-pre-2">Testimonials</span>
                        <h3 class="section__title-2">What our Customers Say.</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-12">
                    <div class="testimonial__slider">
                        <div class="testimonial__active owl-carousel">
                            <div class="testimonial__item transition-3 text-center white-bg">
                                <div class="testimonial__avater">
                                    <img src="{{asset('front/assets/img/testimonial/testimonial-1.jpg')}}" alt="">
                                </div>
                                <div class="testimonial__text">
                                    <h4>Great quality!</h4>
                                    <p>This is an outstanding software managing learning, exams and reports and
                                        admission modules.
                                        The Staff are really cool and caring. Overall you should go for It.
                                    </p>
                                </div>
                                <div class="testimonial__avater-info mb-5">
                                    <h3>Dianne Ameter</h3>
                                    <span>UX Designer</span>
                                </div>
                                <div class="testimonial__rating">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="testimonial__item transition-3 text-center white-bg">
                                <div class="testimonial__avater">
                                    <img src="{{asset('front/assets/img/testimonial/testimonial-2.jpg')}}" alt="">
                                </div>
                                <div class="testimonial__text">
                                    <h4>Code Quality!</h4>
                                    <p>MoldTheFuture looks to solve the complete problem of educational s and
                                        in this section they are doing really great. Their services are one of the best
                                        in this industry.</p>
                                </div>
                                <div class="testimonial__avater-info mb-5">
                                    <h3>Douglas Lyphe</h3>
                                    <span>Devolopment</span>
                                </div>
                                <div class="testimonial__rating">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="testimonial__item transition-3 text-center white-bg">
                                <div class="testimonial__avater">
                                    <img src="{{asset('front/assets/img/testimonial/testimonial-3.jpg')}}" alt="">
                                </div>
                                <div class="testimonial__text">
                                    <h4>Customer Support</h4>
                                    <p>MoldTheFuture providing after sale service is outstanding. Staff are
                                        professionally trained and really cooperative.</p>
                                </div>
                                <div class="testimonial__avater-info mb-5">
                                    <h3>Russell Sprout</h3>
                                    <span>IT Specialist</span>
                                </div>
                                <div class="testimonial__rating">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="testimonial__item transition-3 text-center white-bg">
                                <div class="testimonial__avater">
                                    <img src="{{asset('front/assets/img/testimonial/testimonial-4.jpg')}}" alt="">
                                </div>
                                <div class="testimonial__text">
                                    <h4>Good Product</h4>
                                    <p>MoldTheFuture is a good software for school and other educational
                                        management, They are innovative and punctual. Go ahead with them for your work.
                                    </p>
                                </div>
                                <div class="testimonial__avater-info mb-5">
                                    <h3>Shahnewaz Sakil</h3>
                                    <span>Developer</span>
                                </div>
                                <div class="testimonial__rating">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- testimonial area end -->


    <!-- brand area start -->
    <section class="brand__area pt-70 pb-20 ">
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4">
                    <div class="brand__wrapper">
                        <div class="section__title-wrapper-2">
                            <span class="section__title-pre-2">Testimonials</span>
                            <h3 class="section__title-2 section__title-2-30">Who will you learn with?</h3>
                        </div>
                        <p>You can list your partners or instructors's brands here to show off your site's reputation
                        </p>
                        <div class="brand__btn">
                            <a href="about.html" class="tp-btn-5 tp-btn-6">View all partners</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-8 col-xl-8 col-lg-8">
                    <div class="brand__item-wrapper pl-100">
                        <div class="row align-items-center">
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
                                <div class="brand__item text-center m-img mb-40">
                                    <img src="{{asset('front/assets/img/brand/brand-1.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
                                <div class="brand__item text-center m-img mb-40">
                                    <img src="{{asset('front/assets/img/brand/brand-2.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
                                <div class="brand__item text-center m-img mb-40">
                                    <img src="{{asset('front/assets/img/brand/brand-3.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
                                <div class="brand__item text-center m-img mb-40">
                                    <img src="{{asset('front/assets/img/brand/brand-4.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
                                <div class="brand__item text-center m-img mb-40">
                                    <img src="{{asset('front/assets/img/brand/brand-5.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
                                <div class="brand__item text-center m-img mb-40">
                                    <img src="{{asset('front/assets/img/brand/brand-6.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
                                <div class="brand__item text-center m-img mb-40">
                                    <img src="{{asset('front/assets/img/brand/brand-7.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- brand area end -->


    <section class="app__area app__bgExplore Top Categories">
        <div class="container">
            <div class="app__inner theme-bg-3 p-relative fix">
                <div class="app__shape">
                    <img class="app__shape-1" src="{{asset('front/assets/img/app/app-shape-1.png')}}" alt="">
                    <img class="app__shape-2" src="{{asset('front/assets/img/app/app-shape-2.png')}}" alt="">
                </div>
                <div class="row align-items-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="app__wrapper p-relative z-index-1">
                            <h3 class="app__title"> Cooming Soon</h3>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div
                            class="app__download p-relative z-index-1 d-sm-flex align-items-center justify-content-lg-end">
                            <div class="app__item mr-15">
                                <a href="#">
                                    <span><img src="{{asset('front/assets/img/app/google-play.png')}}" alt=""></span>
                                    Google play
                                </a>
                            </div>
                            <div class="app__item">
                                <a href="#"
                                    class="active swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                                    <span class="apple"><img src="{{asset('front/assets/img/app/apple.png')}}" alt=""></span>
                                    Apple Store
                                    <span class="swiper-notification" aria-live="assertive"
                                        aria-atomic="true"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>
@endsection

