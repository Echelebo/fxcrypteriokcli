
<!DOCTYPE html>
<html lang="en" data-bs-theme="light">


<!-- Mirrored from thetork.com/demos/html/bitrader/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jan 2024 23:30:45 GMT -->
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="apple-touch-icon" href="{{ asset('assets/images/' . site('favicon')) }}">
    <link rel="icon" href="{{ asset('assets/images/' . site('favicon')) }}">
    <title> {{ $page_title }} | {{ site('name') }}</title>
    <meta name="author" content="support@rescron.com">
    <meta name="description" content="{{ $short_description }}">
    <meta property="og:url" content="{{ request()->url }}">
    <meta property="og:title" content="{{ $page_title }} | {{ site('name') }}">
    <meta property="og:description" content="{{ $short_description }}">
    <meta property="og:image" content="{{ asset('assets/images/' . site('cover')) }}">
    <meta name="robots" content="{{ site('robot') }}">


  <link rel="stylesheet" href="/asset/css/bootstrap.min.css">
  <link rel="stylesheet" href="/asset/css/aos.css">
  <link rel="stylesheet" href="/asset/css/all.min.css">

  <link rel="stylesheet" href="/asset/css/swiper-bundle.min.css">



  <!-- main css for template -->
  <link rel="stylesheet" href="/asset/css/style.css">
  
  
  <style>
        .wave {
            width: 5px;
            height: 100px;
            background: linear-gradient(45deg, rgb(168, 85, 247), rgb(249, 115, 22));
            margin: 10px;
            animation: wave 1s linear infinite;
            border-radius: 20px;
        }

        .wave:nth-child(2) {
            animation-delay: 0.1s;
        }

        .wave:nth-child(3) {
            animation-delay: 0.2s;
        }

        .wave:nth-child(4) {
            animation-delay: 0.3s;
        }

        .wave:nth-child(5) {
            animation-delay: 0.4s;
        }

        .wave:nth-child(6) {
            animation-delay: 0.5s;
        }

        .wave:nth-child(7) {
            animation-delay: 0.6s;
        }

        .wave:nth-child(8) {
            animation-delay: 0.7s;
        }

        .wave:nth-child(9) {
            animation-delay: 0.8s;
        }

        .wave:nth-child(10) {
            animation-delay: 0.9s;
        }

        @keyframes wave {
            0% {
                transform: scale(0);
            }

            50% {
                transform: scale(1);
            }

            100% {
                transform: scale(0);
            }
        }
    </style>

    @stack('css')


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
        integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

     <link rel="stylesheet" href="{{ asset('assets/css/gradient.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}">
    {{-- material icon cdn --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    {{-- sweet alert css --}}
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Anek+Telugu:wght@100;200;300;400;500;600;700;800&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap">
    
    
    
    
    <style type="text/css">
<!--
a.gflag {vertical-align:middle;font-size:16px;padding:1px 0;background-repeat:no-repeat;background-image:url(//gtranslate.net/flags/16.png);}
a.gflag img {border:0;}
a.gflag:hover {background-image:url(//gtranslate.net/flags/16a.png);}
#goog-gt-tt {display:none !important;}
.goog-te-banner-frame {display:none !important;}
.goog-te-menu-value:hover {text-decoration:none !important;}
body {top:0 !important;}
#google_translate_element2 {display:none!important;}
-->
</style>

    
</head>

<body>

  <!-- ===============>> Preloader start here <<================= -->
  <div class="preloader">
    <img src="/asset/images/logo/preloader.png" alt="preloader icon">
  </div>
  <!-- ===============>> Preloader end here <<================= -->



  <!-- ===============>> light&dark switch start here <<================= -->
  <div class="lightdark-switch">
    <span class="switch-btn" id="btnSwitch"><img src="/asset/images/icon/moon.svg" alt="light-dark-switchbtn"
        class="swtich-icon"></span>
  </div>
  <!-- ===============>> light&dark switch start here <<================= -->





  <!-- ===============>> Header section start here <<================= -->
  <header class="header-section header-section--style3">
    <div class="header-bottom">
      <div class="container">
        <div class="header-wrapper">
          <div class="logo">
            <a href="/">
              <img src="/asset/images/logo/logo-dark.png" alt="logo">
            </a>
          </div>
          <div class="header-content d-flex align-items-center gap-4">
            <div class="menu-area">
              <ul class="menu menu--style2">
              <li class="megamenu">
                <a href="/">Home </a>
            
              </li>
                <li>
                  <a href="{{route('service')}}">Services</a>
                </li>
                <li>
                  <a href="{{route('about')}}">About</a>
                 
                </li>
                <li>
                  <a href="#">Pages</a>
                  <ul class="submenu">
                    <li><a href="{{route('pricing')}}">Pricing</a></li>
                    <li><a href="{{route('trades')}}">Live Trades</a></li>
                    <li><a href="{{route('faqs')}}">FAQ</a></li>
                    
                  </ul>

                </li>
                <li>
                  <a href="{{route('contact')}}">Contact Us</a>
                </li>
              </ul>

            </div>
            <div class="header-action">
              <div class="menu-area">
                <div class="header-btn">
                  <a href="{{route('user.register')}}" class="trk-btn trk-btn--border trk-btn--primary">
                    <span>Join Now</span>
                  </a>
                </div>

                <!-- toggle icons -->
                <div class="header-bar d-lg-none header-bar--style2">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- ===============>> Header section end here <<================= -->



    @yield('contents')

<!-- ===============>> footer start here <<================= -->
  <footer class="footer ">
      
    <div class="container">
      <div class="footer__wrapper">
        <div class="footer__top footer__top--style2">
          <div class="row gy-5 gx-4">
            <div class="col-lg-6 col-md-5">
              <div class="footer__about">
                <a href="/" class="footer__about-logo"><img src="/asset/images/logo/logo-dark.png"
                    alt="Logo"></a>
                <p class="footer__about-moto ">Welcome to our trading site! We offer the best, most affordable products
                  and services around. Join now and start finding great deals!</p>
                <div>
                  <select onchange="doGTranslate(this);" style="color: #333333;">
                    <option value="">Language</option>
                    <option value="en|af">Afrikaans</option>
                    <option value="en|sq">Albanian</option>
                    <option value="en|ar">Arabic</option>
                    <option value="en|hy">Armenian</option>
                    <option value="en|az">Azerbaijani</option>
                    <option value="en|eu">Basque</option>
                    <option value="en|be">Belarusian</option>
                    <option value="en|bg">Bulgarian</option>
                    <option value="en|ca">Catalan</option>
                    <option value="en|zh-CN">Chinese (Simplified)</option>
                    <option value="en|zh-TW">Chinese (Traditional)</option>
                    <option value="en|hr">Croatian</option>
                    <option value="en|cs">Czech</option>
                    <option value="en|da">Danish</option>
                    <option value="en|nl">Dutch</option>
                    <option value="en|en">English</option>
                    <option value="en|et">Estonian</option>
                    <option value="en|tl">Filipino</option>
                    <option value="en|fi">Finnish</option>
                    <option value="en|fr">French</option>
                    <option value="en|gl">Galician</option>
                    <option value="en|ka">Georgian</option>
                    <option value="en|de">German</option>
                    <option value="en|el">Greek</option>
                    <option value="en|ht">Haitian Creole</option>
                    <option value="en|iw">Hebrew</option>
                    <option value="en|hi">Hindi</option>
                    <option value="en|hu">Hungarian</option>
                    <option value="en|is">Icelandic</option>
                    <option value="en|id">Indonesian</option>
                    <option value="en|ga">Irish</option>
                    <option value="en|it">Italian</option>
                    <option value="en|ja">Japanese</option>
                    <option value="en|ko">Korean</option>
                    <option value="en|lv">Latvian</option>
                    <option value="en|lt">Lithuanian</option>
                    <option value="en|mk">Macedonian</option>
                    <option value="en|ms">Malay</option>
                    <option value="en|mt">Maltese</option>
                    <option value="en|no">Norwegian</option>
                    <option value="en|fa">Persian</option>
                    <option value="en|pl">Polish</option>
                    <option value="en|pt">Portuguese</option>
                    <option value="en|ro">Romanian</option>
                    <option value="en|ru">Russian</option>
                    <option value="en|sr">Serbian</option>
                    <option value="en|sk">Slovak</option>
                    <option value="en|sl">Slovenian</option>
                    <option value="en|es">Spanish</option>
                    <option value="en|sw">Swahili</option>
                    <option value="en|sv">Swedish</option>
                    <option value="en|th">Thai</option>
                    <option value="en|tr">Turkish</option>
                    <option value="en|uk">Ukrainian</option>
                    <option value="en|ur">Urdu</option>
                    <option value="en|vi">Vietnamese</option>
                    <option value="en|cy">Welsh</option>
                    <option value="en|yi">Yiddish</option>
                </select><div id="google_translate_element2"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-6">
              <div class="footer__links">
                <div class="footer__links-tittle">
                  <h6>Quick links</h6>
                </div>
                <div class="footer__links-content">
                  <ul class="footer__linklist">
                    <li class="footer__linklist-item"> <a href="{{route('about')}}">About Us</a>
                    </li>
                    <li class="footer__linklist-item"> <a href="{{route('trades')}}">Live Trades</a>
                    </li>
                    <li class="footer__linklist-item"> <a href="{{route('service')}}">Services</a> </li>
                    
                  </ul>
                </div>
              </div>

            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
              <div class="footer__links">
                <div class="footer__links-tittle">
                  <h6>Support</h6>
                </div>
                <div class="footer__links-content">
                  <ul class="footer__linklist">
                    <li class="footer__linklist-item"> <a href="{{route('tos')}}">Terms & Conditions</a>
                    </li>
                    <li class="footer__linklist-item"> <a href="{{route('privacy')}}">Privacy Policy</a>
                    </li>
                    <li class="footer__linklist-item"> <a href="{{route('faqs')}}">FAQs</a></li>
                    <li class="footer__linklist-item"> <a href="{{route('contact')}}">Support Center</a> </li>
                  </ul>
                </div>
              </div>

            </div>
            <div class="col-lg-2 col-md-2 col-sm-4">
              <div class="footer__links">
                <div class="footer__links-tittle">
                  <h6>Company</h6>
                </div>
                <div class="footer__links-content">
                  <ul class="footer__linklist">
                    <li class="footer__linklist-item"> <a href="{{route('contact')}}">Careers</a>
                    </li>
                    <li class="footer__linklist-item"> <a href="{{route('about')}}">Updates</a>
                    </li>
                    <li class="footer__linklist-item"> <a href="{{route('contact')}}">Job</a> </li>
                    </li>
                  </ul>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="footer__bottom">
          <div class="footer__end justify-content-center">
            <div class="footer__end-copyright">
              <p class=" mb-0">© 2024 All Rights Reserved By <a href="/"
                  target="_blank">{{site('name')}}</a> </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer__shape">
      <span class="footer__shape-item footer__shape-item--3"><img src="/asset/images/footer/1.png"
          alt="shape icon"></span>
    </div>
  </footer>
  <!-- ===============>> footer end here <<================= -->

<a href="https://wa.me/" target="_blank" class="fixed bottom-0 right-0 z-50 mb-5">
        <img src="/whatsapp.png" alt="" class="w-10 h-10 animated-image shadow mr-2">
    </a>


  <!-- ===============>> scrollToTop start here <<================= -->
  <a href="#" class="scrollToTop scrollToTop--style1"><i class="fa-solid fa-arrow-up-from-bracket"></i></a>
  <!-- ===============>> scrollToTop ending here <<================= -->

{{-- cookie consent --}}
    <div class="w-full fixed z-50 bottom-0 left-0 hidden" id="cookie-consent">
        <div class="w-full bg-purple-500 p-5">
            <div class="w-full grid grid-cols-1 gap-3  md:flex space-x-2 justify-center items-center">
                <p class="text-center">We use cookies to tailor your experience on {{ site('name') }}. Learn more in
                    our <a href="{{ route('privacy') }}">privacy policy</a></p>
                <div class="text-center">
                    <a id="consented"
                        class="ts-gray-3 rounded-full shadow border border-slate-800 hover:border-slate-600 cursor-pointer px-2 py-1 hover:scale-110 transition-all"
                        role="button">
                        <span>Accept Cookies</span>

                    </a>
                </div>
            </div>
        </div>
    </div>
    
    
    <script type="text/javascript">
function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}
</script><script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
								
								
								<script type="text/javascript">
/* <![CDATA[ */
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
/* ]]> */
</script>



  <!-- vendor plugins -->

  <script src="/asset/js/bootstrap.bundle.min.js"></script>
  <script src="/asset/js/all.min.js"></script>
  <script src="/asset/js/swiper-bundle.min.js"></script>
  <script src="/asset/js/aos.js"></script>
  <script src="/asset/js/fslightbox.js"></script>
  <script src="/asset/js/purecounter_vanilla.js"></script>



  <script src="/asset/js/custom.js"></script>
  
  {{-- all script placements --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    {{-- cookie --}}
    <script>
        function setCookie(cookieName, cookieValue) {
            var expirationDate = new Date();
            expirationDate.setFullYear(expirationDate.getFullYear() + 10); // Set expiration date to 10 years from now

            var cookieString = cookieName + '=' + cookieValue + '; expires=' + expirationDate.toUTCString() + '; path=/';

            document.cookie = cookieString;
        }


        $('#consented').on('click', function(e) {
            e.preventDefault();
            setCookie('cookie-consent', true);
            $('#cookie-consent').addClass('hidden');
        });
    </script>

    @yield('scripts')

    @stack('scripts')

    {{-- hide preloader --}}
    <script>
        window.onload = function() {
            $('.preloader').fadeOut(100);
            $('body').remove('h-screen').removeClass('overflow-hidden');
            // Check if the "cookie-consent" cookie exists
            if (!document.cookie.includes('cookie-consent')) {
                $('#cookie-consent').removeClass('hidden');
            }
        };
    </script>

    {{-- mobile menu trigger --}}
    <script>
        var mobileMenu = $('#mobile-menu');
        $(document).on('click', '.mobile-menu-trigger', function(e) {
            e.preventDefault();
            mobileMenu.toggleClass('hidden');
        });
    </script>




    {{-- fix and shrink header --}}
    <script>
        // scroll
        window.addEventListener('scroll', function() {
            const fixedHeader = document.getElementById('fixed-header');
            const scrollPosition = window.scrollY;

            // Adjust the scroll threshold according to your preference
            const scrollThreshold = 100;

            if (scrollPosition >= scrollThreshold) {
                fixedHeader.classList.add('fixed');
                fixedHeader.classList.add('z-40');
                fixedHeader.classList.add('border-b');
                fixedHeader.classList.add('border-slate-800');


            } else {
                fixedHeader.classList.remove('fixed');
                fixedHeader.classList.remove('z-40');
                fixedHeader.classList.remove('border-b');
                fixedHeader.classList.remove('border-slate-800');


            }

        });
    </script>

    {{-- livechat --}}
    {!! json_decode(site('livechat')) !!}


</body>


<!-- Mirrored from thetork.com/demos/html/bitrader/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jan 2024 23:31:37 GMT -->
</html>
  
