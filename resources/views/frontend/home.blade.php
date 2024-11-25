@extends('frontend.layout')
@section('extern-css')
@endsection
@section('content')
    <style>
        .active {
            background: none;
        }
    </style>


    <div style="position: relative">
        <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="4"
                    aria-label="Slide 5"></button>
                {{-- <button
        type="button"
        data-bs-target="#carouselExampleInterval"
        data-bs-slide-to="5"
        aria-label="Slide 6"
      ></button>
      <button
        type="button"
        data-bs-target="#carouselExampleInterval"
        data-bs-slide-to="6"
        aria-label="Slide 7"
      ></button> --}}
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                    <img src="{{ asset('') }}uploads/default/b7.png" class="d-block w-100" alt="..." />
                    <div class="banner-text container-fluid">
                        <div class="row">
                            <div class="col-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                                <h3>UTSAV, RANCHI</h3>
                            </div>
                            <div class="col-6 banner-btn wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                                <button class="button" id="commercial-ongoing">
                                    <a href="{{ url('/project') }}"><span class="button-content">EXPLORE MORE <i
                                                class="gg-arrow-long-right"></i> </span></a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="5000">
                    <img src="{{ asset('') }}uploads/default/t.jpeg" alt="..." />
                    <div class="banner-text container-fluid">
                        <div class="row">
                            <div class="col-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                                <h3>TARANG - HAZARIBAGH</h3>
                            </div>
                            <div class="col-6 banner-btn wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                                <button class="button" id="commercial-ongoing">
                                    <a href="{{ url('/project') }}"><span class="button-content">EXPLORE MORE <i
                                                class="gg-arrow-long-right"></i> </span></a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="5000">
                    <img src="{{ asset('') }}uploads/default/vv.jpeg" class="d-block w-100" alt="..." />
                    <div class="banner-text container-fluid">
                        <div class="row">
                            <div class="col-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                                <h3>VIMOKSHA VALLEY RANIKHET </h3>
                            </div>
                            <div class="col-6 banner-btn wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                                <button class="button" id="commercial-ongoing">
                                    <a href="{{ url('/project') }}"><span class="button-content">EXPLORE MORE <i
                                                class="gg-arrow-long-right"></i> </span></a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="{{ asset('') }}uploads/default/b1.jpg" class="d-block w-100" alt="..." />
                    <div class="banner-text container-fluid">
                        <div class="row">
                            <div class="col-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                                <h3>VIMOKSHA RESORT - JIM CORBETT</h3>
                            </div>
                            <div class="col-6 banner-btn wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                                <button class="button" id="commercial-ongoing">
                                    <a href="{{ url('/project') }}"><span class="button-content">EXPLORE MORE <i
                                                class="gg-arrow-long-right"></i> </span></a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="{{ asset('') }}uploads/default/b6.jpg" class="d-block w-100" alt="..." />
                    <div class="banner-text container-fluid">
                        <div class="row">
                            <div class="col-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                                <h3>VIMOKSHA VALLEY I- RANIKHET</h3>
                            </div>
                            <div class="col-6 banner-btn wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                                <button class="button" id="commercial-ongoing">
                                    <a href="{{ url('/project') }}"><span class="button-content">EXPLORE MORE <i
                                                class="gg-arrow-long-right"></i> </span></a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev" style="z-index: 0">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next" style="z-index: 0">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <div class="row">
      <div class="col-md-12">
        <div class="gallery-item mt-4 text-center">
          <video controls>
            <source src="{{ asset('') }}uploads/default/video.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
      </div>
    </div>
    

    <div class="slide_form_main1 slide_form_main1_out">
        <div class="slide_form_btn1">
            <span class="close_frm crox_frm1">ENQUIRY</span>
            <i class="fa fa-times close_frm enq_txt1"></i>
        </div>
        <div class="slide_form1">
            <h3 style="font-size: 20px; margin: 0">Trinayan Homes Pvt. Ltd.</h3>
            <p
                style="
        font-family: Optima Medium;
        font-size: 14px;
        color: white;
        margin: 0;
      ">
                Creating a brighter tomorrow for India's real estate panorama, infused
                with global insights and rooted in enduring Indian values, to shape a
                dynamic horizon.
            </p>
            <h3 style="margin-top: 10px">Enquiry Form</h3>
            <form id="save_form">
                <div class="form-group mb_20">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name*"
                        autocomplete="off" required />
                </div>
                <div class="form-group mb_20">
                    <input type="text" class="form-control" id="mobile" name="phone" required
                        placeholder="Mobile No.*" minlength="10" maxlength="10" autocomplete="off" />
                </div>
                <div class="form-group mb_20">
                    <input type="email" class="form-control" id="email" name="email" type="email"
                        placeholder="Email*" autocomplete="off" required />
                </div>
                <div class="form_button">
                    <button type="submit" class="btn1" id="mf1_submit">Submit</button>
                </div>
            </form>
        </div>
    </div>

    {{-- <div class="slide_form_main2 slide_form_main2_out">
  <a href="#">
    <div class="slide_form_btn2">
      <span class="close_frm crox_frm2">ONLINE PAYMENT</span>
      <i class="fa fa-times close_frm enq_txt2"></i>
    </div>
  </a>
</div>
<div class="slide_form_main3 slide_form_main3_out">
  <a href="#">
    <div class="slide_form_btn3">
      <span class="close_frm crox_frm3">CUSTOMER PORTAL</span>
      <i class="fa fa-times close_frm enq_txt3"></i>
    </div>
  </a>
</div> --}}

    <div class="container mt-5 p-0">
        <div class="row">
            <div class="col-12 col-lg-6 about-us">
                <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                    18+ years of leadership in the real estate sector
                </h3>
                <p class="para-1 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                    Trinayan, founded by a team of professionals that started in the
                    year 2005, has its office based at Faridabad, Haryana. Teamed with
                    extensive experience, dedication and competence in all the fields
                    the group has its business activities, Trinayan evolved as a group
                    in the early 2010.
                </p>
                <hr />
                <p class="para-2 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                    We are a fast-growing organization with active presence in building
                    construction, land development, facility management and Hospitality
                    and has completed projects in cities like Faridabad and Gurgaon in
                    Haryana, Ranikhet & Rishikesh in Uttarakhand, Ranchi & Hazaribagh in
                    Jharkhand. We love crafting dreams and desires into reality because
                    we strongly believe in “a home is where the story begins…”
                </p>
                <div class="col-6 enq-btn wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                    <a href="{{ url('/about-us') }}">
                        <button>EXPLORE MORE <i class="gg-arrow-right"></i></button>
                    </a>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="counter">
                    <div class="counter-number wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                        <div class="count-data">
                            <p class="m-0" data-toggle="counter-up">1</p>
                            {{-- <span>+</span> --}}
                        </div>
                        <hr />
                        <div class="count-info">
                            <p>Million sqft Under <br> Development</p>
                        </div>
                    </div>
                    <div class="counter-number1 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                        <div class="count-data1">
                            <p class="m-0" data-toggle="counter-up">1.3</p>
                            {{-- <span>+</span> --}}
                        </div>
                        <hr />
                        <div class="count-info1">
                            <p>Million sqft <br> Delivered</p>
                        </div>
                    </div>
                    <div class="counter-number mt-3 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                        <div class="count-data" style="left: 38%">
                            <p class="m-0" data-toggle="counter-up">18</p>
                            <span>+</span>
                        </div>
                        <hr />
                        <div class="count-info">
                            <p>Years Of <br> Experience</p>
                        </div>
                    </div>
                    <div class="counter-number1 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                        <div class="count-data1">
                            <p class="m-0" data-toggle="counter-up">7</p>
                            {{-- <span>+</span> --}}
                        </div>
                        <hr />
                        <div class="count-info1">
                            <p>Strong Tech And <br>Management Team</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('extern-js')

@endsection
