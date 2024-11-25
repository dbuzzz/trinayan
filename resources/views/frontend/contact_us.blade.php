
@extends('frontend.layout')
@section('extern-css')
<link rel="stylesheet" type="text/css" href="{{ url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
 
@endsection
@section('content')


  {{-- <main>
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
                <h3 class="it-breadcrumb-title text-white">contact</h3>
              </div>
              <div class="it-breadcrumb-list-wrap">
                <div class="it-breadcrumb-list z-index-3">
                  <span><a href="index.html">Home</a></span>
                  <span class="dvdr">//</span>
                  <span><b>Contact</b></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="it-contact-area pt-120 pb-120">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-6">
            <div class="it-contact-wrapp grey-bg">
              <div class="it-contact-title-box pb-10 mb-40">
                <h3 class="it-section-title">get in touch</h3>
              </div>
              <form id="save_form">
                <div class="it-contact-input">
                  <input type="text" placeholder="Full Name *" name="name" />
                </div>
                <div class="it-contact-input">
                  <input type="number" placeholder="Phone *" name="phone" minlength="10" maxlength="10"/>
                </div>
                <div class="it-contact-input">
                  <input type="email" placeholder="Email *" name="email"/>
                </div>
                <div class="it-contact-input">
                  <input type="text" placeholder="Subject *" name="subject" />
                </div>
                <div class="it-contact-input mb-30">
                  <textarea placeholder="Note" name="message"></textarea>
                </div>
                <div class="it-contact-button mb-50">
                  <button class="it-btn-green" type="submit">
                    Sand A Message
                  </button>
                </div>
              </form>
              <div class="it-contact-link">
                <div class="it-contact-link-title mb-5">
                  <h3 class="it-section-title-sm">Contact info:</h3>
                </div>
                <div class="it-contact-link-item">
                  <a href="tel:568-367-987-237">
                    <i class="flaticon-phone-call"></i> (568) 367-987-237
                  </a>
                  <a href="#">
                    <i class="flaticon-location"></i> Hudson, Wisconsin(WI),
                    54016
                  </a>
                  <a
                    href="/cdn-cgi/l/email-protection#dba8b4b7ada9ba9bbcb6bab2b7f5b8b4b6"
                  >
                    <i class="flaticon-mail"></i>
                    <span
                      class="__cf_email__"
                      data-cfemail="ff8c9093898d9ebf98929e9693d19c9092"
                      >[email&#160;protected]</span
                    >
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="it-contact-map-area">
              <div class="it-contact-map-wrapp">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d86191.93772878274!2d-74.0035734357229!3d40.73233839995004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1690807533861!5m2!1sen!2sbd"
                  style="border: 0"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main> --}}

  <style>
    .form {
      width: 100%;
      background-color: #fff;
      padding: 20px;
      box-shadow: 0px 0px 0px 1px rgba(52, 52, 53, 0.185);
      display: flex;
      flex-direction: column;
      border-radius: 10px;
    }
    
    .title {
      text-align: center;
      font-size: 2rem;
      margin-bottom: 20px;
      color: #1a202c;
    }
    
    .label {
      color: rgb(0, 0, 0);
      margin-bottom: 4px;
    }
    
    .input {
      padding: 10px;
      margin-bottom: 20px;
      width: 100%;
      font-size: 1rem;
      color: #4a5568;
      outline: none;
      border: 1px solid transparent;
      border-radius: 4px;
      transition: all 0.2s ease-in-out;
    }
    .text-area {
      padding: 10px;
      margin-bottom: 20px;
      width: 100%;
      font-size: 1rem;
      color: #4a5568;
      outline: none;
      border: 1px solid rgba(14, 14, 14, 0.205);
      border-radius: 4px;
      transition: all 0.2s ease-in-out;
    }
    
    .input:focus {
      background-color: #fff;
      box-shadow: 0 0 0 2px #cbd5e0;
    }
    
    .input:valid {
      border: 1px solid green;
    }
    
    .input:invalid {
      border: 1px solid rgba(14, 14, 14, 0.205);
    }
    
    .submit {
      background-color: #1a202c;
      color: #fff;
      border: none;
      border-radius: 4px;
      padding: 10px 20px;
      font-size: 1.2rem;
      cursor: pointer;
      transition: all 0.2s ease-in-out;
    }
    .inpdddut[type="file"] {
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid rgba(14, 14, 14, 0.205);
      /*background-color: #1aa3bb;*/
      border-radius: 5px;
      width: 100%;
      cursor: pointer;
    }
    
    .inpdddut[type="submit"] {
      padding: 10px 20px;
      background-color: #008CBA;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    
    .inpdddut[type="submit"]:hover {
      background-color: #006F8F;
    }
    </style>

  <div class="career-banner " style="background-image: linear-gradient(rgba(0, 0, 0, .66), rgba(0, 0, 0, .66)), url({{asset('')}}frontend_assets/img/banner/c1.jpg);">
    <div class="detail-heading container-fluid">
        <h1>CONTACT</h1>
    </div>
</div>

<div class="career container mt-5">
    <h1 class="mb-5">Contact Us</h1>
    <div class="row">
      <div class="col-12 col-lg-6">
        <h3 style="color: #c79b3e;"><strong>Main Office</strong></h3>
        <p><strong>C-3089 , GREENFIELDS, FARIDABAD 121010, HARYANA</strong></p>
        <p><i class="fa fa-envelope"></i><strong> <a href="mailto:contact@trinayan.co.in">contact@trinayan.co.in</a></strong></p>
        <p class="mb-5"><i class="fa fa-phone"></i><strong> <a href="tel:+91 9810078129">+91 9810078129</a></strong></p>
        <h3 style="color: #c79b3e;"><strong>SECOND OFFICE</strong></h3>
        <p><strong>SHOP NO. 07, PLOT NO. 01, VINOBA PURI, LAJPAT NAGAR -2, NEW DELHI</strong></p>
        <p><i class="fa fa-envelope"></i><strong> <a href="mailto:contact@trinayan.co.in">contact@trinayan.co.in</a></strong></p>
        <p><i class="fa fa-phone"></i><strong> <a href="tel:+91 9810031927">+91 9810031927</a></strong></p>
        
        </div>
        <div class="col-12 col-lg-6">
           <form class="form" id="save_form">
               <label for="username" class="label">Name</label>
               <input type="text" id="username" name="name" required="" class="input">
               <label for="email" class="label">Email</label>
               <input type="email" id="email" name="email" required="" class="input">
               <label for="number" class="label">Contact No.</label>
               <input type="number" id="number" name="phone" required="" class="input">
               <label for="" class="label">Message</label>
               <textarea class="text-area" name="message" required></textarea>
               <button type="submit" class="submit">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
@section('extern-js')
<script src="{{url('frontend_assets/custom_js/cart.js')}}"></script>
@endsection