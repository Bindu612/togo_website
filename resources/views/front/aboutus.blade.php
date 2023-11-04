@extends('front.layouts.main')
@section('section')

<section class="about__area pt-120">
    <div class="container">
 
    @foreach($aboutuss as $aboutus)
        <div class="row">
            <div class="col-xxl-12">
                <div class="certificate__content text-center">
                    <div class="section__title-wrapper mb-10">
                        <h2 class="section__title section__title-44 mb-20 text-white">You can be your own <br> Guiding
                            star
                            with our help!</h2>
                    </div>
                    <p class="text-white">{{$aboutus->about_us}}</p>
                </div>

                <img src="{{asset('front/assets/img/about/about-bg.png')}}" class="img-fluid">
            </div>
        </div>
        @endforeach
    </div>
</section>


<section class="research__area pt-50 pb-20">
    <div class="container">
        <div class="certificate__inner grey-bg-9 p-relative">
        @foreach($aboutuss as $aboutus)
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4">
                    <img src="{{asset('front/assets/img/about/widget-9.png')}}" class="img-fluid">
                    <h2 class="section__title section__title-44 mb-20 mt-20"><u>Mission</u></h2>
                </div>
                <div class="col-xxl-8 col-xl-8 col-lg-8 border-left pl-40 text-left">

                    <p>{{$aboutus->mission}}</p>

                </div>
            </div>
            @endforeach
            @foreach($aboutuss as $aboutus)   
            <div class="row pt-40">
                <div class="col-xxl-4 col-xl-4 col-lg-4" style="    align-self: center;">
                    <img src="{{asset('front/assets/img/about/widget-8.png')}}" class="img-fluid">
                    <h2 class="section__title section__title-44 mb-20 mt-20"><u>Vission</u></h2>



                </div>
                <div class="col-xxl-8 col-xl-8 col-lg-8 border-left pl-40 text-left">

                    <p>{{$aboutus->vission}}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section>
<div class="row justify-content-center">
            <div class="col-lg-8">
            <div class="text-center mb-7">
              <h3 class="fw-semibold">Frequently asked questions</h3>
              <p class="fw-normal mb-0 fs-4">Get to know more about ready-to-use admin dashboard templates</p><br>
            </div>
            <div class="accordion accordion-flush mb-5 card position-relative overflow-hidden" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed fs-5 fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    What is an Admin Dashboard?
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body fs-6 fw-semibold">
                    Admin Dashboard is the backend interface of a website or an application that helps to manage the 
                    website's overall content and settings. It is widely used by the site owners to keep track of their website, 
                    make changes to their content, and more.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed fs-5 fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    What should an admin dashboard template include?
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body fs-6 fw-semibold">
                    Admin dashboard template should include user & SEO friendly design with a variety of components and 
                    application designs to help create your own web application with ease. This could include customization 
                    options, technical support and about 6 months of future updates.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed fs-5 fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Why should I buy admin templates from AdminMart?
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body fs-6 fw-semibold">
                    Adminmart offers high-quality templates that are easy to use and fully customizable. With over 101,801 
                    happy customers & trusted by 10,000+ Companies. AdminMart is recognized as the leading online source 
                    for buying admin templates.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingfour">
                  <button class="accordion-button collapsed fs-5 fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                    Do Adminmart offers a money back guarantee?
                  </button>
                </h2>
                <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body fs-6 fw-semibold">
                    There is no money back guarantee in most companies, but if you are unhappy with our product, Adminmart 
                    gives you a 100% money back guarantee.
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>*
</section>




<!-- <section class="team__area yellow-bg1 pt-100 pb-50">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-xxl-6 col-xl-6 col-lg-6">
                <div class="section__title-wrapper-2 mb-40">
                    <span class="section__title-pre-2">Top Instructors</span>
                    <h3 class="section__title-2">Become A Instruction Instructor.</h3>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6">
                <div class="team__wrapper mb-45 pl-70">
                    <p>Placerat veritatis ullamco rutrum quia illo, aenean eaque necessitatibus aptent vehicula porta?
                        Sollicitudin id, laboris commodi! </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                <div class="team__item text-center mb-40">
                    <div class="team__thumb">
                        <div class="team__shape">
                            <img src="assets/img/team/team-shape-1.png" alt="">
                        </div>
                        <img src="assets/img/team/team-1.png" alt="">
                        <div class="team__social transition-3">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                        </div>
                    </div>
                    <div class="team__content">
                        <h3 class="team__title">
                            <a href="#">Melissa Jones</a>
                        </h3>
                        <span class="team__designation">Professor</span>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                <div class="team__item text-center mb-40">
                    <div class="team__thumb">
                        <div class="team__shape">
                            <img src="assets/img/team/team-shape-2.png" alt="">
                        </div>
                        <img src="assets/img/team/team-2.png" alt="">
                        <div class="team__social transition-3">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                        </div>
                    </div>
                    <div class="team__content">
                        <h3 class="team__title">
                            <a href="#">Morgan Key</a>
                        </h3>
                        <span class="team__designation">Teacher MBA</span>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                <div class="team__item text-center mb-40">
                    <div class="team__thumb">
                        <div class="team__shape">
                            <img src="assets/img/team/team-shape-3.png" alt="">
                        </div>
                        <img src="assets/img/team/team-3.png" alt="">
                        <div class="team__social transition-3">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                        </div>
                    </div>
                    <div class="team__content">
                        <h3 class="team__title">
                            <a href="#">Andra Flatcher </a>
                        </h3>
                        <span class="team__designation">Lead Teacher</span>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                <div class="team__item text-center mb-40">
                    <div class="team__thumb">
                        <div class="team__shape">
                            <img src="assets/img/team/team-shape-4.png" alt="">
                        </div>
                        <img src="assets/img/team/team-4.png" alt="">
                        <div class="team__social transition-3">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                        </div>
                    </div>
                    <div class="team__content">
                        <h3 class="team__title">
                            <a href="#">Oliver Porter</a>
                        </h3>
                        <span class="team__designation">Photogrepher</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->




@endsection