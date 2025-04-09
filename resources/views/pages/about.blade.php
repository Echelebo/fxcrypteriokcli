@php

use App\Models\DepositCoin;

$logos = DepositCoin::inRandomOrder()
        ->take(20)
        ->get('logo_url');
    
    $page_title = 'About ' . site('name');
    $short_description = site('name') . ' uses advanced Ai robots trained on extensive trading data and algorithms to analyze market trends and execute profitable trades with high precision.';
    
@endphp

{{-- layout --}}
@extends('layouts.front')





@section('contents')
    {{-- breadcrumb --}}
    @include('pages.breadcrumb')
    
    
    <!-- ===============>> Story section start here <<================= -->
  <div class="story padding-top bg-color-3">
    <div class="container" >
      <div class="story__wrapper">
        <div class="story__thumb" >
          <div class="story__thumb-inner" data-aos="fade-up" data-aos-duration="800">
            <img src="/asset/images/about/4.png" alt="story-image">
            <div class="story__thumb-playbtn">
              <a href="https://www.youtube.com/watch?v=uJSgaPIvgKk&amp;ab_channel=FreeTemplates" data-fslightbox><i
                  class="fa-solid fa-circle-play"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="story__shape">
      <span class="story__shape-item story__shape-item--1"><span></span> </span>
    </div>
  </div>
  <!-- ===============>> Story section end here <<================= -->





  <!-- ===============>> About section start here <<================= -->
  <section class="about about--style1 ">
    <div class="container">
      <div class="about__wrapper">
        <div class="row gx-5  gy-4 gy-sm-0  align-items-center">
          <div class="col-lg-6">
            <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
              <div class="about__thumb-inner">
                <div class="about__thumb-image floating-content">
                  <img class="dark" src="/asset/images/about/1.png" alt="about-image">
                  <div class="floating-content__top-left" data-aos="fade-right" data-aos-duration="1000">
                    <div class="floating-content__item">
                      <h3 style="font-size: 3rem; font-weight: bold;"> <span class="purecounter" data-purecounter-start="0" data-purecounter-end="5">30</span>
                        Years
                      </h3>
                      <p>Trading Experience</p>
                    </div>
                  </div>
                  <div class="floating-content__bottom-right" data-aos="fade-right" data-aos-duration="1000">
                    <div class="floating-content__item">
                      <h3 style="font-size: 3rem; font-weight: bold;"> <span class="purecounter" data-purecounter-start="0" data-purecounter-end="25">25K</span>K+
                      </h3>
                      <p>Satisfied Customers</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="about__content" data-aos="fade-left" data-aos-duration="800">
              <div class="about__content-inner">
                <h2 style="font-size: 3.5rem; font-weight: bold;">Meet <span>{{site('name')}}</span> unless miss the opportunity </h2>

                <p class="mb-0">Hey there! So glad you stopped by to Meet {{site('name')}}. Don't miss out on this
                  opportunity to learn about crypto-currencies trading and the amazing team that makes it all happen! {{site('name')}} is
                  all about creating innovative solutions and providing top-notch services to our clients. From start to
                  finish, we're dedicated to delivering advanced expert and robots trained on extensive trading data and algorithms to analyze market trends and execute profitable trades with high precision. </p>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ===============>> About section start here <<================= -->





  <!-- ========== Roadmap Section start Here========== -->
  <section class="roadmap roadmap--style2 padding-top  padding-bottom bg-color">
    <div class="container">
      <div class="section-header section-header--max50">
        <h2 class="mb-10 mt-minus-5" style="font-size: 2.8rem; font-weight: bold;"> <span class="style2">Roadmap </span> of plarform</h2>
        <p>A product roadmap shows the path ahead, helps teams plan, and guides the delivery of the product.</p>
      </div>
      <div class="roadmap__wrapper">
        <div class="roadmap__upper">
          <div class="roadmap__upper-inner">
            <div class="swiper">
              <div class="roadmap__slider">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="roadmap__item active">
                      <div class="roadmap__item-inner roadmap__item-inner--vertical-line-bottom">
                        <div class="roadmap__item-content">
                          <h5 style="font-size: 1.5rem; font-weight: bold;">Idea</h5>
                          <p>Got a crazy idea, hear me out:  automated trading machine.</p>
                        </div>
                        <div class="roadmap__item-date">
                          <span>Jan 01, 2020</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="roadmap__item roadmap__item--reverse">
                      <div class="roadmap__item-inner roadmap__item-inner--vertical-line-top">
                        <div class="roadmap__item-content">
                          <h5 style="font-size: 1.5rem; font-weight: bold;">Framing</h5>
                          <p>Just hang it up, but make sure it's straight. Done.</p>
                        </div>
                        <div class="roadmap__item-date">
                          <span>Mar 15, 2020 </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="roadmap__item">
                      <div class="roadmap__item-inner roadmap__item-inner--vertical-line-bottom">
                        <div class="roadmap__item-content">
                          <h5 style="font-size: 1.5rem; font-weight: bold;">Design</h5>
                          <p>Design can make things look good and function better.</p>
                        </div>
                        <div class="roadmap__item-date">
                          <span>Feb 01, 2021</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="roadmap__item roadmap__item--reverse">
                      <div class="roadmap__item-inner roadmap__item-inner--vertical-line-top">
                        <div class="roadmap__item-content">
                          <h5 style="font-size: 1.5rem; font-weight: bold;">Development</h5>
                          <p>Development is an important aspect of life, keep growing!</p>
                        </div>
                        <div class="roadmap__item-date">
                          <span>Aug 29, 2021</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="roadmap__item">
                      <div class="roadmap__item-inner roadmap__item-inner--vertical-line-bottom">
                        <div class="roadmap__item-content">
                          <h5 style="font-size: 1.5rem; font-weight: bold;">Testing</h5>
                          <p>Testing is the ultimate game of figuring out what works.</p>
                        </div>
                        <div class="roadmap__item-date">
                          <span>Mar 11, 2022</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide ">
                    <div class="roadmap__item roadmap__item--reverse">
                      <div class="roadmap__item-inner roadmap__item-inner--vertical-line-top">
                        <div class="roadmap__item-content">
                          <h5 style="font-size: 1.5rem; font-weight: bold;">Launched</h5>
                          <p>We launched our new product and we are thrilled!</p>
                        </div>
                        <div class="roadmap__item-date">
                          <span>Jan 03, 2023</span>
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
  <!-- ========== Roadmap Section Ends Here========== -->






  <!-- ===============>> Team section start here <<================= -->
  <section class="team padding-top padding-bottom">
    <div class="section-header section-header--max50">
      <h2 class="mb-10 mt-minus-5" style="font-size: 3rem; font-weight: bold;">Meet with <span class="style2">our team</span></h2>
    </div>
    <div class="container">
      <div class="team__wrapper">
        <div class="row g-4 align-items-center">
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="800">
              <div class="team__item-inner team__item-inner--shape">
                <div class="team__item-thumb team__item-thumb--style2">
                  <img src="/asset/images/team/home2/1.png" alt="Team Image" class="dark">
                </div>
                <div class="team__item-content ">
                  <div class="team__item-author team__item-author--style2">
                    <div class="team__item-authorinfo">
                      <h6 class="mb-0" style="font-size: 1.1rem; font-weight: bold;"><a href="#" class="stretched-link">Bogdan Constantin</a> </h6>
                      <p class="mb-0">Trade Captain</p>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="900">
              <div class="team__item-inner team__item-inner--shape">
                <div class="team__item-thumb team__item-thumb--style2">
                  <img src="/asset/images/team/home2/2.png" alt="Team Image" class="dark">
                </div>
                <div class="team__item-content ">
                  <div class="team__item-author team__item-author--style2">
                    <div class="team__item-authorinfo">
                      <h6 class="mb-0" style="font-size: 1.1rem; font-weight: bold;"><a href="#" class="stretched-link">Mechale smith</a> </h6>
                      <p class="mb-0">Financial Consultant</p>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="1000">
              <div class="team__item-inner team__item-inner--shape">
                <div class="team__item-thumb team__item-thumb--style2">
                  <img src="/asset/images/team/home2/3.png" alt="Team Image" class="dark">
                </div>
                <div class="team__item-content ">
                  <div class="team__item-author team__item-author--style2">
                    <div class="team__item-authorinfo">
                      <h6 class="mb-0" style="font-size: 1.1rem; font-weight: bold;"><a href="#" class="stretched-link">Marius Gherghe</a> </h6>
                      <p class="mb-0">Operation Consultant</p>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="1100">
              <div class="team__item-inner team__item-inner--shape">
                <div class="team__item-thumb team__item-thumb--style2">
                  <img src="/asset/images/team/home2/4.png" alt="Team Image" class="dark">
                </div>
                <div class="team__item-content ">
                  <div class="team__item-author team__item-author--style2">
                    <div class="team__item-authorinfo">
                      <h6 class="mb-0" style="font-size: 1.1rem; font-weight: bold;"><a href="#" class="stretched-link">Dang Xuan</a> </h6>
                      <p class="mb-0">Trade Consultant</p>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="800">
              <div class="team__item-inner team__item-inner--shape">
                <div class="team__item-thumb team__item-thumb--style2">
                  <img src="/asset/images/team/home2/5.png" alt="Team Image" class="dark">
                </div>
                <div class="team__item-content ">
                  <div class="team__item-author team__item-author--style2">
                    <div class="team__item-authorinfo">
                      <h6 class="mb-0" style="font-size: 1.1rem; font-weight: bold;"><a href="#" class="stretched-link">Petrisor Obae</a> </h6>
                      <p class="mb-0">HR Consultant</p>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="900">
              <div class="team__item-inner team__item-inner--shape">
                <div class="team__item-thumb team__item-thumb--style2">
                  <img src="/asset/images/team/home2/6.png" alt="Team Image" class="dark">
                </div>
                <div class="team__item-content ">
                  <div class="team__item-author team__item-author--style2">
                    <div class="team__item-authorinfo">
                      <h6 class="mb-0" style="font-size: 1.1rem; font-weight: bold;"><a href="#" class="stretched-link">Paul George</a> </h6>
                      <p class="mb-0">Technology Consultant</p>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="1000">
              <div class="team__item-inner team__item-inner--shape">
                <div class="team__item-thumb team__item-thumb--style2">
                  <img src="/asset/images/team/home2/7.png" alt="Team Image" class="dark">
                </div>
                <div class="team__item-content ">
                  <div class="team__item-author team__item-author--style2">
                    <div class="team__item-authorinfo">
                      <h6 class="mb-0" style="font-size: 1.1rem; font-weight: bold;"><a href="#" class="stretched-link">Cosmin Nae</a> </h6>
                      <p class="mb-0">Customer Consultant</p>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="1100">
              <div class="team__item-inner team__item-inner--shape">
                <div class="team__item-thumb team__item-thumb--style2">
                  <img src="/asset/images/team/home2/8.png" alt="Team Image" class="dark">
                </div>
                <div class="team__item-content ">
                  <div class="team__item-author team__item-author--style2">
                    <div class="team__item-authorinfo">
                      <h6 class="mb-0" style="font-size: 1.1rem; font-weight: bold;"><a href="#" class="stretched-link">Gabi Safta</a> </h6>
                      <p class="mb-0">Project Manager</p>
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
  <!-- ===============>> Team section start here <<================= -->






  <!-- ===============>> cta section start here <<================= -->
  <section class="cta padding-top padding-bottom  bg-color">
    <div class="container">
      <div class="cta__wrapper">
        <div class="cta__newsletter justify-content-center">
          <div class="cta__newsletter-inner" data-aos="fade-up" data-aos-duration="1000">
            <div class="cta__thumb">
              <img src="/asset/images/cta/3.png" alt="cta-thumb">
            </div>
            <div class="cta__subscribe">
              <h2 > <span>Subscribe</span> our news</h2>
              <p>Hey! Are you tired of missing out on our updates? Subscribe to our news now and stay in the loop!</p>
              <form class="cta-form cta-form--style2 form-subscribe" action="#">
                <div class="cta-form__inner d-sm-flex align-items-center">
                  <input type="email" class="form-control form-control--style2 mb-3 mb-sm-0"
                    placeholder="Email Address">
                  <button class="trk-btn  trk-btn--large trk-btn--secondary2" type="submit">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="cta__shape">
          <span class="cta__shape-item cta__shape-item--1"><img src="/asset/images/cta/2.png" alt="shape icon"></span>
          <span class="cta__shape-item cta__shape-item--2"><img src="/asset/images/cta/4.png" alt="shape icon"></span>
          <span class="cta__shape-item cta__shape-item--3"><img src="/asset/images/cta/5.png" alt="shape icon"></span>
        </div>
      </div>
    </div>
  </section>
  <!-- ===============>> cta section start here <<================= -->
                    

                </div>

    

    
@endsection

@section('scripts')
@endsection
