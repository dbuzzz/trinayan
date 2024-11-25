@extends('frontend.layout')
@section('extern-css')
@endsection
@section('content')
<main>
    <div
      class="it-breadcrumb-area fix p-relative"
      data-background="{{asset('')}}frontend_assets/img/breadcrumb/breadcrumb-bg.jpg"
    >
      <div class="it-breadcrumb-shape-1">
        <img src="{{asset('')}}frontend_assets/img/breadcrumb/breadcrumb-shape.png" alt="" />
      </div>
      <div class="it-breadcrumb-transparent-text">
        <h3 class="it-breadcrumb-transparent-title">Solvora</h3>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="it-breadcrumb-content">
              <div class="it-breadcrumb-title-box mb-25 z-index-3">
                <h3 class="it-breadcrumb-title text-white">
                  services
                </h3>
              </div>
              <div class="it-breadcrumb-list-wrap">
                <div class="it-breadcrumb-list z-index-3">
                  <span><a href="index.html">Home</a></span>
                  <span class="dvdr">//</span>
                  <span><b>Services</b></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="it-service-2-area inner-service-1 p-relative pt-120 pb-90">
      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
            <div class="it-service-2-item">
              <div
                class="it-service-2-content z-index-5 p-relative text-center"
              >
                <div class="it-service-2-content-shape">
                  <img
                    src="{{asset('')}}frontend_assets/img/service/service-2-shape-2.png"
                    alt=""
                  />
                </div>
                <div class="it-service-2-thumb-box p-relative mb-40">
                  <div class="it-service-2-thumb-shape">
                    <span>
                      <svg
                        width="165"
                        height="150"
                        viewbox="0 0 165 150"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M165 65C165 106.421 116.421 150 75 150C33.5786 150 0 116.421 0 75C0 33.5786 33.5786 0 75 0C116.421 0 165 23.5786 165 65Z"
                          fill="currentColor"
                        ></path>
                      </svg>
                    </span>
                  </div>
                  <div class="it-service-2-thumb">
                    <img src="{{asset('')}}frontend_assets/img/service/service-2-1.png" alt="" />
                  </div>
                </div>
                <h3 class="it-section-title-sm">
                  <a href="service-details.html">Solar Panel Services</a>
                </h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt
                </p>
                <div class="it-service-2-icon mt-25">
                  <a href="service-details.html"
                    ><i class="flaticon-right-up"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
            <div class="it-service-2-item">
              <div
                class="it-service-2-content z-index-5 p-relative text-center"
              >
                <div class="it-service-2-content-shape">
                  <img
                    src="{{asset('')}}frontend_assets/img/service/service-2-shape-2.png"
                    alt=""
                  />
                </div>
                <div class="it-service-2-thumb-box p-relative mb-40">
                  <div class="it-service-2-thumb-shape">
                    <span>
                      <svg
                        width="165"
                        height="150"
                        viewbox="0 0 165 150"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M165 65C165 106.421 116.421 150 75 150C33.5786 150 0 116.421 0 75C0 33.5786 33.5786 0 75 0C116.421 0 165 23.5786 165 65Z"
                          fill="currentColor"
                        ></path>
                      </svg>
                    </span>
                  </div>
                  <div class="it-service-2-thumb">
                    <img src="{{asset('')}}frontend_assets/img/service/service-2-2.png" alt="" />
                  </div>
                </div>
                <h3 class="it-section-title-sm">
                  <a href="service-details.html">Wind Turbines</a>
                </h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt
                </p>
                <div class="it-service-2-icon mt-25">
                  <a href="service-details.html"
                    ><i class="flaticon-right-up"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
            <div class="it-service-2-item">
              <div
                class="it-service-2-content z-index-5 p-relative text-center"
              >
                <div class="it-service-2-content-shape">
                  <img
                    src="{{asset('')}}frontend_assets/img/service/service-2-shape-2.png"
                    alt=""
                  />
                </div>
                <div class="it-service-2-thumb-box p-relative mb-40">
                  <div class="it-service-2-thumb-shape">
                    <span>
                      <svg
                        width="165"
                        height="150"
                        viewbox="0 0 165 150"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M165 65C165 106.421 116.421 150 75 150C33.5786 150 0 116.421 0 75C0 33.5786 33.5786 0 75 0C116.421 0 165 23.5786 165 65Z"
                          fill="currentColor"
                        ></path>
                      </svg>
                    </span>
                  </div>
                  <div class="it-service-2-thumb">
                    <img src="{{asset('')}}frontend_assets/img/service/service-2-3.png" alt="" />
                  </div>
                </div>
                <h3 class="it-section-title-sm">
                  <a href="service-details.html">Maintenance</a>
                </h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt
                </p>
                <div class="it-service-2-icon mt-25">
                  <a href="service-details.html"
                    ><i class="flaticon-right-up"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
            <div class="it-service-2-item">
              <div
                class="it-service-2-content z-index-5 p-relative text-center"
              >
                <div class="it-service-2-content-shape">
                  <img
                    src="{{asset('')}}frontend_assets/img/service/service-2-shape-2.png"
                    alt=""
                  />
                </div>
                <div class="it-service-2-thumb-box p-relative mb-40">
                  <div class="it-service-2-thumb-shape">
                    <span>
                      <svg
                        width="165"
                        height="150"
                        viewbox="0 0 165 150"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M165 65C165 106.421 116.421 150 75 150C33.5786 150 0 116.421 0 75C0 33.5786 33.5786 0 75 0C116.421 0 165 23.5786 165 65Z"
                          fill="currentColor"
                        ></path>
                      </svg>
                    </span>
                  </div>
                  <div class="it-service-2-thumb">
                    <img src="{{asset('')}}frontend_assets/img/service/service-2-4.png" alt="" />
                  </div>
                </div>
                <h3 class="it-section-title-sm">
                  <a href="service-details.html">Solar Panels</a>
                </h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt
                </p>
                <div class="it-service-2-icon mt-25">
                  <a href="service-details.html"
                    ><i class="flaticon-right-up"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
            <div class="it-service-2-item">
              <div
                class="it-service-2-content z-index-5 p-relative text-center"
              >
                <div class="it-service-2-content-shape">
                  <img
                    src="{{asset('')}}frontend_assets/img/service/service-2-shape-2.png"
                    alt=""
                  />
                </div>
                <div class="it-service-2-thumb-box p-relative mb-40">
                  <div class="it-service-2-thumb-shape">
                    <span>
                      <svg
                        width="165"
                        height="150"
                        viewbox="0 0 165 150"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M165 65C165 106.421 116.421 150 75 150C33.5786 150 0 116.421 0 75C0 33.5786 33.5786 0 75 0C116.421 0 165 23.5786 165 65Z"
                          fill="currentColor"
                        ></path>
                      </svg>
                    </span>
                  </div>
                  <div class="it-service-2-thumb">
                    <img src="{{asset('')}}frontend_assets/img/service/service-2-5.png" alt="" />
                  </div>
                </div>
                <h3 class="it-section-title-sm">
                  <a href="service-details.html">Solar installation</a>
                </h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt
                </p>
                <div class="it-service-2-icon mt-25">
                  <a href="service-details.html"
                    ><i class="flaticon-right-up"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
            <div class="it-service-2-item">
              <div
                class="it-service-2-content z-index-5 p-relative text-center"
              >
                <div class="it-service-2-content-shape">
                  <img
                    src="{{asset('')}}frontend_assets/img/service/service-2-shape-2.png"
                    alt=""
                  />
                </div>
                <div class="it-service-2-thumb-box p-relative mb-40">
                  <div class="it-service-2-thumb-shape">
                    <span>
                      <svg
                        width="165"
                        height="150"
                        viewbox="0 0 165 150"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M165 65C165 106.421 116.421 150 75 150C33.5786 150 0 116.421 0 75C0 33.5786 33.5786 0 75 0C116.421 0 165 23.5786 165 65Z"
                          fill="currentColor"
                        ></path>
                      </svg>
                    </span>
                  </div>
                  <div class="it-service-2-thumb">
                    <img src="{{asset('')}}frontend_assets/img/service/service-2-6.png" alt="" />
                  </div>
                </div>
                <h3 class="it-section-title-sm">
                  <a href="service-details.html">Eco maintenance</a>
                </h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt
                </p>
                <div class="it-service-2-icon mt-25">
                  <a href="service-details.html"
                    ><i class="flaticon-right-up"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
            <div class="it-service-2-item">
              <div
                class="it-service-2-content z-index-5 p-relative text-center"
              >
                <div class="it-service-2-content-shape">
                  <img
                    src="{{asset('')}}frontend_assets/img/service/service-2-shape-2.png"
                    alt=""
                  />
                </div>
                <div class="it-service-2-thumb-box p-relative mb-40">
                  <div class="it-service-2-thumb-shape">
                    <span>
                      <svg
                        width="165"
                        height="150"
                        viewbox="0 0 165 150"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M165 65C165 106.421 116.421 150 75 150C33.5786 150 0 116.421 0 75C0 33.5786 33.5786 0 75 0C116.421 0 165 23.5786 165 65Z"
                          fill="currentColor"
                        ></path>
                      </svg>
                    </span>
                  </div>
                  <div class="it-service-2-thumb">
                    <img src="{{asset('')}}frontend_assets/img/service/service-2-7.png" alt="" />
                  </div>
                </div>
                <h3 class="it-section-title-sm">
                  <a href="service-details.html">Wind installation</a>
                </h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt
                </p>
                <div class="it-service-2-icon mt-25">
                  <a href="service-details.html"
                    ><i class="flaticon-right-up"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
            <div class="it-service-2-item">
              <div
                class="it-service-2-content z-index-5 p-relative text-center"
              >
                <div class="it-service-2-content-shape">
                  <img
                    src="{{asset('')}}frontend_assets/img/service/service-2-shape-2.png"
                    alt=""
                  />
                </div>
                <div class="it-service-2-thumb-box p-relative mb-40">
                  <div class="it-service-2-thumb-shape">
                    <span>
                      <svg
                        width="165"
                        height="150"
                        viewbox="0 0 165 150"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M165 65C165 106.421 116.421 150 75 150C33.5786 150 0 116.421 0 75C0 33.5786 33.5786 0 75 0C116.421 0 165 23.5786 165 65Z"
                          fill="currentColor"
                        ></path>
                      </svg>
                    </span>
                  </div>
                  <div class="it-service-2-thumb">
                    <img src="{{asset('')}}frontend_assets/img/service/service-2-8.png" alt="" />
                  </div>
                </div>
                <h3 class="it-section-title-sm">
                  <a href="service-details.html">Panel Cleaning</a>
                </h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt
                </p>
                <div class="it-service-2-icon mt-25">
                  <a href="service-details.html"
                    ><i class="flaticon-right-up"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div
      class="it-funfact-area pt-120 pb-90 theme-bg"
      data-background="{{asset('')}}frontend_assets/img/funfact/funfact-bg.png"
    >
      <div class="container">
        <div class="it-funfact-wrapp">
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-4 mb-30">
              <div class="it-funfact-content text-center">
                <h3 class="it-funfact-number">
                  <b
                    class="purecounter"
                    data-purecounter-duration="1"
                    data-purecounter-end="200"
                  ></b
                  >+
                </h3>
                <span class="it-funfact-title">Total Job Complete</span>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 mb-30">
              <div class="it-funfact-content text-center">
                <h3 class="it-funfact-number">
                  <b
                    class="purecounter"
                    data-purecounter-duration="3"
                    data-purecounter-end="5"
                  ></b
                  >K
                </h3>
                <span class="it-funfact-title">Happy Customers</span>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 mb-30">
              <div class="it-funfact-content text-center">
                <h3 class="it-funfact-number">
                  <b
                    class="purecounter"
                    data-purecounter-duration="2"
                    data-purecounter-end="8"
                  ></b
                  >+
                </h3>
                <span class="it-funfact-title">years Experience</span>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 mb-30">
              <div class="it-funfact-content text-center">
                <h3 class="it-funfact-number">
                  <b
                    class="purecounter"
                    data-purecounter-duration="2"
                    data-purecounter-end="12"
                  ></b
                  >+
                </h3>
                <span class="it-funfact-title">Won Awards</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="it-video-2-area pt-120 pb-120" style="margin-top:0rem">
      <div class="container container-1700">
        <div
          class="it-video-2-wrapp p-relative z-index-5"
          data-background="{{asset('')}}frontend_assets/img/video/video-4-bg.png"
        >
          <div class="row align-items-center">
            <div class="col-xl-6">
              <div class="it-video-2-content">
                <h3 class="it-video-2-big-title">
                  intro <br /><span>video</span>
                </h3>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="it-video-2-icon-box text-center">
                <a
                  href="https://www.youtube.com/watch?v=hIrx72QFbbM"
                  class="popup-video"
                >
                  <i class="fa-sharp fa-solid fa-play"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
@section('extern-js')
<script src="{{url('frontend_assets/custom_js/cart.js')}}"></script>
@endsection