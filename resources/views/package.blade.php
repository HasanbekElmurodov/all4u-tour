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
          <h3 class="display-4 text-white text-uppercase">{{ __('packagesTitle') }}</h3>
          <div class="d-inline-flex text-white">
            <p class="m-0 text-uppercase">
              <a class="text-white" href="">{{ __('navLink1') }}</a>
            </p>
            <i class="fa fa-angle-double-right pt-1 px-3"></i>
            <p class="m-0 text-uppercase">{{ __('packagesTitle') }}</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Header End -->

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
            <div class="package-item bg-white mb-2">
              <img class="img-fluid" src="https://media.cntraveler.com/photos/5e53fb401fac0d0008a05a3b/master/w_3000,h_1996,c_limit/Samarkand-Square-GettyImages-1185723641.jpg" alt="" />
              <div class="p-4">
                <div class="d-flex justify-content-between mb-3">
                  <small class="m-0"
                    ><i class="fa fa-map-marker-alt text-primary mr-2"></i
                    >{{ __('tourCountry1') }}</small
                  >
                  <small class="m-0"
                    ><i class="fa fa-calendar-alt text-primary mr-2"></i>{{ __('tourDuring1') }}</small
                  >
                  <small class="m-0"
                    ><i class="fa fa-user text-primary mr-2"></i>{{ __('tourType1') }}</small
                  >
                </div>
                <a class="h5 text-decoration-none" href=""
                  >{{ __('tourName1') }}</a
                >
                <div class="border-top mt-4 pt-4">
                  <div class="d-flex justify-content-between">
                    <h6 class="m-0">
                      <i class="fa fa-star text-primary mr-2"></i>4.5
                      <small>(250)</small>
                    </h6>
                    {{-- <h5 class="m-0">$350</h5> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="package-item bg-white mb-2">
              <img class="img-fluid" src="https://www.atorus.ru/sites/default/files/styles/amp_1200x675_16_9/public/2021-09/aac55c.jpg.webp?itok=C_VUx3TF" alt="" />
              <div class="p-4">
                <div class="d-flex justify-content-between mb-3">
                  <small class="m-0"
                    ><i class="fa fa-map-marker-alt text-primary mr-2"></i
                    >{{ __('tourCountry1') }}</small
                  >
                  <small class="m-0"
                    ><i class="fa fa-calendar-alt text-primary mr-2"></i>{{__('tourDuring2')}}</small
                  >
                  <small class="m-0"
                    ><i class="fa fa-user text-primary mr-2"></i>{{ __('tourType2') }}</small
                  >
                </div>
                <a class="h5 text-decoration-none" href=""
                  >{{ __('tourName2') }}</a
                >
                <div class="border-top mt-4 pt-4">
                  <div class="d-flex justify-content-between">
                    <h6 class="m-0">
                      <i class="fa fa-star text-primary mr-2"></i>4.9
                      <small>(320)</small>
                    </h6>
                    {{-- <h5 class="m-0">$350</h5> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="package-item bg-white mb-2">
              <img class="img-fluid" src="https://static.horizonguides.com/images/_wide/Uzbekistan_Khiva_Kalta-Minor-in-walled-inner-town-of-tchan-Kala.jpg" alt="" />
              <div class="p-4">
                <div class="d-flex justify-content-between mb-3">
                  <small class="m-0"
                    ><i class="fa fa-map-marker-alt text-primary mr-2"></i
                    >{{ __('tourCountry1') }}</small
                  >
                  <small class="m-0"
                    ><i class="fa fa-calendar-alt text-primary mr-2"></i>{{ __('tourDuring3') }}</small
                  >
                  <small class="m-0"
                    ><i class="fa fa-user text-primary mr-2"></i>{{ __('tourType3') }}</small
                  >
                </div>
                <a class="h5 text-decoration-none" href=""
                  >{{ __('tourName3') }}</a
                >
                <div class="border-top mt-4 pt-4">
                  <div class="d-flex justify-content-between">
                    <h6 class="m-0">
                      <i class="fa fa-star text-primary mr-2"></i>4.5
                      <small>(250)</small>
                    </h6>
                    {{-- <h5 class="m-0">$350</h5> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Packages End -->



@endsection
@section('js')
    <!-- Contact Javascript File -->
    <script src="../mail/jqBootstrapValidation.min.js"></script>
    <script src="../mail/contact.js"></script>
@endsection

