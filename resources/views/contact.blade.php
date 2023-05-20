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
          <h3 class="display-4 text-white text-uppercase">{{ __('navLink5') }}</h3>
          <div class="d-inline-flex text-white">
            <p class="m-0 text-uppercase">
              <a class="text-white" href="">{{ __('navLink1') }}</a>
            </p>
            <i class="fa fa-angle-double-right pt-1 px-3"></i>
            <p class="m-0 text-uppercase">{{ __('navLink5') }}</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Header End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5">
      <div class="container py-5">
        <div class="text-center mb-3 pb-3">
          {{-- <h6 class="text-primary text-uppercase" style="letter-spacing: 5px">
            Contact
          </h6> --}}
          <h1>{{ __('boglanamiz') }}</h1>
            </div>
        <div class="row justify-content-center">
          <div class="col-md-7">
            <div class="contact-form bg-white" style="padding: 30px">
              <div id="success"></div>
              <form

                action="{{ route('requests.store') }}"
                method="POST">
                @csrf
                <div class="form-row">
                  <div class="control-group col-sm-6">
                    <input
                      type="text"
                      name="name"
                      class="form-control p-4"
                      id="name"
                      placeholder="{{ __('postName') }}"
                    />
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="control-group col-sm-6">
                    <input
                      type="email"
                      name="email"
                      class="form-control p-4"
                      id="email"
                      placeholder="{{ __('postMail') }}"
                    />
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="control-group">
                  <input
                    type="text"
                    name="title"
                    class="form-control p-4"
                    id="subject"
                    placeholder="{{ __('postTitle') }}"
                  />
                  <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                  <textarea
                    class="form-control py-3 px-4"
                    rows="5"
                    name="content"
                    id="message"
                    placeholder="{{ __('postMessage') }}"
                  ></textarea>
                  <p class="help-block text-danger"></p>
                </div>
                <div class="text-center">
                  <button
                    class="btn btn-primary py-3 px-4"
                    type="submit"
                    id="sendMessageButton"
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
    <!-- Contact End -->
@endsection
@section('js')
    <!-- Contact Javascript File -->
    <script src="../mail/jqBootstrapValidation.min.js"></script>
    <script src="../mail/contact.js"></script>
@endsection
