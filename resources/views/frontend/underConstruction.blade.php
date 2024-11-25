
@extends('frontend.layout')
@section('extern-css')
<link rel="stylesheet" type="text/css" href="{{ url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
 
@endsection
@section('content')

  <style>

  .card-image {
    position: relative;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    display: none;
    opacity: 0;
    transition: opacity 0.3s ease;
    flex-direction: column;
}
/* button hover effect */
.card:hover .overlay {
    display: flex;
    opacity: 1;
}

.btn {
    opacity: 0;
    transition: opacity 0.3s ease;
}

.card:hover .btn {
    opacity: 1;
}
    </style>
<div class="news-banner " style="background-image: linear-gradient(rgba(0, 0, 0, .66), rgba(0, 0, 0, .66)), url({{asset('')}}frontend_assets/img/banner/b2.jpg);">
    <div class="detail-heading container-fluid">
        <h1>ONGOING PROJECTS</h1>
    </div>
</div>

<div class="news mt-5">
    <div class="container">
        <div class="row gx-4">
            @if($project)
                    @foreach($project as $key=>$value)
                    <div class="col-12 col-lg-4 my-3">
                        <div class="p-15">    
                            <div class="card position-relative">
                                <div class="card-image">
                                    <a href="{{$value->image}}" data-fancybox="gallery">
                                        <img src="{{$value->image}}" alt="Image Gallery" class="img-fluid" style=" height: 384px; ">
                                    </a>
                                    <div class="overlay d-flex justify-content-center align-items-center">
                                        <a href="{{$value->broschure}}" class="btn btn-primary m-2" target="_blank"> Brochure</a>
                                        <a href="{{route('projectDetail',['project'=>$value->id])}}" class="btn btn-secondary m-2"> Project Detail</a>
                                    </div>
                                </div>
                            </div>
                            <div class="news-text mt-3">
                                <h3><strong>{{$value->name}}</strong></h3>
                            </div>
                        </div>    
                    </div>
                    @endforeach
                    @endif
          
           
        </div>
    </div>
</div>

@endsection
@section('extern-js')
<script src="{{url('frontend_assets/custom_js/cart.js')}}"></script>
@endsection