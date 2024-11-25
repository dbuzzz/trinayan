{{-- <!DOCTYPE html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Solar</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="{{asset('')}}frontend_assets/{{asset('')}}frontend_assets/img/logo/favicon.png"
    />
    <meta name="_token" content="{{csrf_token()}}">

    <link rel="stylesheet" href="{{asset('')}}frontend_assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{asset('')}}frontend_assets/css/animate.css" />
    <link rel="stylesheet" href="{{asset('')}}frontend_assets/css/custom-animation.css" />
    <link rel="stylesheet" href="{{asset('')}}frontend_assets/css/slick.css" />
    <link rel="stylesheet" href="{{asset('')}}frontend_assets/css/nice-select.css" />
    <link rel="stylesheet" href="{{asset('')}}frontend_assets/css/swiper-bundle.css" />
    <link rel="stylesheet" href="{{asset('')}}frontend_assets/css/flaticon_solvra.css" />
    <link rel="stylesheet" href="{{asset('')}}frontend_assets/css/font-awesome-pro.css" />
    <link rel="stylesheet" href="{{asset('')}}frontend_assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="{{asset('')}}frontend_assets/css/spacing.css" />
    <link rel="stylesheet" href="{{asset('')}}frontend_assets/css/style.css" />
    <link rel="stylesheet" href="{{asset('plugins/toastr/toastr.min.css')}}">
    @yield('extern-css')
		<script type="text/javascript">
        siteUrl = '{{url("")}}';
    </script>
  </head>
  <body id="body" class="it-magic-cursor">
    <div id="preloader">
      <div class="preloader">
        <span></span>
        <span></span>
      </div>
    </div>

    <div id="magic-cursor">
      <div id="ball"></div>
    </div>

    <button class="scroll-top scroll-to-target" data-target="html">
      <i class="fa-solid fa-arrow-up"></i>
    </button>

    <div class="search__popup">
      <div class="container">
        <div class="row">
          <div class="col-xxl-12">
            <div class="search__wrapper">
              <div
                class="search__top d-flex justify-content-between align-items-center"
              >
                <div class="search__logo">
                  <a href="index.html">
                    <img src="{{asset('')}}frontend_assets/{{asset('')}}frontend_assets/img/logo/white-logo.png" alt="" />
                  </a>
                </div>
                <div class="search__close">
                  <button
                    type="button"
                    class="search__close-btn search-close-btn"
                  >
                    <svg
                      width="18"
                      height="18"
                      viewbox="0 0 18 18"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M17 1L1 17"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      ></path>
                      <path
                        d="M1 1L17 17"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      ></path>
                    </svg>
                  </button>
                </div>
              </div>
              <div class="search__form">
                <form action="#">
                  <div class="search__input">
                    <input
                      class="search-input-field"
                      type="text"
                      placeholder="Type here to search..."
                    />
                    <span class="search-focus-border"></span>
                    <button type="submit">
                      <svg
                        width="20"
                        height="20"
                        viewbox="0 0 20 20"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z"
                          stroke="currentColor"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        ></path>
                        <path
                          d="M19.0002 19.0002L17.2002 17.2002"
                          stroke="currentColor"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        ></path>
                      </svg>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="it-offcanvas-area">
      <div class="itoffcanvas">
        <div class="itoffcanvas__close-btn">
          <button class="close-btn"><i class="fal fa-times"></i></button>
        </div>
        <div class="itoffcanvas__logo">
          <a href="{{url('/')}}">
            <img src="{{asset('')}}frontend_assets/{{asset('')}}frontend_assets/img/logo/logo.png" alt="" />
          </a>
        </div>
        <div class="itoffcanvas__text">
          <p>
            Suspendisse interdum consectetur libero id. Fermentum leo vel orci
            porta non. Euismod viverra nibh cras pulvinar suspen.
          </p>
        </div>
        <div class="it-menu-mobile"></div>
        <div class="it-info-wrapper mb-20 d-flex align-items-center">
          <a href="{{url('/service')}}" class="it-btn-green"
            >Our Services</a>
        </div>
        <div class="itoffcanvas__info">
          <h3 class="offcanva-title">Get In Touch</h3>
          
          
          <div class="it-info-wrapper mb-20 d-flex align-items-center">
            <div class="itoffcanvas__info-icon">
              <a href="#"><i class="fal fa-envelope"></i></a>
            </div>
            <div class="itoffcanvas__info-address">
              <span>Email</span>
              <a href="maito:hello@yourmail.com"
                ><span
                  class="__cf_email__"
                  data-cfemail="a9c1ccc5c5c6e9d0c6dcdbc4c8c0c587cac6c4"
                  >[email&#160;protected]</span
                ></a
              >
            </div>
          </div>
          <div class="it-info-wrapper mb-20 d-flex align-items-center">
            <div class="itoffcanvas__info-icon">
              <a href="#"><i class="fal fa-phone-alt"></i></a>
            </div>
            <div class="itoffcanvas__info-address">
              <span>Phone</span>
              <a href="tel:(00)45611227890">(00) 456 1122 7890</a>
            </div>
          </div>
          <div class="it-info-wrapper mb-20 d-flex align-items-center">
            <div class="itoffcanvas__info-icon">
              <a href="#"><i class="fas fa-map-marker-alt"></i></a>
            </div>
            <div class="itoffcanvas__info-address">
              <span>Location</span>
              <a
                href="htits://www.google.com/maps/@37.4801311,22.8928877,3z"
                target="_blank"
                >Riverside 255, San Francisco, USA
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="body-overlay"></div>

    <header class="header-height">
      <div id="header-sticky" class="it-header-area z-index-5">
        <div class="it-main-logo">
          <a href="index.html"
            ><img src="{{asset('')}}frontend_assets/{{asset('')}}frontend_assets/img/logo/main-logo.png" alt=""
          /></a>
        </div>
        <div class="it-header-pl">
          <div
            class="it-header-top black-bg it-header-space-lr"
            data-background="{{asset('')}}frontend_assets/{{asset('')}}frontend_assets/img/header/header-top-bg.png"
          >
            <div class="container-fluid">
              <div class="row align-items-center">
                <div class="col-xl-8 col-lg-6 col-md-6">
                  <div class="it-header-top-info">
                    <ul>
                      <li class="d-none d-xl-inline-block">
                        <a href="tel:(00)8757845682">
                          <i class="flaticon-phone-call"></i>
                          (00) 875 784 5682
                        </a>
                      </li>
                      <li class="d-none d-md-inline-block">
                        <a
                          href="/cdn-cgi/l/email-protection#377e594442455e59515877505a565e5b1954585a"
                        >
                          <i class="flaticon-mail"></i>
                          <span
                            class="__cf_email__"
                            data-cfemail="10597e636562797e767f50777d71797c3e737f7d"
                            >[email&#160;protected]</span
                          >
                        </a>
                      </li>
                      <li class="d-none d-xl-inline-block">
                        <a
                          href="https://www.google.com/maps/@23.7912408,90.5848486,11.67z?entry=ttu"
                          target="_blank"
                        >
                          <i class="flaticon-location"></i>
                          238, Arimantab, Moska - USA.
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
           
              </div>
            </div>
          </div>
          <div class="it-header-bottom it-header-space-lr it-header-mob-space">
            <div class="container-fluid">
              <div class="row align-items-center">
                <div class="col-xl-8 d-none d-xl-block">
                  <div class="it-main-menu">
                    <nav class="it-menu-content">
                      <ul>
                        <li>
                          <a href="{{url('/')}}">Home</a>
                         
                        </li>
                        <li><a href="{{url('/about-us')}}">About Us</a></li>
                       
                        <li><a href="{{url('/contact-us')}}">Contact us</a></li>
                        <li><a href="{{url('/project')}}">Projects</a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
                <div class="col-xl-4">
                  <div
                    class="it-header-right-box d-flex align-items-center justify-content-end"
                  >
                
                    <div class="it-header-right-btn d-none d-md-block ml-35">
                      <a href="{{url('/service')}}" class="it-btn-green"
                        >Our Services</a
                      >
                    </div>
                    <div class="it-header-bar-wrap d-xl-none">
                      <button class="it-header-bar it-menu-bar">
                        <i class="fa-sharp fa-regular fa-bars-staggered"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    @yield('content')

    <footer>
      <div class="it-footer-area p-relative pt-130 pb-35 black-bg fix">
        <div class="it-footer-shape-1">
          <img src="{{asset('')}}frontend_assets/{{asset('')}}frontend_assets/img/footer/shape-1.png" alt="" />
        </div>
        <div class="it-footer-shape-2">
          <img src="{{asset('')}}frontend_assets/{{asset('')}}frontend_assets/img/footer/shape-2.png" alt="" />
        </div>
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 mb-60">
              <div class="it-footer-widget footer-col-1">
                <div class="it-footer-logo mb-25">
                  <a href="index.html">
                    <img src="{{asset('')}}frontend_assets/{{asset('')}}frontend_assets/img/logo/footer-logo.png" alt="" />
                  </a>
                </div>
                <div class="it-footer-content">
                  <p>
                    Some links on this website PureProposals. com contain
                    affiliate links. These links provide a commission to
                    PureProposals for products or software purchased. Note that
                  </p>
                 
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 mb-60">
              <div class="it-footer-widget footer-col-2">
                <h3 class="it-footer-widget-title mb-35">Useful Links</h3>
                <div class="it-footer-list">
                  <ul>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('about-us')}}">About Us</a></li>
                    <li><a href="{{url('contact-us')}}">Contact Us</a></li>
                    <li><a href="{{url('service')}}">Service</a></li>
                  
                  </ul>
                </div>
              </div>
            </div>
           
            <div class="col-xl-4 col-lg-4 col-md-6 mb-60">
              <div class="it-footer-widget p-relative footer-col-4">
                <h3 class="it-footer-widget-title mb-35">Contact</h3>
                <div class="it-footer-contact">
                  <div class="it-footer-info d-flex align-items-center">
                    <i class="flaticon-map"></i>
                    <a href="#"
                      >569 Cost AvenueSilver Spring, MD 20910.New york</a
                    >
                  </div>
                  <div class="it-footer-info d-flex align-items-center">
                    <i class="flaticon-phone-call"></i>
                    <a href="tel:890301-415-5058">(+890)301-415-5058</a>
                  </div>
                  <div class="it-footer-info d-flex align-items-center">
                    <i class="flaticon-email"></i>
                    <a
                      href="/cdn-cgi/l/email-protection#8feae4e0e2e9f6cfe8e2eee6e3a1ece0e2"
                      ><span
                        class="__cf_email__"
                        data-cfemail="e98c8286848f90a98e84888085c78a8684"
                        >[email&#160;protected]</span
                      ></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="it-copyright-area pt-15 pb-15 theme-bg">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6">
              <div class="it-copyright-content text-center text-lg-start">
                <p>
                  &copy; {{date('Y')}} Solar All Rights Reserved.
                </p>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6">
              <div class="it-copyright-privacy text-center text-lg-end">
                <a href="#">Terms & Conditions - Privacy Policy - Sitemap</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script
      data-cfasync="false"
      src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"
    ></script>
    <script src="{{asset('')}}frontend_assets/js/jquery.js"></script>
    <script src="{{asset('')}}frontend_assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('')}}frontend_assets/js/gsap.js"></script>
    <script src="{{asset('')}}frontend_assets/js/slick.min.js"></script>
    <script src="{{asset('')}}frontend_assets/js/jarallax.js"></script>
    <script src="{{asset('')}}frontend_assets/js/magnific-popup.js"></script>
    <script src="{{asset('')}}frontend_assets/js/purecounter.js"></script>
    <script src="{{asset('')}}frontend_assets/js/wow.js"></script>
    <script src="{{asset('')}}frontend_assets/js/nice-select.js"></script>
    <script src="{{asset('')}}frontend_assets/js/swiper-bundle.js"></script>
    <script src="{{asset('')}}frontend_assets/js/isotope-pkgd.js"></script>
    <script src="{{asset('')}}frontend_assets/js/imagesloaded-pkgd.js"></script>
    <script src="{{asset('')}}frontend_assets/js/ajax-form.js"></script>
    <script src="{{asset('')}}frontend_assets/js/main.js"></script>
    <script src="{{asset('')}}frontend_assets/js/it-cursor.js"></script>
    <script src="{{asset('plugins/toastr/toastr.min.js')}}"></script>
    @yield('extern-js')
  </body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Trinayan Homes Pvt. Ltd.</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('')}}frontend_assets/img/logo.png " />
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!--<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=GFS+Didot&family=Montez&display=swap"
      rel="stylesheet"
    />
    <!-- Icon Font Stylesheet -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <!-- Libraries Stylesheet -->
    <link href="{{asset('')}}frontend_assets/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="{{asset('')}}frontend_assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link
      href="{{asset('')}}frontend_assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css"
    />
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('')}}frontend_assets/css/bootstrap.min.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css"
    />
    <!--  Stylesheet -->
    <link href="{{asset('')}}frontend_assets/css/style.css" rel="stylesheet" />
    <style>
      .button {
        position: relative;
        overflow: hidden;
        height: 2rem;
        padding: 5px 0px 5px 10px;
        background: #c79b3e;
        background-size: 400%;
        color: #fff;
        border: none;
        cursor: pointer;
      }
      .button:hover::before {
        transform: scaleX(1);
        color: green;
      }
      .button-content {
        position: relative;
        z-index: 1;
        display: flex;
        justify-content: center;
        align-content: center;
        align-items: center;
        gap: 10px;
        flex-wrap: wrap;
        flex-direction: row;
      }
      .button::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        transform: scaleX(0);
        transform-origin: 0 50%;
        width: 100%;
        height: inherit;
        border-radius: inherit;
        background: rgba(255, 255, 255, 1);
        /*border:1px solid #3e4095;*/
        transition: all 0.475s;
      }
      .button:hover span {
        color: #c79b3e;
        transition: 1s;
        font-family: Optima Medium;
      }
      .button span {
        color: white;
        transition: 1s;
        font-family: Optima Medium;
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
      }
    </style>
    <link rel="stylesheet" href="{{asset('plugins/toastr/toastr.min.css')}}">
    <meta name="_token" content="{{csrf_token()}}">
      @yield('extern-css')
       <script type="text/javascript">
           siteUrl = '{{url("")}}';
       </script>
  </head>
  <body>
    <div class="container px-3 py-4" style="background: white">
      <nav
        class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-3"
      >
        <a
          href="{{url('/')}}"
          class="navbar-brand p-0 foil-image"
          style="margin: 0"
        >
          <img
            src="{{asset('')}}frontend_assets/img/logo.png "
            class="wow flipInX"
            alt="Logo"
            style="width: 130px"
          />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarCollapse"
          style="z-index: 9999"
        >
          <span class="fa fa-bars"></span>
        </button>
        <div
          class="collapse navbar-collapse"
          style="z-index: 9999"
          id="navbarCollapse"
        >
          <div class="navbar-nav ms-auto py-0" style="align-items: baseline">
            <a href="{{url('/about-us')}}" class="nav-item nav-link nav-1 nav-l na-1"
              >ABOUT US</a
            >
            <p class="link-slash m-1">|</p>
            <a href="{{url('/project')}}" class="nav-item nav-link na-2 nav-l"
              >PROJECTS</a
            >
            <p class="link-slash m-1">|</p>

            <a href="{{url('/contact-us')}}" class="nav-item nav-link nav-l na-4"
              >CONTACT US</a
            >
            <p class="link-slash m-1">|</p>

            <a href="{{url('/career')}}" class="nav-item nav-link nav-l na-6"
              >CAREER</a
            >
            <!-- <a href="{{url('/contact-us')}}" class="nav-item nav-link nav-text nav-l na-7">CONTACT US </a> -->
          </div>
        </div>
      </nav>
    </div>
    @yield('content')

    <footer>
      <div class="footer-back py-4">
        <div class="footer-sec3 mt-4 container">
          <div class="footer-links row">
            <div class="footer-logo col-12 col-lg-2">
              <img
                src="{{asset('')}}frontend_assets/img/logo.png "
                class="wow flipInX"
                data-wow-duration="2s"
                alt="Logo"
                style="width: 100%"
              />
            </div>
            <div class="quick-links col-4 col-lg-2">
              <ul>
                <li><a href="{{url('/about-us')}}">ABOUT US</a></li>
                <li><a href="{{url('/project')}}">PROJECTS</a></li>

                <li><a href="{{url('/contact-us')}}">CONTACT US</a></li>

                <!--<li class="mt-3"><a href="#">FAQs</a></li>-->
              </ul>
            </div>
            <div class="other-links col-4 col-lg-2">
              <ul>
                <li><a href="{{url('/career')}}">CAREER</a></li>
                <li><a href="{{url('/disclaimer')}}">DISCLAIMER</a></li>
                <li><a href="{{url('/privacyPolicy')}}">PRIVACY POLICY</a></li>
                <li>
                  <a href="{{url('/termsCondition')}}">TERMS & CONDITIONS</a>
                </li>
                <!--<li><a href="#">Contact Us</a></li>-->
              </ul>
            </div>
            <div class="get-in-touch col-4 col-lg-3">
              <h3>GET IN TOUCH</h3>
              <h5 style="margin:0px">
                For general enquiries,<br />
                please contact us
              </h5>
              <p class="footer-number">
                <a href="tel:+91 9810078129">+91 9810078129</a>
              </p>
              <p class="footer-number">
                <a href="tel:+91 9810031927">+91 9810031927</a>
              </p>
              <p class="footer-number">
                <a href="mailto:Info@trinayangroup.com">Info@trinayangroup.com</a>
              </p>
            </div>
            <div class="footer-social col-12 col-lg-3">
              <h3>SOCIAL MEDIA LINKS</h3>
              <div class="social-icon mt-2" style=" display: flex; ">
                <a
                  href="https://www.facebook.com/trinayanhomes/"
                  target="_blank "
                  ><i
                    class="fa-brands fa-facebook-f"
                    style="padding: 10px 14px 10px 14px"
                  ></i
                ></a>
                <a href="javascript:void(0);" target="_blank "
                  ><i
                    class="fa-brands fa-x-twitter"
                    style="padding: 10px 11px 10px 11px"
                  ></i
                ></a>
                <a href="#" target="_blank "
                  ><i
                    class="fa-brands fa-linkedin-in"
                    style="padding: 10px 11px 10px 11px"
                  ></i
                ></a>
                <a
                  href="https://www.instagram.com/trinayanhomes/"
                  target="_blank "
                  ><i
                    class="fa-brands fa-instagram"
                    style="padding: 10px 11px 10px 11px"
                  ></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="bg-light">
        <div class="container">
          <h5 style="
  text-align: center;
  color: black !important;
  margin: 0;
  padding: 10px 0;
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 5px;
  flex-wrap: wrap;
  max-inline-size: none;
">
  Copyright © 2024 Trinayan Homes Pvt. Ltd.. All rights reserved. Developed by
  <a href="https://www.dbuzzz.com/" style="
    color: black !important;
    font-family: verdana;
  ">Digital Buzzz LLP</a>
</h5>

        </div>
      </div>
    </footer>
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script src="{{asset('')}}frontend_assets/lib/wow/wow.min.js"></script>
    <script src="{{asset('')}}frontend_assets/lib/easing/easing.min.js"></script>
    <script src="{{asset('')}}frontend_assets/lib/waypoints/waypoints.min.js"></script>
    <script src="{{asset('')}}frontend_assets/lib/counterup/counterup.min.js"></script>
    <script src="{{asset('')}}frontend_assets/lib/owlcarousel/owl.carousel.js"></script>
    <script src="{{asset('')}}frontend_assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="{{asset('')}}frontend_assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="{{asset('')}}frontend_assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit-icons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{asset('')}}frontend_assets/js/main.js"></script>

    <script>
      // Fancybox Configuration
      $('[data-fancybox="gallery"]').fancybox({
        buttons: [
          "slideShow",
          "thumbs",
          "zoom",
          "fullScreen",
          "share",
          "close",
        ],
        loop: false,
        protect: true,
      });

      $(document).ready(function () {
        $(".fancybox").fancybox({
          width: 400,
          height: 300,
          autoSize: false,
        });
      });
    </script>
    <script src="{{asset('plugins/toastr/toastr.min.js')}}"></script>
    @yield('extern-js')
  </body>
</html>
