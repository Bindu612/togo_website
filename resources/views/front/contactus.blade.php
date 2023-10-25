@extends('front.layouts.main')
@section('section')



<!-- contact area start -->

<section class="contact__area pt-115 pb-120">
   <div class="container">
      <div class="row">
         <div class="col-xxl-7 col-xl-7 col-lg-6">
            <div class="contact__wrapper">
               <div class="section__title-wrapper mb-40">
                  <h2 class="section__title">Get in<span class="yellow-bg yellow-bg-big"> touch<img src="assets/img/shape/yellow-bg.html" alt=""></span></h2>
                  <p>Have a question or just want to say hi? We'd love to hear from you.</p>
               </div>
               @if(session('success'))
                            <div id="success-message" class="alert alert-success">
                                {{ session('success') }}
                            </div>
               @endif
               <div class="contact__form">
                  <form id="contact-form"action="{{ route('front.contactus') }}" method="post">
                  @csrf
                     <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-md-6">
                           <div class="contact__form-input">
                              <input name="your_name" type="text" placeholder="Your Name" value="{{ old('your_name') }}" required>
                           </div>
                           @error('your_name')
                                        <span class="text-danger">{{ $message }}</span>
                           @enderror
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-md-6">
                           <div class="contact__form-input">
                              <input name="subject" type="text" placeholder="Subject" value="{{ old('subject') }}" required>
                           </div>
                           @error('subject')
                                        <span class="text-danger">{{ $message }}</span>
                           @enderror
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-md-6">
                           <div class="contact__form-input">
                                        <input type="number" id="phone" name="phone" class="form-control" placeholder="Phone No"  value="{{ old('phone') }}">
                           </div>
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-md-6">
                           <div class="contact__form-input">
                              <input name="email" type="email" placeholder="Your Email" value="{{ old('email') }}" required>
                           </div>
                           @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                           @enderror
                        </div>
                        
                        <div class="col-xxl-12">
                           <div class="contact__form-input">
                              <textarea name="message" placeholder="Enter Your Message">{{ old('message') }}</textarea>
                           </div>
                        </div>
                        <div class="col-xxl-12">
                           <div class="contact__form-agree  d-flex align-items-center mb-20">
                              <input class="e-check-input" type="checkbox" id="e-agree" required>
                              <label class="e-check-label" for="e-agree">I agree to the<a href="#">Terms & Conditions</a></label>
                           </div>
                        </div>
                        <div class="col-xxl-12">
                           <div class="contact__btn">
                              <button type="submit" class="tp-btn88">Send your message</button>
                           </div>
                           <p class="ajax-response"></p>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <div class="col-xxl-4 offset-xxl-1 col-xl-4 offset-xl-1 col-lg-5 offset-lg-1">
            <div class="contact__info white-bg p-relative z-index-1">
               <div class="contact__shape">
                  <img class="contact-shape-1" src="assets/img/contact/contact-shape-1.html" alt="">
                  <img class="contact-shape-2" src="assets/img/contact/contact-shape-2.html" alt="">
                  <img class="contact-shape-3" src="assets/img/contact/contact-shape-3.html" alt="">
               </div>
               <div class="contact__info-inner white-bg">
                  <ul>  
                  @foreach ($data as $key => $setting)
                     <li>
                        <div class="contact__info-item d-flex align-items-start mb-35">
                           <div class="contact__info-icon mr-15">
                              <svg class="map" viewBox="0 0 24 24">
                                 <path class="st0" d="M21,10c0,7-9,13-9,13s-9-6-9-13c0-5,4-9,9-9S21,5,21,10z" />
                                 <circle class="st0" cx="12" cy="10" r="3" />
                              </svg>
                           </div>
                           <div class="contact__info-text">
                              <h4>Jamshedpur Office</h4>
                              <p><a target="_blank" href="https://maps.app.goo.gl/EyBsNE2TSKXKbxrf8"> {{$setting->address}}</a></p>

                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="contact__info-item d-flex align-items-start mb-35">
                           <div class="contact__info-icon mr-15">
                              <svg class="mail" viewBox="0 0 24 24">
                                 <path class="st0" d="M4,4h16c1.1,0,2,0.9,2,2v12c0,1.1-0.9,2-2,2H4c-1.1,0-2-0.9-2-2V6C2,4.9,2.9,4,4,4z" />
                                 <polyline class="st0" points="22,6 12,13 2,6 " />
                              </svg>
                           </div>
                           <div class="contact__info-text">
                              <h4>Email us directly</h4>
                              <p><a href="mailto:info@Moldthefuture.com"><span class="__cf_email__" data-cfemail="493a3c3939263b3d092c2d3c222c3b672a2624">{{$setting->email}}</span></a></p>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="contact__info-item d-flex align-items-start mb-35">
                           <div class="contact__info-icon mr-15">
                              <svg class="call" viewBox="0 0 24 24">
                                 <path class="st0" d="M22,16.9v3c0,1.1-0.9,2-2,2c-0.1,0-0.1,0-0.2,0c-3.1-0.3-6-1.4-8.6-3.1c-2.4-1.5-4.5-3.6-6-6  c-1.7-2.6-2.7-5.6-3.1-8.7C2,3.1,2.8,2.1,3.9,2C4,2,4.1,2,4.1,2h3c1,0,1.9,0.7,2,1.7c0.1,1,0.4,1.9,0.7,2.8c0.3,0.7,0.1,1.6-0.4,2.1  L8.1,9.9c1.4,2.5,3.5,4.6,6,6l1.3-1.3c0.6-0.5,1.4-0.7,2.1-0.4c0.9,0.3,1.8,0.6,2.8,0.7C21.3,15,22,15.9,22,16.9z" />
                              </svg>
                           </div>
                           <div class="contact__info-text">
                              <h4>Phone</h4>
                              <p><a href="tel:+91 898 7660 188 ">{{$setting->phone1}} </a></p>
                              <p><a href="tel:+91 91424 86865">{{$setting->phone2}}</a></p>
                           </div>
                        </div>
                     </li>
                     @endforeach
                  </ul>
                  <div class="contact__social pl-30">
                     <h4>Follow Us</h4>
                     <ul>
                        <li><a href=" https://www.facebook.com/profile.php?id=61550925572834" class="fb" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/100742223/admin/feed/posts/" class="tw" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                        <li><a href="https://instagram.com/_moldthefuture?igshid=NjIwNzIyMDk2Mg==" class="tw" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                        <!-- <li><a href="#" class="pin" ><i class="fa-brands fa-pinterest-p"></i></a></li> -->
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>


<section class="course__area pt-15 pb-10 grey-bg-4">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-xxl-8 col-xl-8 col-lg-8">
                <div
                    class="course__enroll-wrapper mt-40 p-relative d-sm-flex align-items-center justify-content-between include-bg">
                    <div class="course__enroll-icon">
                        <span>
                            <svg width="28" height="34" viewBox="0 0 28 34" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_d_268_615)">
                                    <path
                                        d="M7.59649 15.161H11.2015V23.561C11.2015 25.521 12.2632 25.9177 13.5582 24.4477L22.3898 14.4144C23.4748 13.1894 23.0198 12.1744 21.3748 12.1744H17.7698V3.77435C17.7698 1.81435 16.7082 1.41769 15.4132 2.88769L6.58149 12.921C5.50816 14.1577 5.96316 15.161 7.59649 15.161Z"
                                        fill="white"></path>
                                </g>
                                <defs>
                                    <filter id="filter0_d_268_615" x="2" y="2" width="24.9795" height="31.3354"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha">
                                        </feColorMatrix>
                                        <feOffset dy="4"></feOffset>
                                        <feGaussianBlur stdDeviation="2"></feGaussianBlur>
                                        <feComposite in2="hardAlpha" operator="out"></feComposite>
                                        <feColorMatrix type="matrix"
                                            values="0 0 0 0 0.825 0 0 0 0 0.38207 0 0 0 0 0 0 0 0 0.5 0">
                                        </feColorMatrix>
                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                            result="effect1_dropShadow_268_615"></feBlend>
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_268_615"
                                            result="shape"></feBlend>
                                    </filter>
                                </defs>
                            </svg>
                        </span>
                    </div>
                    <div class="course__enroll-content">
                        <p>Let Us Help</p>
                        <h4>Start your school's growth journey</h4>
                    </div>
                    <div class="course__enroll-btn pt-5">
                        <a href="contact-us.php" class="tp-btn-5 tp-btn-11">Contact Us for Demo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- contact area end -->




@endsection
@push('custom-scripts')
<script>
    setTimeout(function() {
        var successMessage = document.getElementById('success-message');
        if (successMessage) {
            successMessage.style.display = 'none';
        }
    }, 3000);
</script>
@endpush
