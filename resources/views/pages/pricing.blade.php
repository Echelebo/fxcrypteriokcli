@php
    use App\Models\Bot;
    
    $page_title = 'AI Bot Pricing';
    $short_description = 'We have vering portfolio ranges for our bots. Select any hat best fits your pocket';
    $bots = Bot::get();
    
@endphp

{{-- layout --}}
@extends('layouts.front')





@section('contents')
    {{-- breadcrumb --}}
    @include('pages.breadcrumb')

   
  <section class="pricing padding-top padding-bottom">
    <div class="section-header section-header--max50">
      <h2 class="mb-10 mt-minus-5" style="font-size: 3rem; font-weight: bold;">Our <span>pricing </span>plans</h2>
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
      <span class="pricing__shape-item pricing__shape-item--1"> <span></span> </span>
      <span class="pricing__shape-item pricing__shape-item--2"> <img src="/asset/images/icon/1.png" alt="shape-icon">
      </span>
    </div>
  </section>
  <!-- ===============>> Pricing section start here <<================= -->
@endsection

@section('scripts')
@endsection
