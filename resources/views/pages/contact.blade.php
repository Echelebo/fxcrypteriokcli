@php
    
    $page_title = 'Contact Us';
    $short_description = 'We are available 24/7. You can reach us via any of the means below.';
    
@endphp

{{-- layout --}}
@extends('layouts.front')





@section('contents')
    {{-- breadcrumb --}}
    @include('pages.breadcrumb')

   <!-- ===============>> Contact section start here <<================= -->
  <div class="contact padding-top padding-bottom">
    <div class="container">
      <div class="contact__wrapper">
        <div class="row g-5">
          <div class="col-md-5">
            <div class="contact__info" data-aos="fade-right" data-aos-duration="1000">
              <div class="contact__social">
                <h3>let’s <span>get in touch</span>
                  with us</h3>
                <ul class="social">
                  <li class="social__item">
                    <a href="#" class="social__link social__link--style4 active"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li class="social__item">
                    <a href="#" class="social__link social__link--style4 "><i class="fab fa-instagram"></i></a>
                  </li>
                  <li class="social__item">
                    <a href="#" class="social__link social__link--style4"><i class="fa-brands fa-linkedin-in"></i></a>
                  </li>
                  <li class="social__item">
                    <a href="#" class="social__link social__link--style4"><i class="fab fa-youtube"></i></a>
                  </li>
                  <li class="social__item">
                    <a href="#" class="social__link social__link--style4"><i class="fab fa-twitter"></i></a>
                  </li>
                </ul>
              </div>
              <div class="contact__details">
                <div class="contact__item" data-aos="fade-right" data-aos-duration="1000">
                  <div class="contact__item-inner">
                    <div class="contact__item-thumb">
                      <span><img src="/asset/images/contact/1.png" alt="contact-icon" class="dark"></span>
                    </div>
                    <div class="contact__item-content">
                      <p>
                        Call
                      </p>
                      <p>
                        {{ site('phone') }}
                      </p>
                    </div>
                  </div>
                </div>
                <div class="contact__item" data-aos="fade-right" data-aos-duration="1100">
                  <div class="contact__item-inner">
                    <div class="contact__item-thumb">
                      <span><img src="/asset/images/contact/2.png" alt="contact-icon" class="dark"></span>
                    </div>
                    <div class="contact__item-content">
                      <p>
                        Email
                      </p>
                      <p>
                        {{ site('email') }}
                      </p>
                    </div>
                  </div>
                </div>
                <div class="contact__item" data-aos="fade-right" data-aos-duration="1200">
                  <div class="contact__item-inner">
                    <div class="contact__item-thumb">
                      <span><img src="/asset/images/contact/3.png" alt="contact-icon" class="dark"></span>
                    </div>
                    <div class="contact__item-content">
                      <p>
                        Address
                      </p>
                      <p>
                        {{ site('address') }}, {{ site('city') }}, {{ site('state') }},
                                        {{ site('country') }}
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <div class="contact__form">
              <form action="{{ route('contact-validate') }}" method="post" enctype="multipart/form-data" data-aos="fade-left" data-aos-duration="1000">
                  @csrf
                <div class="row g-4">
                    <div class="col-12">
                    <div>
                      <label for="email" class="form-label">Email</label>
                      <input class="form-control" type="email" name="email" id="email" placeholder="Email here">
                    </div>
                  </div>
                  <div class="col-12">
                    <div>
                      <label for="subject" class="form-label">Subject</label>
                      <input class="form-control" name="subject" type="text" id="subject" placeholder="Subject">
                    </div>
                  </div>
                  
                  <div class="col-12">
                    <div>
                      <label for="textarea" class="form-label">Message</label>
                      <textarea cols="30" rows="5" class="form-control" name="message" id="textarea"
                        placeholder="Enter Your Message"></textarea>
                    </div>
                  </div>
                </div>
                <button type="submit" class="trk-btn trk-btn--border trk-btn--primary mt-4 d-block">contact us
                  now</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="contact__shape">
      <span class="contact__shape-item contact__shape-item--1"><img src="/asset/images/contact/4.png"
          alt="shape-icon"></span>
      <span class="contact__shape-item contact__shape-item--2"> <span></span> </span>
    </div>
  </div>
  <!-- ===============>> Contact section start here <<================= -->
@endsection

@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
@endpush

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <script src="{{ asset('assets/scripts/main.js') }}"></script>
@endsection
