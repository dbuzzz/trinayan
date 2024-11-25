@extends('frontend.layout')
@section('extern-css')
@endsection
@section('content')
<style>
  .active{
      background:none;
  }
  .card{
      border:none;
  }
  .na-2{
color: #fff !important;
box-shadow: inset 200px 0 0 0 #c79b3e;
  }
  .project-info:hover img{
  transform:scale(1.2);
  }
  .ov-hidden{
  overflow:hidden;
  }
  .project-info img{
  transition: 0.5s all ease-in-out;
  aspect-ratio:16/10;
  object-fit:cover;
  width:100%;
  height:100%;
}

</style>     
              
    <div class="project-top">
        <div class="container-fluid ">
            <div class="row mx-4 gx-3">
                <div class="col-12 col-lg-1 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s"></div>
                <div class="col-12 col-lg-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                    <a href="{{url('completed')}}" style="text-decoration: none;">
                        <div class="residential-banner p-type p-4" style="background: url({{asset('')}}uploads/default/c.jpg); position: relative;">
                            <div class="title-strip" style="position: absolute; top: 0; left: 0; width: 50%; background-color: #fff; color: #000; padding: 10px 20px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); border-bottom-right-radius: 15px; border: 1px solid #ddd; border-left: none; border-top: none;">
                                <h3 style="margin: 0; font-size: 1.25rem; color: #000;">COMPLETED PROJECTS</h3>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="col-12 col-lg-2 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s"></div>
                <div class="col-12 col-lg-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                    <a href="{{url('ongoing')}}" style="text-decoration: none;">
                        <div class="residential-banner p-type p-4" style="background: url({{asset('')}}uploads/default/wp.jpg); position: relative;">
                            <div class="title-strip" style="position: absolute; top: 0; left: 0; width: 50%; background-color: #fff; color: #000; padding: 10px 20px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); border-bottom-right-radius: 15px; border: 1px solid #ddd; border-left: none; border-top: none;">
                                <h3 style="margin: 0; font-size: 1.25rem; color: #000;">ONGOING PROJECTS</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-lg-1 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s"></div>

                {{-- <div class="col-12 col-lg-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                    <a href="{{url('upcoming')}}" style="text-decoration: none;">
                        <div class="residential-banner p-type p-4" style="background: url({{asset('')}}uploads/default/upcoming.jpg); position: relative;">
                            <div class="title-strip" style="position: absolute; top: 0; left: 0; width: 50%; background-color: #fff; color: #000; padding: 10px 20px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); border-bottom-right-radius: 15px; border: 1px solid #ddd; border-left: none; border-top: none;">
                                <h3 style="margin: 0; font-size: 1.25rem; color: #000;">UPCOMING PROJECTS</h3>
                            </div>
                        </div>
                    </a>
                </div> --}}
                
             
            </div>
        </div>
    </div>
      

  <div class="project-heading container mt-5" id="projects">
      <h1 class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">FOUNDATIONS FOR LIFE</h1>
      <p class=" wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">Trinayan is dedicated to improving your quality of life through the timely delivery of cutting-edge projects<br> and a commitment to exceptional quality.</p>
  </div>
@endsection
@section('extern-js')
<script src="{{url('frontend_assets/custom_js/cart.js')}}"></script>
@endsection