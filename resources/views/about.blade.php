@extends('layouts.app')

@section('css')
@endsection
@section('content')


    <!-- Header Start -->
    <div class="container-fluid page-header">
      <div class="container">
        <div
          class="d-flex flex-column align-items-center justify-content-center"
          style="min-height: 400px"
        >
          <h3 class="display-4 text-white text-uppercase">{{ __('navLink2') }}</h3>
          <div class="d-inline-flex text-white">
            <p class="m-0 text-uppercase">
              <a class="text-white" href="/">{{ __('navLink1') }}</a>
            </p>
            <i class="fa fa-angle-double-right pt-1 px-3"></i>
            <p class="m-0 text-uppercase">{{ __('navLink2') }}</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Header End -->
    <!-- Modal -->
    <div id="recall-modal" class="modal">
      <div class="container-this">
        <div class="close close_modal_span" onclick="closeModal()">&times;</div>
        <form>
          <ul>
            <li>
              <label for="name"
                ><span
                  >Ismingiz: <span class="required-star">*</span></span
                ></label
              >
              <input type="text" id="name" name="user_name" />
            </li>
            <li>
              <label for="mail"
                ><span
                  >Pochta: <span class="required-star">*</span></span
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
              <input type="submit" value="{{ __('yuborish') }}" />
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
                {{ __('navLink2') }}
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

    <!-- Registration Start -->
    <div class="container-fluid bg-registration py-5" style="margin: 90px 0">
      <div class="container py-5">
        <div class="row align-items-center">
          <div class="col-lg-7 mb-5 mb-lg-0">
            <div class="mb-4">
              <h6
                class="text-primary text-uppercase"
                style="letter-spacing: 5px"
              >
                {{ __('specialOffers') }}
              </h6>
              <h1 class="text-white">
                <span class="text-primary">Bepul </span> mutaxasis yordami
              </h1>
            </div>
            <p class="text-white">
              Bizning mutaxasislar sizga o'z yordamini berishdan judayam mamnun!
              Shunchaki qo'ng'iroq uchun raqamingizni yoki elektron pochtangizni
              qoldiring va biz o'zimiz sizga a'loqaga chiqamiz !
            </p>
            <ul class="list-inline text-white m-0">
              <li class="py-2">
                <i class="fa fa-check text-primary mr-3"></i> Barcha tur
                paketlar bilan tanishtiramiz
              </li>
              <li class="py-2">
                <i class="fa fa-check text-primary mr-3"></i> Sizga mos
                keladigan turni topishga yordam beramiz
              </li>
              <li class="py-2">
                <i class="fa fa-check text-primary mr-3"></i> Turni
                rasmiylashtirsh imkoni shu ondayoq paydo bo'ladi
              </li>
            </ul>
          </div>
          <div class="col-lg-5">
            <div class="card border-0">
              <div class="card-header bg-primary text-center p-4">
                <h1 class="text-white m-0">A'riza qoldiring</h1>
              </div>
              <div class="card-body rounded-bottom bg-white p-5">
                <form>
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control p-4"
                      placeholder="{{ __('postName') }}"
                      required="required"
                    />
                  </div>
                  <div class="form-group">
                    <input
                      type="email"
                      class="form-control p-4"
                      placeholder="{{ __('postMail') }}"
                      required="required"
                    />
                  </div>
                  <div class="form-group">
                    <input
                      type="number"
                      class="form-control p-4"
                      placeholder="{{ __('postNumber') }}"
                      required="required"
                    />
                  </div>
                  <div>
                    <button
                      class="btn btn-primary btn-block py-3"
                      type="submit"
                    >
                      {{ __('yuborish') }}
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Registration End -->

@endsection
@section('js')
    <!-- Contact Javascript File -->
    <script src="../mail/jqBootstrapValidation.min.js"></script>
    <script src="../mail/contact.js"></script>
@endsection
