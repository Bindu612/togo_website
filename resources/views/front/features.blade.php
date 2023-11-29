@extends('front.layouts.main')

@section('SEO')
    <meta name="description"
        content="School management is an important part of any educational system. Here are some unavoidable characteristics of Effective School Management Software.
        ">
@endsection
@section('section')
    <section class="category__area pt-150 pb-30" style="background: #00383d;">
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4">
                    <div class="category__wrapper">
                        <div class="section__title-wrapper-2">
                            <h3 class="section__title-2 section__title-2-30 text-white"><u>Explore our Popular Features</u>
                            </h3>
                        </div>
                        <p class="text-white">A school is an educational institution where students receive instruction and
                            training to acquire knowledge, skills, and prepare for future opportunities.</p>
                        <!-- <div class="category__btn">
                                                                                            <a href="#" class="tp-btn-5">Browse all categories</a>
                                                                                        </div> -->
                    </div>
                </div>
                <div class="col-xxl-8 col-xl-8 col-lg-8">
                    <div class="category__item-wrapper">
                        <div class="row">
                            @foreach ($services as $key => $service)
                                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-4 col-6">
                                    <div class="category__item text-center mb-45">
                                        <div class="category__icon">
                                            <a class="pic-main" href="#"><img
                                                    src="{{ asset('assets/images/service_image/' . $service->image) }}"
                                                    class="img-fluid" alt="" style="height:auto; width:70%"></a>

                                        </div>
                                        <div class="category__content">
                                            <h4 class="category__title">
                                                <a href="#"> {{ $service->name }}</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!-- <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-4 col-6">
                                                                                                <div class="category__item text-center mb-45">
                                                                                                    <div class="category__icon pink-bg">
                                                                                                    <a class="pic-main" href="#"><img src="{{ asset('front/assets/img/edu/briefcase.png') }}" class="img-fluid" alt="" style="height:auto; width:70%"></a>
                                                                                                    </div>
                                                                                                    <div class="category__content">
                                                                                                        <h4 class="category__title">
                                                                                                            <a href="#"> Student Management System</a>
                                                                                                        </h4>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-4 col-6">
                                                                                                <div class="category__item text-center mb-45">
                                                                                                    <div class="category__icon green-bg">
                                                                                                    <a class="pic-main" href="Staff-management-system.php"><img src="{{ asset('front/assets/img/edu/career.png') }}" class="img-fluid" alt="" style="height:auto; width:70%"></a>

                                                                                                    </div>
                                                                                                    <div class="category__content">
                                                                                                        <h4 class="category__title">
                                                                                                            <a href="#"> Staff Management System</a>
                                                                                                        </h4>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-4 col-6">
                                                                                                <div class="category__item text-center mb-45">
                                                                                                    <div class="category__icon orange-bg">
                                                                                                    <a class="pic-main" href="Fee management system.php"><img src="{{ asset('front/assets/img/edu/python.png') }}" class="img-fluid" alt="" style="height:auto; width:75%"></a>

                                                                                                    </div>
                                                                                                    <div class="category__content">
                                                                                                        <h4 class="category__title">
                                                                                                            <a href="#"> Fee Management System</a>
                                                                                                        </h4>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-4 col-6">
                                                                                                <div class="category__item text-center mb-45">
                                                                                                    <div class="category__icon">
                                                                                                    <a class="pic-main" href="Examination and Result preparation.php"><img src="{{ asset('front/assets/img/edu/designer.png') }}" class="img-fluid" alt="" style="height:auto; width:70%"></a>

                                                                                                    </div>
                                                                                                    <div class="category__content">
                                                                                                        <h4 class="category__title">
                                                                                                            <a href="#"> Examination and Result preparation</a>
                                                                                                        </h4>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-4 col-6">
                                                                                                <div class="category__item text-center mb-45">
                                                                                                    <div class="category__icon purple-bg">
                                                                                                    <a class="pic-main" href="Communication Management system.php"><img src="{{ asset('front/assets/img/edu/speaker.png') }}" class="img-fluid" alt="" style="height:auto; width:60%"></a>

                                                                                                    </div>
                                                                                                    <div class="category__content">
                                                                                                        <h4 class="category__title">
                                                                                                            <a href="#"> Communication Management System</a>
                                                                                                        </h4>
                                                                                                    </div>
                                                                                                </div> -->
                            <!-- </div> -->


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="featuress__area pt-50 pb-50">
        <div class="container">





            <div class="row">
                @foreach ($services as $key => $service)
                    <div class="col-xl-5 col-lg-5 col-xxl-5 col-md-6 col-sm-12 feature-three mt-10 mr-20 ml-auto">
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <h3> {{ $service->name }}</h3>
                                <p class="text-dark"> {{ $service->description }}
                                </p>
                            </div>
                            <div class="col-md-12 col-lg-12 mt-20">
                                <img src="{{ asset('assets/images/service_image/' . $service->image) }}" class="img-fluid">
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>






        </div>
        </div>
    </section>
@endsection
