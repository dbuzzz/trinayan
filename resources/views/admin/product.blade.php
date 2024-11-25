@extends('admin.layout')
@section('extern-css')

@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Project
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">{{!empty($product->name)?'Update':'Add'}} Project</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div id="gallery">
		  
		  <!-- Default box -->
		  <div class="box">
			<div class="box-body">
            <form id="save_forms">
                                            <input type="hidden" name="id" id="id" value="{{@$product->id}}">
                                            <div class="row">
                                                <div class="form-group col-lg-6">
                                                    <label for="exampleInputEmail1">Project-Name</label>
                                                    <input type="text"
                                                           class="form-control"
                                                           name="name" 
                                                           id="name" 
                                                           placeholder="Enter Name .."
                                                           value="{{@$product->name}}">
                                                </div>

                                                <div class="form-group col-lg-6">
                                                    <label for="category">Category</label>
                                                    <select id="category"
                                                            
                                                            class="form-control" name="category">
                                                        <option value="">Select option</option>
                                                        <option value="Completed" {{@$product->category == 'Completed'?'selected':''}}>Completed</option>
                                                        <option value="Under Construction" {{@$product->category == 'Under Construction'?'selected':''}}>Under Construction</option>
                                                        <option value="Upcoming" {{@$product->category == 'Upcoming'?'selected':''}}>Upcoming</option>
                                                        
                                                    </select>
                                                </div>

                                                <div class="form-group col-lg-3">
                                                    <label for="exampleInputEmail1">Property Size</label>
                                                    <input type="text"
                                                           class="form-control"
                                                           name="psize" 
                                                           id="psize" 
                                                           placeholder="Enter psize .."
                                                           value="{{@$product->size}}">
                                                </div>

                                                <div class="form-group col-lg-3">
                                                    <label for="exampleInputEmail1">Property Cost</label>
                                                    <input type="text"
                                                           class="form-control"
                                                           name="cost" 
                                                           id="cost" 
                                                           placeholder="Enter cost .."
                                                           value="{{@$product->cost}}">
                                                </div>

                                                <div class="form-group col-lg-3">
                                                    <label for="exampleInputEmail1">Rooms</label>
                                                    <input type="text"
                                                           class="form-control"
                                                           name="room" 
                                                           id="room" 
                                                           placeholder="Enter room .."
                                                           value="{{@$product->room}}">
                                                </div>

                                                <div class="form-group col-lg-3">
                                                    <label for="exampleInputEmail1">Size</label>
                                                    <input type="text"
                                                           class="form-control"
                                                           name="size" 
                                                           id="size" 
                                                           placeholder="Enter size .."
                                                           value="{{@$product->size}}">
                                                </div>
                                                

                                                @if(!empty($variant))
                                                @php
                                                $i = 1;
                                                @endphp
                                                @foreach($variant as $key=>$value)

                                                <div class="col-lg-12">
                                                    <h3>Variant {{$i}}</h3>
                                                </div>

                                                 <div class="form-group col-lg-4">
                                                    <label for="exampleInputEmail1">Variant</label>
                                                    <input type="text"
                                                           class="form-control"
                                                           name="variant[]" 
                                                           id="variant" 
                                                           placeholder="Enter variant .."
                                                           value="{{@$value->variant}}">
                                                </div>

                                                <div class="form-group col-lg-4">
                                                    <label for="exampleInputEmail1">Quantity</label>
                                                    <input type="number"
                                                           class="form-control"
                                                           name="qty[]" 
                                                           id="qty" 
                                                           placeholder="Enter qty .."
                                                           value="{{@$value->qty}}">
                                                </div>


                                                <div class="form-group col-lg-4">
                                                    <label for="exampleInputEmail1">Mrp</label>
                                                    <input type="number"
                                                           class="form-control"
                                                           name="mrp[]" 
                                                           id="mrp" 
                                                           placeholder="Enter mrp .."
                                                           value="{{@$value->mrp}}">
                                                </div>


                                                <div class="form-group col-lg-4">
                                                    <label for="exampleInputEmail1">Price</label>
                                                    <input type="number"
                                                           class="form-control"
                                                           name="price[]" 
                                                           id="price" 
                                                           placeholder="Enter price .."
                                                           value="{{@$value->price}}">
                                                </div><div class="form-group col-lg-4">
                                                    <label for="exampleInputEmail1">Color</label>
                                                    <input type="color"
                                                           class="form-control"
                                                           name="color[]" 
                                                           id="color" 
                                                           placeholder="Enter color .."
                                                           value="{{@$value->color}}">
                                                </div>

                                                

                                                


                                              


                                               
                                                @if(!empty($key))
                                                <div class="col-md-4 mt-4">
                                                <a href="javascript:void(0)"class="remove_field btn btn-danger btn-xs">-</a>
                                                </div>
                                                @else
                                                <div class="col-md-4 mt-4">
                                                <a href="javascript:void(0)"class="add_field_button btn btn-success btn-xs">+</a>
                                                </div>
                                                @endif
                                                @php
                                                $i++;
                                                @endphp
                                            
                                            @endforeach
                                            @else

                                             <div class="col-lg-12">
                                                    <h3>Image Categories</h3>
                                                </div>

                                                 <div class="form-group col-lg-4">
                                                    <label for="categories">Category</label>
                                                    <select id="categories"
                                                            
                                                            class="form-control" name="categories[0]">
                                                        <option value="">Select option</option>
                                                        @if(!empty($cat))
                                                        @foreach($cat as $key=>$value)
                                                        <option value="{{$value->name}}">{{$value->name}}</option>
                                                        @endforeach
                                                        @endif
                                                    </select>
                                                </div>

                                                <div class="form-group col-lg-4">
                                                    <label for="exampleInputEmail1">Image</label>
                                                    <input type="file"
                                                           class="form-control"
                                                           name="image0[]" 
                                                           placeholder="Enter value .."
                                                           value="" multiple accept="image/*">
                                                </div>


                                                <div class="col-md-4 mt-4">
                                                <a href="javascript:void(0)"class="add_field_button btn btn-success btn-xs">+</a>
                                            </div>
                                            @endif
                                            <div id="appendData"></div>
                                                <div class="form-group col-lg-12 pb-4">
                                                    <label for="exampleInputEmail1">Project Description</label>
                                                        {{-- <div id="editor">
                                                        {!!@$product->description!!}
                                                
                                                        </div> --}}
                                                        <textarea class="form-control" name="description" id="" placeholder="Enter Description" cols="30" rows="10">{!!@$product->description!!}</textarea>
                                                    
                                                </div>

                                                <div class="form-group col-lg-6">
                                                    <label for="exampleInputEmail1">Address</label>
                                                    <input type="text"
                                                           class="form-control"
                                                           name="address" 
                                                           id="address" 
                                                           placeholder="EnterAddress .."
                                                           value="{{@$product->address}}">
                                                </div>

                                                <div class="form-group col-lg-3">
                                                    <label for="exampleInputEmail1">Brochure</label>
                                                    <input type="file"
                                                           class="form-control"
                                                           name="broschure"
                                                           accept="">
                                                </div>
                                                <div class="form-group col-lg-3">
                                                    <label for="exampleInputEmail1">Other Graphics</label>
                                                    <input type="file"
                                                           class="form-control"
                                                           name="o_image[]"
                                                           accept=".jpg,.png,.jpeg,.mov,.mp4" multiple>
                                                </div>
                                              

                                               
                                                <div class="form-group col-lg-6 pt-4 mt-4">
                                                    <label for="exampleInputEmail1">Featured Image</label><span style="color:red">1080 x 1080 px</span>
                                                    <input type="file"
                                                           class="form-control"
                                                           name="image"
                                                           id="file" 
                                                           accept=".jpg,.png,.jpeg">
                                                </div>

                                                <div class="form-group col-lg-6 pt-4 mt-4">
                                                    <img style=" padding: 11px; width: 265px; height: 185px; " src="{{!empty($product)?$product->image:asset('uploads/default/default-image.jpg')}}" id="image">
                                                </div>

                                            </div>
                                           
                                            <button type="submit"
                                                    class="btn btn-primary" id="submit">Submit</button>
                                        </form>
            </div>
           </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>

@endsection
@section('extern-js')
<script src="{{url('admin_assets/custom_js/product.js')}}"></script>

@endsection