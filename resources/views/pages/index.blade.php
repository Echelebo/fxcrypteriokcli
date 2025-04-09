@php
    use App\Models\DepositCoin;
    use App\Models\Bot;
    use Faker\Factory as Faker;
    

    $page_title = 'Home';
    $faker = Faker::create();
    $logos = DepositCoin::inRandomOrder()
        ->take(20)
        ->get('logo_url');
    
    $bots = Bot::get();
    
    $deposit_methods = ['usdttrc20'];
    $methods = DepositCoin::where('status', 1)->get();
    foreach ($methods as $method) {
        array_push($deposit_methods, $method->code);
    }
    
    // Check if the count is less than 20
    while (count($deposit_methods) < 20) {
        $deposit_methods[] = 'usdttrc20';
    }
    
    $actions = ['deposited', 'withdrew', 'withdrew', 'deposited', 'withdrew', 'deposited', 'withdrew', 'withdrew', 'withdrew', 'withdrew', 'withdrew', 'withdrew'];
    
    $whys = ['Cutting-Edge Precision', 'Trendsetter Advantage', 'Adaptive Excellence', 'Seamless Profits', 'Data-Driven Triumph', 'Strategic Partner', 'Constant Success', 'Market Pioneer', 'Automated Mastery'];
    $reviews = [
        site('name') . "'s precision trading is a game-changer, consistently delivering impressive profits. I trust it for my financial success.",
        'Effortless trading with ' . site('name') . '. Its adaptability and data-driven approach make it a standout choice. Highly recommended!',
        'Seamless trades, constant profits - ' . site('name') . " simplifies trading. It's a must-have for anyone in the market.",
        site('name') . "'s innovative strategies and consistent returns have transformed my trading experience. It's a valuable asset to any trader.",
        'I rely on ' . site('name') . " for its adaptability in fluctuating markets. It's a proven partner in achieving financial goals.",
        site('name') . "'s automated precision is remarkable. It's a powerful tool for navigating today's complex trading landscape.",
        'Maximized profits with ' . site('name') . '. Its results speak volumes. A reliable and intelligent trading companion.',
        'Trading with ' . site('name') . ' is effortless and rewarding. It adapts to market changes seamlessly. Truly impressive!',
        site('name') . ' has changed my trading game. Its data-driven approach delivers consistent gains. An invaluable tool for success.',
        'Effortless trading made possible by ' . site('name') . ' .  Its strategic prowess sets it apart. A game-changer for traders.',
    ];

    $short_description =  site('seo_description');
    
@endphp


@extends('layouts.front')


@section('contents')

<!-- ===============>> Banner section start here <<================= -->
  <section class="banner banner--style2 bg-color-3 bg--cover"
    style="background-image:url(/asset/images/banner/home2/bg.png)">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 1920 739" class="bg-shape-svg">
      <clipPath id="shape-clippath">
        <path
          d="M0 0H1920V350.233C1920 483.334 1821.85 596.054 1690.02 614.364L303.352 806.957C143.029 829.224 0 704.687 0 542.825V0Z" />
      </clipPath>
    </svg>

    <div class="container">
      <div class="banner__wrapper banner__wrapper--style2">
        <div class="row flex-md-row-reverse gx-5 p-3">
          <div class="col-lg-6 col-md-7">
            <div class="banner__content" data-aos="fade-left" data-aos-duration="1000">
              <h1 class="banner__content-heading banner__content-heading--style2" style="font-size: 3.6rem; font-weight: bold;">smart solution
                for business</h1>
              <p class="banner__content-moto">Are you tired of your crypto-currency not going as far as it supposed to? Try
                {{site('name')}} and multiply
                your money! With our user-friendly interface and expert market analysis, you'll be earning more in no
                time.
              </p>
              <div class="btn-group">
                <a href="{{route('user.login')}}" class="trk-btn trk-btn--primary trk-btn--arrowplay">Get Started
                  <span class="style2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path d="M9.74165 7.59173C9.81874 7.51447 9.91032 7.45318 10.0111 7.41137C10.1119 7.36955 10.22 7.34802 10.3291 7.34802C10.4383 7.34802 10.5464 7.36955 10.6472 7.41137C10.748 7.45318 10.8396 7.51447 10.9166 7.59173L14.7416 11.4167C14.8189 11.4938 14.8802 11.5854 14.922 11.6862C14.9638 11.787 14.9854 11.8951 14.9854 12.0042C14.9854 12.1134 14.9638 12.2214 14.922 12.3222C14.8802 12.4231 14.8189 12.5146 14.7416 12.5917L10.9166 16.4167C10.8395 16.4939 10.7479 16.5551 10.6471 16.5968C10.5463 16.6386 10.4383 16.6601 10.3291 16.6601C10.22 16.6601 10.112 16.6386 10.0112 16.5968C9.91039 16.5551 9.8188 16.4939 9.74165 16.4167C9.6645 16.3396 9.6033 16.248 9.56154 16.1472C9.51979 16.0464 9.4983 15.9383 9.4983 15.8292C9.4983 15.7201 9.51979 15.6121 9.56154 15.5113C9.6033 15.4105 9.6645 15.3189 9.74165 15.2417L12.975 12.0001L9.74165 8.76673C9.41665 8.44173 9.42498 7.90839 9.74165 7.59173Z" fill="#0C263A"></path>
                      <rect x="-0.75" y="0.75" width="22.5" height="22.5" rx="11.25" transform="matrix(-1 0 0 1 22.5 0)" stroke="black" stroke-opacity="0.16" stroke-width="1.5"></rect>
                    </svg>
                  </span> </a>
                <a href="https://www.youtube.com/watch?v=MHhIzIgFgJo&amp;ab_channel=NoCopyrightFootages"
                  class="trk-btn trk-btn--outline3" data-fslightbox>
                  <span class="style1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                      viewBox="0 0 24 24" fill="none">
                      <g clip-path="url(#clip0_1397_814)">
                        <path
                          d="M10.5547 7.03647C9.89015 6.59343 9 7.06982 9 7.86852V16.1315C9 16.9302 9.89015 17.4066 10.5547 16.9635L16.7519 12.8321C17.3457 12.4362 17.3457 11.5638 16.7519 11.1679L10.5547 7.03647Z"
                          stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                      </g>
                      <rect x="-0.75" y="0.75" width="22.5" height="22.5" rx="11.25" transform="matrix(-1 0 0 1 22.5 0)"
                        stroke="#fff" stroke-width="1.5" />
                      <defs>
                        <clipPath id="clip0_1397_814">
                          <rect width="24" height="24" fill="white" />
                        </clipPath>
                      </defs>
                    </svg></span> Watch Video
                </a>
              </div>

            </div>
          </div>
          <div class="col-lg-6 col-md-5">
            <div class="banner__thumb">
              <img src="/asset/images/banner/home2/1.png" alt="banner-thumb">
            </div>
          </div>

        </div>
      </div>
    </div>



  </section>
  <!-- ===============>> Banner section end here <<================= -->






  <!-- ===============>> About section start here <<================= -->
  <section class="about padding-top--style2 padding-bottom bg-color-3">
    <div class="container">
      <div class="about__wrapper">
        <div class="row g-5 align-items-center">
          <div class="col-lg-6">
            <div class="section-header mb-50">
              <h2 style="font-size: 3rem; font-weight: bold;">Experienced trading <span class="style2">platform</span>
                to grow
              </h2>
            </div>
            <div class="about__content about__content--style2" data-aos="fade-right" data-aos-duration="800">
              <div class="about__content-inner">
                <div class="about__icon">
                  <div class="about__icon-inner">
                    <img src="/asset/images/about/icon/1.png" alt="about-icon" class="dark">
                  </div>
                </div>
                <div class="about__content-details">
                  <h5 style="font-size: 1.5rem; font-weight: bold;">Easy to lend</h5>
                  <p class="mb-0">It's easy to lend a helping hand to those in need, especially when we all stick
                    together.</p>
                </div>
              </div>
            </div>
            <div class="about__content about__content--style2" data-aos="fade-right" data-aos-duration="900">
              <div class="about__content-inner">
                <div class="about__icon">
                  <div class="about__icon-inner">
                    <img src="/asset/images/about/icon/2.png" alt="about-icon" class="dark">
                  </div>
                </div>
                <div class="about__content-details">
                  <h5 style="font-size: 1.5rem; font-weight: bold;">Exchange money</h5>
                  <p class="mb-0">If you need to exchange money, just hit up the currency exchange at the {{site('name')}}.
                    Easy-peasy.</p>
                </div>
              </div>
            </div>
            <div class="about__content about__content--style2" data-aos="fade-right" data-aos-duration="1000">
              <div class="about__content-inner">
                <div class="about__icon">
                  <div class="about__icon-inner">
                    <img src="/asset/images/about/icon/3.png" alt="about-icon" class="dark">
                  </div>
                </div>
                <div class="about__content-details">
                  <h5 style="font-size: 1.5rem; font-weight: bold;">Online wallet</h5>
                  <p class="mb-0">When travelling, and forget to exchange money at the airport or a local bank. {{site('name')}} is with you.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="about__thumb about__thumb--style2" data-aos="fade-left" data-aos-duration="800">
              <div class="about__thumb-inner mt-30 mt-lg-0">
                <div class="about__thumb-image  text-center">
                  <img src="/asset/images/about/3.png" alt="about-image" class="dark">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="about__shape about__shape--style2">
      <span class="about__shape-item about__shape-item--1"><img src="/asset/images/others/2.png"
          alt="shape-icon"></span>
    </div>
  </section>
  <!-- ===============>> About section start here <<================= -->





  <!-- ===============>> Service section start here <<================= -->
  <section class="service padding-top padding-bottom bg-color-7">
    <div class="section-header section-header--max50">
      <h2 class="mb-10 mt-minus-5" style="font-size: 3rem; font-weight: bold;"><span class="style2">services </span>We offer</h2>
      <p>We offer the best services around - from trading to market analysis, Data-Driven Triumph, and more!</p>
    </div>
    <div class="container">
      <div class="service__wrapper">
        <div class="row g-4 align-items-center">
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="service__item service__item--style2" data-aos="fade-up" data-aos-duration="800">
              <div class="service__item-inner text-center">
                <div class="service__item-thumb mb-30">
                  <img class="dark" src="/asset/images/service/1.png" alt="service-icon">
                </div>
                <div class="service__item-content">
                  <h5 style="font-size: 1.5rem; font-weight: bold;"> <a class="stretched-link" href="{{route('service')}}">Strategic Consulting</a> </h5>
                  <p class="mb-0">A social assistant that's flexible can accommodate your schedule and needs, making
                    life easier.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="service__item service__item--style2" data-aos="fade-up" data-aos-duration="1000">
              <div class="service__item-inner text-center">
                <div class="service__item-thumb mb-30">
                  <img class="dark" src="/asset/images/service/2.png" alt="service-icon">
                </div>
                <div class="service__item-content">
                  <h5 style="font-size: 1.5rem; font-weight: bold;"> <a class="stretched-link" href="{{route('service')}}"> Financial Advisory</a> </h5>
                  <p class="mb-0">Modules transform smart trading by automating processes and improving decision-making.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="service__item service__item--style2" data-aos="fade-up" data-aos-duration="1200">
              <div class="service__item-inner text-center">
                <div class="service__item-thumb mb-30">
                  <img class="dark" src="/asset/images/service/3.png" alt="service-icon">
                </div>
                <div class="service__item-content">
                  <h5 style="font-size: 1.5rem; font-weight: bold;"> <a class="stretched-link" href="{{route('service')}}">Management</a> </h5>
                  <p class="mb-0">There, it's me {{site('name')}}, your friendly neighborhood trading analyst with high precision.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="service__item service__item--style2" data-aos="fade-up" data-aos-duration="800">
              <div class="service__item-inner text-center">
                <div class="service__item-thumb mb-30">
                  <img class="dark" src="/asset/images/service/4.png" alt="service-icon">
                </div>
                <div class="service__item-content">
                  <h5 style="font-size: 1.5rem; font-weight: bold;"> <a class="stretched-link" href="{{route('service')}}">Supply Optimization </a>
                  </h5>
                  <p class="mb-0">Hey, have you checked out {{site('name')}} cryptocurrency platform? It's pretty cool and easy
                    to use!</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="service__item service__item--style2" data-aos="fade-up" data-aos-duration="1000">
              <div class="service__item-inner text-center">
                <div class="service__item-thumb mb-30">
                  <img class="dark" src="/asset/images/service/5.png" alt="service-icon">
                </div>
                <div class="service__item-content">
                  <h5 style="font-size: 1.5rem; font-weight: bold;"> <a class="stretched-link" href="{{route('service')}}">HR consulting</a> </h5>
                  <p class="mb-0">Hey guys, just a quick update on trading orders. There have been some changes
                    in crypto-currencies!</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="service__item service__item--style2" data-aos="fade-up" data-aos-duration="1200">
              <div class="service__item-inner text-center">
                <div class="service__item-thumb mb-30">
                  <img class="dark" src="/asset/images/service/6.png" alt="service-icon">
                </div>
                <div class="service__item-content">
                  <h5 style="font-size: 1.5rem; font-weight: bold;"> <a class="stretched-link" href="{{route('service')}}">Marketing consulting</a>
                  </h5>
                  <p class="mb-0">Hey! Just wanted to let you know that the telegram trading notification module system is now
                    live!</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ===============>> Service section start here <<================= -->






  <!-- ===============>> Pricing section start here <<================= -->
  <section class="pricing padding-top padding-bottom bg-color-3">
    <div class="section-header section-header--max50">
      <h2 class="mb-10 mt-minus-5" style="font-size: 3rem; font-weight: bold;">Our <span class="style2">pricing </span>plans</h2>
      <p>Here's our pricing plan: affordable, straightforward, and no hidden fees. That's it. Let's get started!</p>
    </div>
    <div class="container">
      <div class="pricing__wrapper">
        <div class="row g-4 align-items-center">
            @foreach ($bots as $bot)
          <div class="col-md-6 col-lg-4">
            <div class="pricing__item" data-aos="fade-right" data-aos-duration="1000">
              <div class="pricing__item-inner pricing__item-inner--style2">
                <div class="pricing__item-content">

                  <!-- pricing top part -->
                  <div class="pricing__item-top">
                    <h6 class="mb-15" style="font-size: 1.1rem; font-weight: bold;">{{ $bot->name }}</h6>
                    <h3 class="mb-25" style="font-size: 2.5rem; font-weight: bold;">${{ $bot->min }}/<span>{{ $bot->duration }} {{ $bot->duration_type }}</span> </h3>
                  </div>

                  <!-- pricing middle part -->
                  <div class="pricing__item-middle">
                    <ul class="pricing__list">
                      <li class="pricing__list-item"><span><img src="/asset/images/icon/2.png" alt="check"
                            class="dark"></span>
                        Weekly online meeting</li>
                      <li class="pricing__list-item"><span><img src="/asset/images/icon/2.png" alt="check"
                            class="dark"></span>
                        Unlimited learning access</li>
                      <li class="pricing__list-item"><span><img src="/asset/images/icon/2.png" alt="check"
                            class="dark"></span>
                        24/7 technical support</li>
                      <li class="pricing__list-item"><span><img src="/asset/images/icon/2.png" alt="check"
                            class="dark"></span>
                        Personal training</li>
                    </ul>

                  </div>

                  <!-- pricing bottom part -->
                  <div class="pricing__item-bottom">
                    <a href="{{ route('user.bots.index') }}" class="trk-btn trk-btn--outline4">Choose Plan</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach 
          
          
        </div>
      </div>
    </div>
    <div class="pricing__shape">
      <span class="pricing__shape-item pricing__shape-item--3"><span></span> </span>
      <span class="pricing__shape-item pricing__shape-item--4"><img src="/asset/images/others/2.png"
          alt="shape-icon"></span>
    </div>
  </section>
  <!-- ===============>> Pricing section start here <<================= -->






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



 

  <!-- ===============>> Testimonial section start here <<================= -->
  <section class="testimonial padding-top padding-bottom-style2 bg-color">
    <div class="container">
      <div class="section-header section-header--style4">
        <div class="section-header__content">
          <h2 class="mb-0" style="font-size: 3rem; font-weight: bold;">Meet our <span>Clients </span></h2>
        </div>
        <div class="section-header__action">
          <div>
            <a href="{{route('contact')}}" class="trk-btn trk-btn--border trk-btn--secondary">Be Our Client</a>
          </div>
        </div>
      </div>
      <div class="testimonial__wrapper">
        <div class="testimonial__slider2 swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial__item testimonial__item--style2">
                <div class="testimonial__item-inner">
                  <div class="testimonial__item-content">
                    <p class="mb-0">
                      Seamless trades, constant profits - {{site('name')}} simplifies trading. It is a must have for anyone in the market.

                    </p>
                    <div class="testimonial__footer">
                      <div class="testimonial__author">
                        <div class="testimonial__author-thumb">
                          <img src="/asset/images/testimonial/3.png" alt="author" class="dark">
                        </div>
                        <div class="testimonial__author-designation">
                          <h6 style="font-size: 1.1rem; font-weight: bold;">Song Yoo-mee</h6>
                        </div>
                      </div>
                      <div class="testimonial__quote testimonial__quote--style2">
                        <span><i class="fa-solid fa-quote-right"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonial__item testimonial__item--style2">
                <div class="testimonial__item-inner">
                  <div class="testimonial__item-content">
                    <p class="mb-0">
                      
Trading with {{site('name')}} is effortless and rewarding. It adapts to market changes seamlessly. Truly impresive!


                    </p>
                    <div class="testimonial__footer">
                      <div class="testimonial__author">
                        <div class="testimonial__author-thumb">
                          <img src="/asset/images/testimonial/4.png" alt="author" class="dark">
                        </div>
                        <div class="testimonial__author-designation">
                          <h6 style="font-size: 1.1rem; font-weight: bold;">Philip Ram</h6>
                          
                        </div>
                      </div>
                      <div class="testimonial__quote testimonial__quote--style2">
                        <span><i class="fa-solid fa-quote-right"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonial__item testimonial__item--style2">
                <div class="testimonial__item-inner">
                  <div class="testimonial__item-content">
                    <p class="mb-0">
                      {{site('name')}} innovative strategies and consistent returns have transformed my trading experience. It's a valuable asset to any trader.
                    </p>
                    <div class="testimonial__footer">
                      <div class="testimonial__author">
                        <div class="testimonial__author-thumb">
                          <img src="/asset/images/testimonial/5.png" alt="author" class="dark">
                        </div>
                        <div class="testimonial__author-designation">
                          <h6 style="font-size: 1.1rem; font-weight: bold;">Harsi Kosanam</h6>
                          
                        </div>
                      </div>
                      <div class="testimonial__quote testimonial__quote--style2">
                        <span><i class="fa-solid fa-quote-right"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-nav swiper-nav--style2">
          <button class="swiper-nav__btn active  swiper-nav__btn-prev testimonial__slider-prev"><i
              class="fa-solid fa-angle-left"></i></button>
          <button class="swiper-nav__btn swiper-nav__btn-next testimonial__slider-next"><i
              class="fa-solid fa-angle-right"></i></button>
        </div>
      </div>
    </div>
  </section>
  <!-- ===============>> Testimonial section start here <<================= -->





  <!-- ===============>> FAQ section start here <<================= -->
  <section class="faq padding-top padding-bottom of-hidden">
    <div class="section-header section-header--max57">
      <h2 class="mb-10 mt-minus-5" style="font-size: 3.5rem; font-weight: bold;">Most common <span class="style2">FAQ</span></h2>
    </div>
    <div class="container">
      <div class="faq__wrapper">
        <div class="row g-4 justify-content-between">
          <div class="col-lg-6">
            <div class="accordion accordion--style2" id="faqAccordion1" data-aos="fade-right" data-aos-duration="1000">
              <div class="row gy-3">
                <div class="col-12">
                  <div class="accordion__item accordion-item">
                    <div class="accordion__header accordion-header" id="faq1">
                      <button class="accordion-button accordion-button--style3 accordion__button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faqBody1" aria-expanded="false" aria-controls="faqBody1">
                        <span class="accordion__button-content">What {{site('name')}} do?</span>
                      </button>
                    </div>
                    <div id="faqBody1" class="accordion-collapse collapse show" aria-labelledby="faq1"
                      data-bs-parent="#faqAccordion1">
                      <div class="accordion__body accordion-body">
                        <p class="mb-0">
                          {{site('name')}}’s primary advantages are that it allows you to manage your trades at your
                          convenience.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="accordion__item accordion-item">
                    <div class="accordion__header accordion-header" id="faq2">
                      <button class="accordion-button accordion-button--style3 accordion__button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#faqBody2" aria-expanded="true"
                        aria-controls="faqBody2">
                        <span class="accordion__button-content">What are the disadvantages trading?</span>
                      </button>
                    </div>
                    <div id="faqBody2" class="accordion-collapse collapse" aria-labelledby="faq2"
                      data-bs-parent="#faqAccordion1">
                      <div class="accordion__body accordion-body">
                        <p class="mb-0">
                          You don’t need to worry, the interface is user-friendly. Anyone can use
                          it smoothly. Our experts will help you to solve your problem.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="accordion__item accordion-item">
                    <div class="accordion__header accordion-header" id="faq3">
                      <button class="accordion-button accordion-button--style3 accordion__button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#faqBody3" aria-expanded="false"
                        aria-controls="faqBody3">
                        <span class="accordion__button-content">Is {{site('name')}} safe? </span>
                      </button>
                    </div>
                    <div id="faqBody3" class="accordion-collapse collapse" aria-labelledby="faq3"
                      data-bs-parent="#faqAccordion1">
                      <div class="accordion__body accordion-body">
                        <p class="mb-0"> Yes, we take data security seriously. We employ industry-standard measures to protect your information.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="accordion__item accordion-item">
                    <div class="accordion__header accordion-header" id="faq4">
                      <button class="accordion-button accordion-button--style3 accordion__button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#faqBody4" aria-expanded="false"
                        aria-controls="faqBody4">
                        <span class="accordion__button-content">How does it work? </span>
                      </button>
                    </div>
                    <div id="faqBody4" class="accordion-collapse collapse" aria-labelledby="faq4"
                      data-bs-parent="#faqAccordion1">
                      <div class="accordion__body accordion-body">
                        <p class="mb-0"> Getting started is simple. Sign up for an account, complete the verification process, and you can begin trading.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="accordion__item accordion-item">
                    <div class="accordion__header accordion-header" id="faq5">
                      <button class="accordion-button accordion-button--style3 accordion__button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#faqBody5" aria-expanded="false"
                        aria-controls="faqBody5">
                        <span class="accordion__button-content">Do I need prior trading experience to use {{site('name')}}? </span>
                      </button>
                    </div>
                    <div id="faqBody5" class="accordion-collapse collapse" aria-labelledby="faq5"
                      data-bs-parent="#faqAccordion1">
                      <div class="accordion__body accordion-body">
                        <p class="mb-0"> No, {{site('name')}} is designed for both beginners and experienced traders. We offer educational resources to help you get started.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="accordion accordion--style2" id="faqAccordion2" data-aos="fade-left" data-aos-duration="1000">
              <div class="row gy-3">
                <div class="col-12">
                  <div class="accordion__item accordion-item border-0">
                    <div class="accordion__header accordion-header" id="faq6">
                      <button class="accordion-button accordion-button--style3 accordion__button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#faqBody6" aria-expanded="false"
                        aria-controls="faqBody6">
                        <span class="accordion__button-content">What level of support do you offer? </span>
                      </button>
                    </div>
                    <div id="faqBody6" class="accordion-collapse collapse" aria-labelledby="faq6"
                      data-bs-parent="#faqAccordion2">
                      <div class="accordion__body accordion-body">
                        <p class="mb-0"> Absolutely. Our customer support team is here to assist you with any questions or issues you may have.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="accordion__item accordion-item border-0">
                    <div class="accordion__header accordion-header" id="faq7">
                      <button class="accordion-button accordion-button--style3 accordion__button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#faqBody7" aria-expanded="false"
                        aria-controls="faqBody7">
                        <span class="accordion__button-content">What kind of reporting do you provide? </span>
                      </button>
                    </div>
                    <div id="faqBody7" class="accordion-collapse collapse" aria-labelledby="faq7"
                      data-bs-parent="#faqAccordion2">
                      <div class="accordion__body accordion-body">
                        <p class="mb-0"> {{site('name')}} generates trading signals continuously, ensuring you have access to up-to-date market information.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="accordion__item accordion-item border-0">
                    <div class="accordion__header accordion-header" id="faq8">
                      <button class="accordion-button accordion-button--style3 accordion__button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#faqBody8" aria-expanded="false"
                        aria-controls="faqBody8">
                        <span class="accordion__button-content">How do you ensure confidentiality?</span>
                      </button>
                    </div>
                    <div id="faqBody8" class="accordion-collapse collapse" aria-labelledby="faq8"
                      data-bs-parent="#faqAccordion2">
                      <div class="accordion__body accordion-body">
                        <p class="mb-0"> Industry regulations such as ISO 27001, SOC 2, HIPAA, and PIPEDA provides you with detailed security and confidentiality.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="accordion__item accordion-item border-0">
                    <div class="accordion__header accordion-header" id="faq9">
                      <button class="accordion-button accordion-button--style3 accordion__button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faqBody9" aria-expanded="false" aria-controls="faqBody9">
                        <span class="accordion__button-content">What is the payment method {{site('name')}} accpets?</span>
                      </button>
                    </div>
                    <div id="faqBody9" class="accordion-collapse collapse show" aria-labelledby="faq9"
                      data-bs-parent="#faqAccordion2">
                      <div class="accordion__body accordion-body">
                        <p class="mb-0"> Our goal is to provide the most compatible payment methods and local currencies, so that investing is accessible for all investors with no hassles.
• At the current time, you can invest using popular cryptocurrencies such as; BTC, ETH, USDT, BCH, LTC or DOGE.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="accordion__item accordion-item border-0">
                    <div class="accordion__header accordion-header" id="faq10">
                      <button class="accordion-button accordion-button--style3 accordion__button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#faqBody10" aria-expanded="false"
                        aria-controls="faqBody10">
                        <span class="accordion__button-content">Can I withdraw my profits easily? </span>
                      </button>
                    </div>
                    <div id="faqBody10" class="accordion-collapse collapse" aria-labelledby="faq10"
                      data-bs-parent="#faqAccordion2">
                      <div class="accordion__body accordion-body">
                        <p class="mb-0"> Yes, withdrawing your profits is straightforward. You can initiate withdrawals through your account.</p>
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
  <!-- ===============>> FAQ section start here <<================= -->





  <!-- ===============>> Blog section start here <<================= -->






  <!-- ===============>> cta section start here <<================= -->
  <section class="cta cta--style2">
    <div class="container">
      <div class="cta__wrapper">
        <div class="cta__newsletter justify-content-center">
          <div class="cta__newsletter-inner" data-aos="fade-up" data-aos-duration="1000">
            <div class="cta__thumb">
              <img src="/asset/images/cta/3.png" alt="cta-thumb">
            </div>
            <div class="cta__subscribe">
              <h2 class="mb-0"> <span>Subscribe</span> to our news</h2>
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
      </div>
    </div>
  </section>
  <!-- ===============>> cta section start here <<================= -->
    
@endsection


@section('scripts')
    {{-- spining image --}}

    <script>
        const circle = document.querySelector('.circle');
        const images = document.querySelectorAll('.floating-image');
        const numImages = images.length;
        const deviceWidth = window.innerWidth;

        let radius;
        if (deviceWidth > 766) {
            radius = Math.min(circle.clientWidth / 2, circle.clientHeight / 2) - 25;
        } else {
            radius = deviceWidth; // Use a specific value for small deviceWidth
        }

        function moveImageInCircleAndSpin(img, centerX, centerY, angle) {
            const x = centerX + radius * Math.cos(angle);
            const y = centerY + radius * Math.sin(angle);
            const rotation = angle * (180 / Math.PI);

            img.style.left = `${x}px`;
            img.style.top = `${y}px`;
            img.style.transform = `translate(-50%, -50%) rotate(${rotation}deg)`;

            const newAngle = angle + 0.01; // Adjust the rotation speed here
            const randomDelay = Math.random() * 10; // Small delay to adjust rotation phase
            setTimeout(() => {
                moveImageInCircleAndSpin(img, centerX, centerY, newAngle);
            }, randomDelay);
        }

        function initializeImagePositions() {
            const centerX = circle.clientWidth / 2;
            const centerY = circle.clientHeight / 2;

            images.forEach((img, index) => {
                const angle = (index / numImages) * 2 * Math.PI;
                moveImageInCircleAndSpin(img, centerX, centerY, angle);
            });
        }

        initializeImagePositions();
    </script>


    {{-- moving image --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.looping-image').owlCarousel({
                loop: true,
                margin: 5,
                autoplay: true,
                autoplayTimeout: 6000,
                autoplaySpeed: 600,
                dots: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 5,
                    },
                    600: {
                        items: 10,
                    },
                    1000: {
                        items: 10,
                    }
                }
            });

            $('.reviews').owlCarousel({
                loop: true,
                margin: 5,
                autoplay: true,
                autoplayTimeout: 6000,
                autoplaySpeed: 600,
                dots: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 1,
                    },
                    1000: {
                        items: 1,
                    }
                }
            });

            $('.deposits').owlCarousel({
                loop: true,
                margin: 5,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplaySpeed: 600,
                dots: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 1,
                    },
                    1000: {
                        items: 3,
                    }
                }
            });
        });
    </script>


    {{-- globe --}}
    <script src="//unpkg.com/globe.gl"></script>
    <script>
        fetch("{{ route('places') }}").then(res => res.json()).then(places => {

            const globeInstance = Globe()
                .globeImageUrl("{{ asset('/asset/images/earth-night.jpg') }}")
                .backgroundImageUrl("{{ asset('/asset/images/ts-gray-1.png') }}")
                .labelsData(places.features)
                .labelLat(d => d.properties.latitude)
                .labelLng(d => d.properties.longitude)
                .labelText(d => d.properties.name)
                .labelSize(d => Math.sqrt(d.properties.pop_max) * 4e-4)
                .labelDotRadius(d => Math.sqrt(d.properties.pop_max) * 4e-4)
                .labelColor(() => 'rgba(255, 165, 0, 0.75)')
                .labelResolution(2)

            (document.getElementById('globeViz'))


        });
    </script>

    {{-- schuffle recent trades --}}
    <script>
        function updateTradeTimes() {
            const tradeTimeElements = document.querySelectorAll('.recent_trade_time');
            const currentTime = new Date().toLocaleTimeString();

            tradeTimeElements.forEach((element) => {
                element.textContent = currentTime;
            });
        }

        function shuffleAndDisplayRecentTrades() {
            const tradesDiv = document.getElementById('recentTrades');
            const trades = Array.from(tradesDiv.children);

            trades.sort(() => Math.random() - 0.5); // Shuffle the array

            // Remove the existing trade divs
            while (tradesDiv.firstChild) {
                tradesDiv.removeChild(tradesDiv.firstChild);
            }

            // Append the first 10 shuffled trade divs back to the container
            for (let i = 0; i < 20 && i < trades.length; i++) {
                tradesDiv.appendChild(trades[i]);
            }

            updateTradeTimes(); // Update trade times after shuffling
        }

        // Initial shuffle and display
        shuffleAndDisplayRecentTrades();

        // Set interval to shuffle and update times every second (1000 milliseconds)
        setInterval(shuffleAndDisplayRecentTrades, 1000);

        // update every 5 minutes
        function updateRecentTrades() {
            // Use jQuery to make an AJAX request to the server
            $.ajax({
                url: window.location.href,
                method: 'GET',
                dataType: 'html',
                success: function(response) {
                    // Update the content of the recentTradesContainer div
                    var targetDiv = '#recentTradesContainer';
                    $(targetDiv).html($(response).find(targetDiv).html());
                    updateTradeTimes();
                    $('#deposits').html($(response).find('#deposits').html());

                },
                error: function(xhr, status, error) {
                    console.error('Error fetching data:', error);
                }
            });
        }

        setInterval(updateRecentTrades, 10000);
    </script>

    {{-- apply bot class --}}
    <script>
        const divElement = document.getElementById('hows-bot');
        const classes = ['hows-bot-orange', 'hows-bot-green', 'hows-bot-blue', 'hows-bot-purple'];
        let currentIndex = 0;

        function applyNextClass() {
            divElement.className = classes[currentIndex];
            currentIndex = (currentIndex + 1) % classes.length;
        }

        setInterval(applyNextClass, 5000);
    </script>
@endsection
