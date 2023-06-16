
<head>
    <meta charset="utf-8" />
    <title>ALL4U Tourism - tezkor va ishonchli tur korxonasi !!!</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="All4U, ALL4Tourism, All Tourism" name="keywords" />
    <meta
      content="ALL4U Tourism - Лучшее турагентство в Узбекистане"
      name="description"
    />

    <!-- Favicon -->
    <link href="{{asset('/website/assets/img/logo/only_logo.svg')}}" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="{{asset('/website/assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet" />
    <link
      href="{{asset('/website/assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('/website/assets/css/style.css')}}" rel="stylesheet" />
    @yield('css')
  </head>

  <body>
    <!-- Preloader -->
    <!-- <div class="preloader">
      <div class="preloader__content">
        <div class="preloader__first"></div>
        <div class="preloader__second"></div>
        <div class="preloader__third"></div>
      </div>
    </div> -->
    <!-- Preloader End -->
    <!-- Topbar Start -->
    <div class="container-fluid bg-light pt-3 d-none d-lg-block">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 text-center text-lg-left mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center">
              <p><i class="fa fa-envelope mr-2"></i>worldmiral@mail.ru</p>
              <p class="text-body px-3">|</p>
              <p>
                <i class="fa fa-phone-alt mr-2"></i
                ><a href="tel: +998 71 230 38 83">+998 71 230 38 83</a>
              </p>
            </div>
          </div>
          <div class="col-lg-4 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
              <a class="text-primary px-3" href="{{ route('locale.change', 'en') }}">
                <img
                  class="header_lang_image"
                  src="{{asset('/website/assets/img/logo/gb.svg')}}"
                  alt="English"
                />
              </a>
              <a class="text-primary px-3" href="{{ route('locale.change', 'ar') }}">
                <img
                  class="header_lang_image"
                  src="{{ asset('/website/assets/img/logo/sa.svg') }}"
                  alt="Arabic"
                />
              </a>
              <a class="text-primary px-3" href="{{ route('locale.change', 'tr') }}">
                <img
                  class="header_lang_image"
                  src="{{ asset('/website/assets/img/logo/tr.svg') }}"
                  alt="Turkey"
                />
              </a>
              <a class="text-primary px-3" href="{{ route('locale.change', 'ru') }}">
                <img class="header_lang_image" src="{{asset('/website/assets/img/logo/ru.svg')}}" />
              </a>
              <a class="text-primary px-3" href="{{ route('locale.change', 'cn') }}">
                <img class="header_lang_image" src="{{asset('/website/assets/img/logo/cn.svg')}}" />
              </a>
              <a class="text-primary px-3" href="{{ route('locale.change', 'uz') }}">
                <img class="header_lang_image" src="{{asset('/website/assets/img/logo/uz.svg')}}" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div id="main_nav" class="container-fluid position-relative nav-bar p-0">
      <div
        class="container-lg position-relative p-0 px-lg-3"
        style="z-index: 9"
      >
        <nav
          class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5"
        >
                      <div class="select_lang">
            <button
              type="button"
              data-toggle="collapse"
              data-target="#langCollapse"
              class="mobLangButton"
            >
              EN
            </button>
            <ul id="langCollapse" class="collapse">
              <li><a href="{{ route('locale.change', 'en') }}">EN</a></li>
              <li><a href="{{ route('locale.change', 'ru') }}">RU </a></li>
              <li><a href="{{ route('locale.change', 'uz') }}">Uz</a></li>
              <li><a href="{{ route('locale.change', 'cn') }}">Cn</a></li>
              <li><a href="{{ route('locale.change', 'tr') }}">Tr</a></li>
              <li><a href="{{ route('locale.change', 'ar') }}">Sa</a></li>
            </ul>
            <i class="fa fa-angle-down mr-2"></i>
          </div>

          <a href="/" class="navbar-brand">
            <img class="mylogo" src="{{asset('/website/assets/img/logo/plane.svg')}}" />
          </a>
          <button
            type="button"
            class="navbar-toggler"
            data-toggle="collapse"
            data-target="#navbarCollapse"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse justify-content-between px-3"
            id="navbarCollapse"
          >
            <div class="navbar-nav ml-auto py-0">
              <a href="/" class="nav-item nav-link active"
                >{{ __('navLink1') }}</a
              >
              <a href="/about" class="nav-item nav-link"
                >{{ __('navLink2') }}</a
              >
              <a href="/service" class="nav-item nav-link"
                >{{ __('navLink3') }}</a
              >
              <a href="/package" class="nav-item nav-link"
                >{{ __('navLink4') }}</a
              >
              <!-- <div class="nav-item dropdown">
                <a
                  href="#"
                  class="nav-link dropdown-toggle"
                  data-toggle="dropdown"
                  >Страницы</a
                >
                <div class="dropdown-menu border-0 rounded-0 m-0">
                  <a href="./pages/blog.html" class="dropdown-item">Новости</a>
                  <a href="./pages/single.html" class="dropdown-item"
                    >Blog Detail</a
                  >
                  <a href="./pages/destination.html" class="dropdown-item"
                    >Destination</a
                  >
                  <a href="./pages/guide.html" class="dropdown-item"
                    >Travel Guides</a
                  >
                  <a href="./pages/testimonial.html" class="dropdown-item"
                    >Testimonial</a
                  >
                </div>
              </div> -->
              <a href="/contact" class="nav-item nav-link">{{ __('navLink5') }}</a>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <!-- Navbar End -->
    <!-- <button class="btn-danger" id="skip-btn">Skip</button>
    <video autoplay muted>
      <source
        src="https://videos.pond5.com/4k-video-resolution-uzbekistan-tashkent-footage-106834015_main_xxl.mp4"
        type="video/mp4"
      />
      Your browser does not support the video tag.
    </video> -->

@yield('content')

    <!-- Footer Start -->
    <div
      class="container-fluid bg-dark text-white-50 py px-sm-3 px-lg-5"
      style="margin-top: 90px"
    >
      <div class="row pt-5">
        <div class="col-lg-3 col-md-6 mb-5">
          <a href="https://all4u-tour.uz" class="navbar-brand">
            <img class="footer_logo" src="{{asset('/website/assets/img/logo/footer_logosvg.svg')}}" />
          </a>
          <p>
            {{ __('footerDescription') }}
          </p>
          <h6
            class="text-white text-uppercase mt-4 mb-3"
            style="letter-spacing: 5px"
          >
            {{ __('weInSocials') }}
          </h6>
          <div class="d-flex justify-content-start">
            <a class="btn btn-outline-primary btn-square mr-2" href="#"
              ><i class="fab fa-twitter"></i
            ></a>
            <a class="btn btn-outline-primary btn-square mr-2" href="#"
              ><i class="fab fa-facebook-f"></i
            ></a>
            <a class="btn btn-outline-primary btn-square mr-2" href="#"
              ><i class="fab fa-linkedin-in"></i
            ></a>
            <a class="btn btn-outline-primary btn-square" href="#"
              ><i class="fab fa-instagram"></i
            ></a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
          <h5
            class="text-white text-uppercase mb-4"
            style="letter-spacing: 5px"
          >
            {{ __('footerServicesTitle') }}
          </h5>
          <div class="d-flex flex-column justify-content-start">
            <a class="text-white-50 mb-2" href="/about"
              ><i class="fa fa-angle-right mr-2"></i>{{ __('footerServicesLink1') }}</a
            >

            <a class="text-white-50 mb-2" href="/service"
              ><i class="fa fa-angle-right mr-2"></i>{{ __('footerServicesLink2') }}</a
            >
            <a class="text-white-50 mb-2" href="/package"
              ><i class="fa fa-angle-right mr-2"></i>{{ __('footerServicesLink3') }}</a
            >

            <!-- <a class="text-white-50" href="#"
              ><i class="fa fa-angle-right mr-2"></i>Blog</a
            > -->
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
          <h5
            class="text-white text-uppercase mb-4"
            style="letter-spacing: 5px"
          >
            {{ __('footerUsefullTitle') }}
          </h5>
          <div class="d-flex flex-column justify-content-start">
            <a class="text-white-50 mb-2" href="https://worldmiral.com"
              ><i class="fa fa-angle-right mr-2"></i>{{__('footerUsefullLink1')}}
            </a>
            <a class="text-white-50 mb-2" href="https://all4u.market"
              ><i class="fa fa-angle-right mr-2"></i>{{ __('footerUsefullLink2') }}</a
            >
            <a
              class="text-white-50 mb-2"
              href="http://worldmiral.com/consalting"
              ><i class="fa fa-angle-right mr-2"></i>{{ __('footerUsefullLink3') }}</a
            >
            <a class="text-white-50 mb-2" href="#"
              ><i class="fa fa-angle-right mr-2"></i>{{ __('footerUsefullLink4') }}</a
            >
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
          <h5
            class="text-white text-uppercase mb-4"
            style="letter-spacing: 5px"
          >
            {{ __('footerContactTitle') }}
          </h5>
          <p>
            <i class="fa fa-map-marker-alt mr-2"></i>{{__('footerLocation')}}
          </p>
          <p>
            <a href="tel: +998 71 230 38 83"
              ><i class="fa fa-phone-alt mr-2"></i>+998 71 230 38 83</a
            >
          </p>
          <p><i class="fa fa-envelope mr-2"></i>worldmiral@mail.ru</p>
                    <p>
            <a href="tel: +998 99 350 00 00" class="text-white-50"
              ><i class="fa fa-phone-alt mr-2"></i>Rahbariyat:
              <span style="color: #7ab730">+998 99 350 00 00</span></a
            >
          </p>
          <div class="w-100">
            <div class="input-group">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5"
      style="border-color: rgba(256, 256, 256, 0.1) !important"
    >
      <div class="row">
        <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
          <p class="m-0 text-white-50">
            {{ __('footerRights') }}

          </p>
        </div>
        <!-- <div class="col-lg-6 text-center text-md-right">
          <p class="m-0 text-white-50">
            Designed by <a href="https://">HTML Codex</a>
          </p>
        </div> -->
      </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
      ><i class="fa fa-angle-double-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('/website/assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('/website/assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/website/assets/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('/website/assets/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('/website/assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>

    <script>
      AOS.init({
        duration: 1500,
      });
      const skipBtn = document.getElementById("skip-btn");
      const video = document.querySelector("video");

      skipBtn.addEventListener("click", () => {
        video.style.display = "none";
      });
      skipBtn.addEventListener("click", () => {
        video.style.display = "none";
        localStorage.setItem("intro-video-skipped", true);
      });
      const introVideoSkipped = localStorage.getItem("intro-video-skipped");

      if (introVideoSkipped) {
        video.style.display = "none";
        skipBtn.style.display = "none";
      }
    </script>

    <!-- Contact Javascript File -->
    <script src="{{asset('/website/assets/mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{asset('/website/assets/mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('/website/assets/js/main.js')}}"></script>
    @yield('js')
  </body>
