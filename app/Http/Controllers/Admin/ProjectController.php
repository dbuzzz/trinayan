<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Category,SubCategory,Taxation,Brand,Product,ProductImage,ProductVariant,VendorCommision,Project};
use Validator;
use Yajra\DataTables\DataTables;
use Auth;
use Str;
use Schema;
use DB;
use Illuminate\Support\Arr;
use Excel;
use App\Imports\ProductImport;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index(Request $request)
    {   $data = array();
        if ($request->product) {
            $data['product'] = Project::where('id',$request->product)->first();
        }
        $data['cat'] = Category::where(['is_deleted'=>0,'active_status'=>1])->get();
     
      return view('admin.product',$data);
    }//end of method

    public function view()
    {
    $data['cat'] = Category::where(['is_deleted'=>0,'active_status'=>1])->get();
    $data['brand'] = Brand::where(['is_deleted'=>0,'active_status'=>1])->get();
     
      return view('admin.view_product',$data);
    }//end of method

    public function viewVariants(Request $request)
    {
        if ($request->product) {
            $data = Project::query();
            $data = $data->join('product_images','product_images.prd_id','=','products.id')->join('brands','brands.id','=','products.brand_id')->join('categories','categories.id','=','products.cat_id')->join('sub_categories','sub_categories.id','=','products.sub_cat_id')->join('taxations','taxations.id','=','products.tax_id');
            if (Auth::user()->user_type == 3) {
                $data = $data->where('products.added_by',Auth::user()->id);
            }

            if ($request->product) {
                $data = $data->where('products.id',$request->product);
            }
            $data = $data->where(['product_images.is_deleted'=>0,'products.is_deleted'=>0])->groupBy('product_images.prd_id')->orderBy('products.id','DESC')->first(['products.name','products.id','products.description','products.description2','products.tag','products.image','products.active_status','products.qty','products.mrp','products.price','products.stock_warning','products.is_return','products.best_selling','products.sale','products.coupon_valid','products.self_shipping','taxations.name as tax','taxations.value','brands.name as brand','categories.name as cat','sub_categories.name as sub_cat',DB::raw('GROUP_CONCAT(path) as path')]);

            $datas['variant'] = ProductVariant::where(['is_deleted'=>0,'active_status'=>1,'prod_id'=>$request->product])->get();
        }
        $datas['product'] = $data;
        // dd($datas);
     
      return view('admin.viewProductVariant',$datas);
    }//end of method
    
    public function save(Request $request){
        $id = $request->id;
        if (!empty($id)) {
            $validator = Validator::make($request->all(),[
                'description'=>'required',
                // 'size'=>'required',
                // 'room'=>'required',
                // 'cost'=>'required',
                // 'psize'=>'required',
                'category'=>'required',
                // 'address'=>'required',
                'name'=>'required',
                // 'featureValue.*'=>'required',
                // 'featureName.*'=>'required',

            ],['featureValue.*.required'=>'Value','featureName.*.required'=>'Name is required']);
        }else{
            $validator = Validator::make($request->all(),[
                'description'=>'required',
                // 'size'=>'required',
                // 'room'=>'required',
                // 'cost'=>'required',
                // 'psize'=>'required',
                'category'=>'required',
                'name'=>'required',
                // 'address'=>'required',
                // 'featureValue.*'=>'required',
                // 'featureName.*'=>'required',
                'image'=>'required',
               
            ],['featureValue.*.required'=>'Value','featureName.*.required'=>'Name is required']);
        }
        if($validator->passes()) {
                    
            $formdata['description'] = $request->description;
            $formdata['size'] = $request->size;
            $formdata['room'] = $request->room;
            $formdata['cost'] = $request->cost;
            $formdata['psize'] = $request->psize;
            $formdata['category'] = $request->category;
            $formdata['name'] = $request->name;
            $formdata['address'] = $request->name;
            $formdata['featureValue'] = json_encode($request->featureValue);
            $formdata['featureName'] = json_encode($request->featureName);
          
            if(!empty($request->file('image'))){
                    $img = $request->file('image');
                    $formdata['image'] = url('uploads').'/'.uniqid().'-'.$img->getClientOriginalName(); 
                    $request->file('image')->move(public_path('uploads'), $formdata['image']);
            }
            if(!empty($request->file('broschure'))){
                    $img = $request->file('broschure');
                    $formdata['broschure'] = url('uploads').'/'.uniqid().'-'.$img->getClientOriginalName(); 
                    $request->file('broschure')->move(public_path('uploads'), $formdata['broschure']);
            }
            if (!empty($request->file('o_image'))) {
                foreach ($request->file('o_image') as $key => $value) {
                    $img = $value;
                    $filename = time().'-'.$img->getClientOriginalName();
                    $img->move(public_path('uploads'), $filename);
                    $filedata[] = url('uploads').'/'.$filename;
                }
                $formdata['o_image'] = json_encode($filedata);
            }
            if (!empty($id)) {
                $formdata['updated_by'] = Auth::user()->id;
                $row = Project::where('id',$id)->update($formdata);
                $row=$id;
                $msg = 'Data Updated';
            }else{
                $formdata['added_by'] = Auth::user()->id;
                $row = Project::insertGetId($formdata);
                $msg = 'Data Inserted';

            }

            
           
            if($row){
                if (!empty($request->categories) && count($request->categories) !=0 && !empty($request->categories[0]) ) {
                    foreach ($request->categories as $key => $value) {
                        // print_r($request->categories[$key]);
                        if (!empty($request->file('image'.$key))) {
                            $img = '';
                            $filedata = array();
                            foreach ($request->file('image'.$key) as $key1 => $value1) {
                                $img = $value1;
                                $filename = time().'-'.$img->getClientOriginalName();
                                $img->move(public_path('uploads'), $filename);
                                $filedata[] = url('uploads').'/'.$filename;
                            }
                            $variantData['image'] = json_encode($filedata);
                        }
                        $variantData['prod_id'] = $row;
                        $variantData['catName'] = $request->categories[$key];
                        ProductVariant::insertGetId($variantData);
                    }
                }
                return ['status_code' => 200 , 'message' =>$msg];
            }else{
                return ['status_code' => 201 , 'message' => "Something went wrong !"];
            }
        }    
        return ['message'=>$validator->errors()->all(),'status_code'=>301];      
    }//end of method


    public function show(Request $request){
        if ($request->ajax()) {
            $data = Project::query();
           
           

            if ($request->cat) {
                $data = $data->where('projects.cat_id',$request->cat);
            }
            $data = $data->where(['is_deleted'=>0])->orderBy('projects.id','DESC')->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                           $btn = '<ul class="orderDatatable_actions mb-0 d-flex flex-wrap" style="min-width:90px;justify-content:unset;"> ';
                           $btn .= '<li> <a href="'.route('project-management.index',['product'=>$row->id]).'" class="edit"> <svg  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a> </li>';

                           $btn .='<li onclick="deletes(\''.$row->id.'\')"> <a href="javascript:void[0]" class="remove"> <svg  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a> </li> ';
                           $btn .= '</ul>';
                            return $btn;
                    })

                    ->addColumn('image', function($row){
                        if ($row->image) {
                           $btn = '<a href="'.$row->image.'" target = "_blank"><img style="height: 50px; width:50px" src="'.$row->image.'"></a><br>';
                          
                        }else{
                           $btn = '<img style="height: 50px; width:50px" src="'.asset('uploads/default/default-user.jpg').'">';
                       }
                          
                            return $btn;
                    })


                    ->addColumn('descr', function($row){
                        $btn ="";
                        $btn.= '<span id="hide'.$row->id.'">'.substr($row->description, 0,2).'...';

                        $btn.= '<a href="javascript:void[0]" onclick="show('.$row->id.')">Read</a></span>';

                        $btn.= '<span style="display:none" id="show'.$row->id.'">'.$row->description.'...<a href="javascript:void[0]" onclick="hide('.$row->id.')">Read Less</a></span>';
                           
                        
                          
                            return $btn;
                    })

                    

                    ->addColumn('status', function($row){
                        $btn = '';
                        if ($row->active_status == 1) {
                           $btn .= '<span class="badge badge-success" style="cursor:pointer;" onclick="status('.$row->id.',0)">Active</span>';
                        }else{
                           $btn .= '<span class="badge badge-warning" style="cursor:pointer;" onclick="status('.$row->id.',1)">De-Active</span>';


                        }
                        //    $btn .= '<br><span class="badge badge-primary" style="cursor:pointer;"><a style="color:white" href="'.route('product-management.viewVariants',['product'=>$row->id]).'">View Variants</a></span>';
                          
                            return $btn;
                    })
                    ->rawColumns(['image','status','descr','action'])
                    ->make(true);
        }
    }//end of method

    public function edit(request $request){
        $data = Project::join('product_images','product_images.prd_id','=','products.id')->where('products.id',$request->id)->groupBy('product_images.prd_id')->first(['products.name','products.id','products.description','products.description2','products.tag','products.image','products.active_status','products.qty','products.mrp','products.price','products.stock_warning','products.is_return','products.best_selling','products.sale','products.brand_id','products.sub_cat_id','products.cat_id','products.tax_id',DB::raw('GROUP_CONCAT(path) as path')]);
        if(empty($data)){
            return ['message'=>"Something went wrong !",'status_code'=>201];
        }else{
            return ['message'=>'Success !','status_code'=>200 , 'data' => $data];
        }

    }//end of method

    public function delete(Request $request){
        $data['is_deleted'] = 1;
        $formdata['deleted_by'] = Auth::user()->id;
        $row = Project::where('id',$request->id)->update($data);

        if(empty($row)){
            return ['message'=>"Can't Delete!",'status_code'=>201];
        }else{
            return ['message'=>'Deleted !','status_code'=>200];
        }
    }//end of method


    public function price_calc(Request $request){

        $comm = array();
        $data = Project::join('product_variants','product_variants.prod_id','=','products.id')->join('categories','categories.id','=','products.cat_id')->where('products.id',$request->id)->groupBy('product_variants.prod_id')->first(['products.price','products.cat_id','categories.commision',DB::raw('GROUP_CONCAT(product_variants.price) as price'),DB::raw('GROUP_CONCAT(product_variants.variant) as variant')]);
        $new_commision = VendorCommision::where(['user_id'=>Auth::user()->id,'cat_id'=>$data->cat_id])->first();
        if ($new_commision) {
            foreach (explode(',', $data->price) as $key => $value) {
                $comm[$key]['commision'] = ($new_commision->commision / 100) * $value;
                $comm[$key]['price'] = $value ;
                $comm[$key]['you_get'] = $value - $comm[$key]['commision'] ;
                $comm[$key]['variation'] = explode(',', $data->variant)[$key] ;
            }
        }else{
            foreach (explode(',', $data->price) as $key => $value) {
                $comm[$key]['commision'] = ($data->commision / 100) * $value;
                $comm[$key]['price'] = $value ;
                $comm[$key]['you_get'] = $value - $comm[$key]['commision'] ;
                $comm[$key]['variation'] = explode(',', $data->variant)[$key] ;
            }
        }
   
        if(empty($comm)){
            return ['message'=>"Can't ",'status_code'=>201];
        }else{
            return ['message'=>$comm,'status_code'=>200];
        }
    }//end of method

    public function status(Request $request){
        $data['active_status'] = $request->status;
        $data['updated_by'] = Auth::user()->id;
        $row = Project::where('id',$request->id)->update($data);

        if(empty($row)){
            return ['message'=>"Can't Update Status!",'status_code'=>201];
        }else{
            return ['message'=>'Status Updated!','status_code'=>200];
        }
    }//end of method


    public function sub_cat(request $request) 
    {
        $cat_id = $request->cat_id;
        $status= SubCategory::where(['is_deleted'=>0,'active_status'=>1,'cat_id'=>$cat_id])->get(['id','name']);
        return $status;
    }

    public function getSearch(request $request) 
    {
        $search = $request->search;
        // print_r($search);
        // die;
        // $status= SubCategory::where(['is_deleted'=>0,'active_status'=>1])->whereRaw('name = '.$search.'')->get(['id','name']);
        $data = Project::query();
            $data = $data->join('product_variants','product_variants.prod_id','=','products.id')->join('brands','brands.id','=','products.brand_id')->join('categories','categories.id','=','products.cat_id')->join('sub_categories','sub_categories.id','=','products.sub_cat_id')->join('taxations','taxations.id','=','products.tax_id');

            $data = $data->whereRaw('(products.name LIKE "%'.$search.'%")');
           
            $data = $data->where(['products.active_status'=>1,'products.is_deleted'=>0])->orderBy('products.id','DESC')->get(['products.name','products.id','products.description','products.description2','products.tag','products.image','products.active_status','products.qty','products.mrp','products.stock_warning','products.is_return','products.best_selling','products.sale','products.coupon_valid','products.self_shipping','taxations.name as tax','taxations.value','brands.name as brand','categories.name as cat','sub_categories.name as sub_cat','product_variants.variant' ,'product_variants.color','product_variants.price','product_variants.id as varientID']);
        return $data;
    }

    // public function import_product(Request $request){

    //     $insert = Excel::import(new ProductImport,$request->file('excel'));

    //     if(empty($insert)){

    //         return response()->json(['status'=>3]);

    //     }else{

    //       return response()->json(['status'=>1]);
    //     }

    // }//End if Function

    public function import_product(Request $request){

        $file = fopen($request->file('excel'),'r');
        
        while(!feof($file)) {
            $row  = fgetcsv($file);

            $last_id = '';
             if(empty($row[0])){
                return ['message'=>"Can't Update Status!",'status'=>1];
            }

            $formdata['name'] = $row[0];
            $formdata['brand_id'] = $row[1];
            $formdata['cat_id'] = $row[2];
            $formdata['sub_cat_id'] = $row[3];
            $formdata['tax_id'] = $row[4];
            $formdata['mrp'] = $row[5];
            $formdata['price'] = $row[6];
            $formdata['sale'] = $row[7];
            $formdata['is_return'] = $row[8];
            $formdata['best_selling'] = $row[9];
            $formdata['coupon_valid'] = $row[10];
            $formdata['self_shipping'] = $row[11];
            $formdata['description'] = $row[19];
            $formdata['description2'] = $row[20];
            $formdata['added_by'] = Auth::user()->id;
  
        if (!empty($row[12])) {
            // $formdata['image'] = url('storage').'/'.$row[0]; 
            // $last_id = Project::insertGetId($formdata);
            // $filedata['path'] = url('storage').'/'.$row[0]; 
            // $filedata['added_by'] = Auth::user()->id;
            // $filedata['prd_id'] = $last_id; 
            // ProductImage::insertGetId($filedata);
            // Storage::disk('public')->put('upload'.$row[0].'.jpg', file_get_contents($row[12]));
            $formdata['image'] =$row[12]; 
            $last_id = Project::insertGetId($formdata);
            $filedata['path'] = $row[12]; 
            $filedata['added_by'] = Auth::user()->id;
            $filedata['prd_id'] = $last_id; 
            ProductImage::insertGetId($filedata);
            // Storage::disk('public')->put('upload'.$row[0].'.jpg', file_get_contents($row[12]));
        }
        $variantData['variant'] = $row[13].'g';
        $variantData['qty'] = $row[18];
        $variantData['mrp'] = $row[5];
        $variantData['price'] = $row[6];
        $variantData['length'] = $row[14];
        $variantData['breath'] = $row[15];
        $variantData['height'] = $row[16];
        $variantData['weight'] = $row[17];
        $variantData['added_by'] = Auth::user()->id;
        $variantData['prod_id'] = $last_id; 
        $last_ids = ProductVariant::insertGetId($variantData);



            
        }   // end of while
            
    }   // end of function
}
