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
          <h3 class="display-4 text-white text-uppercase">{{ __('servicesTitle') }}</h3>
          <div class="d-inline-flex text-white">
            <p class="m-0 text-uppercase">
              <a class="text-white" href="">{{ __('navLink1') }}</a>
            </p>
            <i class="fa fa-angle-double-right pt-1 px-3"></i>
            <p class="m-0 text-uppercase">{{ __('navLink3') }}</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Header End -->

    <!-- Service Start -->
    <div class="container-fluid py-5">
      <div class="container pt-5 pb-3" data-aos="flip-left">
        <div class="text-center mb-3 pb-3">
          <h6 class="text-primary text-uppercase" style="letter-spacing: 5px">
            {{ __('navLink3') }}
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

    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
      <div class="container py-5">
        <div class="text-center mb-3 pb-3">
          <h6 class="text-primary text-uppercase" style="letter-spacing: 5px">
            {{ __('mijoz_fikri') }}
          </h6>
          <h1>{{ __('all4u_haqida_fikr') }}</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
          <div class="text-center pb-4">
            <img
              class="img-fluid mx-auto"
              src="{{asset('/website/assets/img/testimonial-1.jpg')}}"
              style="width: 100px; height: 100px"
            />
            <div class="testimonial-text bg-white p-4 mt-n5">
              <p class="mt-5">
                {{__('fikr1')}}
              </p>
              <h5 class="text-truncate">{{ __('client_name1') }}</h5>
              {{-- <span>Profession</span> --}}
            </div>
          </div>
          <div class="text-center">
            <img
              class="img-fluid mx-auto"
              src="{{asset('/website/assets/img/testimonial-2.jpg')}}"
              style="width: 100px; height: 100px"
            />
            <div class="testimonial-text bg-white p-4 mt-n5">
              <p class="mt-5">
                {{ __('fikr2') }}
              </p>
              <h5 class="text-truncate">{{ __('client_name2') }}</h5>
              {{-- <span>Profession</span> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Testimonial End -->
@endsection
@section('js')
    <!-- Contact Javascript File -->
    <script src="../mail/jqBootstrapValidation.min.js"></script>
    <script src="../mail/contact.js"></script>
@endsection


