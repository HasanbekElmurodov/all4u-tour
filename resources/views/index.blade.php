@extends('layouts.app')

@section('css')
@endsection
@section('content')
 <!-- Carousel Start -->
 <div class="container-fluid p-0">
      <div
        id="header-carousel"
        class="carousel slide header_carousel"
        data-ride="carousel"
      >
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="w-100" src="{{asset('/website/assets/img/main_back.gif')}}" alt="Image" />
            <div
              class="carousel-caption d-flex flex-column align-items-center justify-content-center"
            >
              <div class="p-3" style="max-width: 900px">
                <h4
                  class="text-white text-uppercase mb-md-3"
                  data-aos="zoom-in"
                >
                  {{ __('homeCarouselTitle') }}
                </h4>
                <h1
                  class="text-white mb-md-4"
                  data-aos="zoom-in"
                  data-aos-duration=""
                >
                  {{__('carouselDescription1')}}
                </h1>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img
              class="w-100"
              src="https://uzbektourism.uz/img_conv/1614085989036max.jpg"
              alt="Image"
            />
            <div
              class="carousel-caption d-flex flex-column align-items-center justify-content-center"
            >
              <div class="p-3" style="max-width: 900px">
                <h4 class="text-white text-uppercase mb-md-3">
                    {{ __('homeCarouselTitle') }}
                </h4>
                <h1 class="text-white mb-md-4" data-aos="fade-up">
                    {{__('carouselDescription2')}}
                </h1>
              </div>
            </div>
          </div>
        </div>
        <a
          class="carousel-control-prev"
          href="#header-carousel"
          data-slide="prev"
        >
          <div class="btn btn-dark" style="width: 45px; height: 45px">
            <span class="carousel-control-prev-icon mb-n2"></span>
          </div>
        </a>
        <a
          class="carousel-control-next"
          href="#header-carousel"
          data-slide="next"
        >
          <div class="btn btn-dark" style="width: 45px; height: 45px">
            <span class="carousel-control-next-icon mb-n2"></span>
          </div>
        </a>
      </div>
    </div>
    <!-- Carousel End -->

    <!-- Destination Start -->
    <div class="container-fluid py-5">
      <div class="container pt-5 pb-3" data-aos="zoom-out">
        <div class="text-center mb-3 pb-3">
          <h6 class="text-primary text-uppercase" style="letter-spacing: 5px">
            {{ __('specialOffers') }}
          </h6>
          <h1>{{ __('offersTitle') }}</h1>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div
              class="destination-item position-relative overflow-hidden mb-2"
            >
              <img
                class="img-fluid"
                src="https://storage.kun.uz/source/4/WySAZzWh-v3yYmjgSTtkzZcwy6_obVhY.jpg"
                alt=""
              />
              <a
                class="destination-overlay text-white text-decoration-none"
                href="/404"
              >
                <h2 class="text-white">{{ __('businesTour') }}</h2>
                <!-- <span>17 manzil</span> -->
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div
              class="destination-item position-relative overflow-hidden mb-2"
            >
              <img
                class="img-fluid"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/04/Registan_square_Samarkand%2C_Uzbekistan%2C_at_night.jpg/1024px-Registan_square_Samarkand%2C_Uzbekistan%2C_at_night.jpg"
              />
              <a
                class="destination-overlay text-white text-decoration-none"
                href="/404"
              >
                <h2 class="text-white">{{ __('religiousTour') }}</h2>
                <!-- <span>100 Cities</span> -->
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div
              class="destination-item position-relative overflow-hidden mb-2"
            >
              <img
                class="img-fluid"
                src="https://meros.uz/uploads/wonder/wonder//afbeba156dd80bc22c4e1d87da7d76c3.jpg"
                alt=""
              />
              <a
                class="destination-overlay text-white text-decoration-none"
                href="/404"
              >
                <h2 class="text-white text-center">
                  {{__('freeTourism')}}
                </h2>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Destination Start -->
    <!-- Service Start -->
    <div class="container-fluid py-5">
      <div class="container pt-5 pb-3" data-aos="flip-left">
        <div class="text-center mb-3 pb-3">
          <h6 class="text-primary text-uppercase" style="letter-spacing: 5px">
            {{ __('servicesTitle') }}
          </h6>
          <h1>{{ __('servicesDescription') }}</h1>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-item bg-white text-center mb-2 py-5 px-4">
              <i class="fa fa-2x fa-route mx-auto mb-4"></i>
              <h5 class="mb-2">{{ __('serviceTitle1') }}</h5>
              <p class="m-0">
                {{__('serviceDescription1')}}
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-item bg-white text-center mb-2 py-5 px-4">
              <i class="fa fa-2x fa-ticket-alt mx-auto mb-4"></i>
              <h5 class="mb-2">{{ __('serviceTitle2') }}</h5>
              <p class="m-0">
                {{__('serviceDescription2')}}
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-item bg-white text-center mb-2 py-5 px-4">
              <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
              <h5 class="mb-2">{{ __('serviceTitle3') }}</h5>
              <p class="m-0">
                {{__('serviceDescription3')}}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Service End -->

    <!-- Modal -->
    <div id="recall-modal" class="modal">
      <div class="container-this">
        <div class="close close_modal_span" onclick="closeModal()">&times;</div>
        <form>
          <ul>
            <li>
              <label for="name"
                ><span
                  >{{ __('postName') }} <span class="required-star">*</span></span
                ></label
              >
              <input type="text" id="name" name="user_name" />
            </li>
            <li>
              <label for="mail"
                ><span
                  >{{ __('postMail') }} <span class="required-star">*</span></span
                ></label
              >
              <input type="email" id="mail" name="user_email" />
            </li>
            <li>
              <label for="phone-number"
                ><span
                  >{{ __('postNumber') }} <span class="required-star">*</span></span
                ></label
              >
              <input type="text" id="phone-number" name="user_phone_number" />
            </li>
            <li>
              <label for="msg"><span>Xabar</span></label>
              <textarea
                rows="1"
                cols="20"
                aria-valuetext="I Want to travel tp Bukhara "
              ></textarea>
            </li>
            <li>
              <input type="submit" value="Yuborish" />
            </li>
          </ul>
        </form>
      </div>
    </div>

    <!-- About Start -->
    <div class="container-fluid py-5 overflow-hidden">
      <div class="container overflow-hidden pt-5">
        <div class="row">
          <div class="col-lg-6" style="min-height: 500px">
            <div class="position-relative h-100">
              <img
                class="position-absolute w-100 h-100"
                src="https://media.cntraveler.com/photos/5e53fb401fac0d0008a05a3b/master/w_3000,h_1996,c_limit/Samarkand-Square-GettyImages-1185723641.jpg"
                style="object-fit: cover"
              />
            </div>
          </div>
          <div class="col-lg-6 pt-5 pb-lg-5">
            <div
              class="about-text bg-white p-4 p-lg-5 my-lg-5"
              data-aos="fade-down"
            >
              <h6
                class="text-primary text-uppercase"
                style="letter-spacing: 5px"
              >
                {{ __('aboutTitle') }}
              </h6>
              <h1 class="mb-3">
                {{__('aboutMainTitle')}}
              </h1>
              <p>
                {{__('aboutDescription')}}
              </p>
              <div class="row mb-4">
                <div class="col-6">
                  <img
                    class="img-fluid"
                    src="https://uzbekistan.travel/storage/app/uploads/public/5eb/46f/ce0/thumb_765_600_0_0_0_auto.jpg"
                    alt=""
                  />
                </div>
                <div class="col-6">
                  <img
                    class="img-fluid"
                    src="https://uzbekistan.travel/storage/app/uploads/public/5eb/46f/e7c/thumb_766_600_0_0_0_auto.jpg"
                    alt=""
                  />
                </div>
              </div>
              <button
                id="recall-btn"
                onclick="openModal()"
                class="btn btn-primary mt-1"
              >
                {{ __('callRequest') }}
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Feature Start -->
    <div class="container-fluid pb-5">
      <div class="container pb-5">
        <div class="row" data-aos="zoom-in">
          <div class="col-md-6">
            <div class="d-flex mb-6 mb-lg-0">
              <div
                class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3"
                style="height: 100px; width: 100px"
              >
                <i class="fa fa-2x fa-money-check-alt text-white"></i>
              </div>
              <div class="d-flex flex-column">
                <h5 class="">{{ __('aboutColTitle1') }}</h5>
                <p class="m-0">
                  {{__('aboutColDescription1')}}
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="d-flex mb-6 mb-lg-0">
              <div
                class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3"
                style="height: 100px; width: 100px"
              >
                <i class="fa fa-2x fa-award text-white"></i>
              </div>
              <div class="d-flex flex-column">
                <h5 class="">{{ __('aboutColTitle2') }}</h5>
                <p class="m-0">
                  {{__('aboutColDescription2')}}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Feature End -->

    <!-- Packages Start -->
    <div class="container-fluid py-5">
      <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
          <h6 class="text-primary text-uppercase" style="letter-spacing: 5px">
            {{ __('packagesTitle') }}
          </h6>
          <h1>{{ __('packagesDescription') }}</h1>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div
              class="package-item bg-white mb-2"
              data-aos="fade-up"
              data-aos-duration="1300"
            >
              <img
                class="img-fluid"
                src="https://media.cntraveler.com/photos/5e53fb401fac0d0008a05a3b/master/w_3000,h_1996,c_limit/Samarkand-Square-GettyImages-1185723641.jpg"
                alt=""
              />
              <div class="p-4">
                <div class="d-flex justify-content-between mb-3">
                  <small class="m-0"
                    ><i class="fa fa-map-marker-alt text-primary mr-2"></i
                    >{{ __('tourCountry1') }}</small
                  >
                  <small class="m-0"
                    ><i class="fa fa-calendar-alt text-primary mr-2"></i>{{__('tourDuring1')}}</small
                  >
                  <small class="m-0"
                    ><i class="fa fa-user text-primary mr-2"></i
                    >{{ __('tourType1') }}</small
                  >
                </div>
                <a class="h5 text-decoration-none" href="/tour"
                  >{{ __('tourName1') }}
                </a>
                <div class="border-top mt-4 pt-4">
                  <div class="d-flex justify-content-between">
                    <h6 class="m-0">
                      <i class="fa fa-star text-primary mr-2"></i>4.5
                      <small>(250)</small>
                    </h6>
                    <!-- <h5 class="m-0">$1350</h5> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div
              class="package-item bg-white mb-2"
              data-aos="fade-up"
              data-aos-duration="1600"
            >
              <img
                class="img-fluid"
                src="https://www.atorus.ru/sites/default/files/styles/amp_1200x675_16_9/public/2021-09/aac55c.jpg.webp?itok=C_VUx3TF"
                alt=""
              />
              <div class="p-4">
                <div class="d-flex justify-content-between mb-3">
                  <small class="m-0"
                    ><i class="fa fa-map-marker-alt text-primary mr-2"></i
                    >{{ __('tourCountry2') }}</small
                  >
                  <small class="m-0"
                    ><i class="fa fa-calendar-alt text-primary mr-2"></i>{{__('tourDuring2')}}</small
                  >
                  <small class="m-0"
                    ><i class="fa fa-user text-primary mr-2"></i
                    >{{ __('tourType2') }}</small
                  >
                </div>
                <a class="h5 text-decoration-none" href="/tour"
                  >{{ __('tourName2') }}</a
                >
                <div class="border-top mt-4 pt-4">
                  <div class="d-flex justify-content-between">
                    <h6 class="m-0">
                      <i class="fa fa-star text-primary mr-2"></i>4.9
                      <small>(320)</small>
                    </h6>
                    <!-- <h5 class="m-0">$350</h5> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div
              class="package-item bg-white mb-2"
              data-aos="fade-up"
              data-aos-duration="1900"
            >
              <img
                class="img-fluid"
                src="https://static.horizonguides.com/images/_wide/Uzbekistan_Khiva_Kalta-Minor-in-walled-inner-town-of-tchan-Kala.jpg"
                alt=""
              />
              <div class="p-4">
                <div class="d-flex justify-content-between mb-3">
                  <small class="m-0"
                    ><i class="fa fa-map-marker-alt text-primary mr-2"></i
                    >{{ __('tourCountry3') }}</small
                  >
                  <small class="m-0"
                    ><i class="fa fa-calendar-alt text-primary mr-2"></i>{{__('tourDuring3')}}</small
                  >
                  <small class="m-0"
                    ><i class="fa fa-user text-primary mr-2"></i
                    >{{ __('tourType3') }}</small
                  >
                </div>
                <a class="h5 text-decoration-none" href="/404"
                  >{{ __('tourName3') }}</a
                >
                <div class="border-top mt-4 pt-4">
                  <div class="d-flex justify-content-between">
                    <h6 class="m-0">
                      <i class="fa fa-star text-primary mr-2"></i>4.5
                      <small>(250)</small>
                    </h6>
                    <!-- <h5 class="m-0">$350</h5> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Packages End -->

    <!-- Blog Start -->
    <div class="container-fluid py-5">
      <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
          <h6 class="text-primary text-uppercase" style="letter-spacing: 5px">
            {{ __('newsTitle') }}
          </h6>
          <h1>{{ __('newsDescription') }}</h1>
        </div>
        <div class="row pb-3">
          <div
            class="col-lg-4 col-md-6 mb-4 pb-2 news_container"
            data-aos="zoom-in"
          >
            <div class="blog-item">
              <div class="position-relative">
                <img
                  class="img-fluid w-100 home_news_img"
                  src="https://uzbekistan.travel/storage/app/uploads/public/642/15c/c7d/thumb_2679_740_0_0_0_auto.webp"
                  alt=""
                />
                <div class="blog-date">
                  <h6 class="font-weight-bold mb-n1">27</h6>
                  <small class="text-white text-uppercase">Mart</small>
                </div>
              </div>
              <div class="bg-white p-4">
                <!-- <div class="d-flex mb-2"></div> -->
                <a
                  class="h5 m-0 text-decoration-none news_content"
                  href="https://uzbekistan.travel/uz/o/ozbekistonning-5-ta-aeroportida-tax-free-xizmati-joriy-qilindi/"
                  >{{__('singleNewsTitle1')}}</a
                >
              </div>
            </div>
          </div>
          <div
            class="col-lg-4 col-md-6 mb-4 pb-2 news_container"
            data-aos="zoom-in"
          >
            <div class="blog-item">
              <div class="position-relative">
                <img
                  class="img-fluid w-100 home_news_img"
                  src="{{asset('/website/assets/img/news/news3.jpg')}}"
                  alt=""
                />
                <div class="blog-date">
                  <h6 class="font-weight-bold mb-n1">21</h6>
                  <small class="text-white text-uppercase">Mart</small>
                </div>
              </div>
              <div class="bg-white p-4">
                <!-- <div class="d-flex mb-2"></div> -->
                <a
                  class="h5 m-0 text-decoration-none news_content"
                  href="https://uzbekistan.travel/uz/o/navroz-bayramini-qayerda-nishonlash-mumkin/"
                  >{{ __('singleNewsTitle2') }}</a
                >
              </div>
            </div>
          </div>
          <div
            class="col-lg-4 col-md-6 mb-4 pb-2 news_container"
            data-aos="zoom-in"
          >
            <div class="blog-item">
              <div class="position-relative">
                <img
                  class="img-fluid w-100 home_news_img"
                  src="{{asset('/website/assets/img/news/news4.jpg')}}"
                  alt=""
                />
                <div class="blog-date">
                  <h6 class="font-weight-bold mb-n1">13</h6>
                  <small class="text-white text-uppercase">Mart</small>
                </div>
              </div>
              <div class="bg-white p-4">
                <!-- <div class="d-flex mb-2"></div> -->
                <a
                  class="h5 m-0 text-decoration-none news_content"
                  href="https://uzbekistan.travel/uz/o/germaniya-turistik-assotsiatsiyasi-bilan-anglashuv-memorandumi-imzolandi/"
                  >{{__('singleNewsTitle3')}}</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Blog End -->
@endsection
@section('js')
@endsection
