<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests\StoreProduct;
use Validator;
use Response;
use App\Category;
use App\Vendor;
use App\Color;
use App\Size;
use Illuminate\Support\Facades\Storage;
use App\Gallary_Image;
use App\Product_Detail;
use Yajra\Datatables\Datatables;
use Illuminate\Routing\RouteCollection;
use App\ImageGallery;

class ProductController extends Controller
{
    public function index(){
    	$products = Product::orderBy('id', 'desc')->get();
    	$categories = Category::all();
    	$vendors = Vendor::all();
    	$colors = Color::all();
    	$sizes = Size::all();
    	return view('admin.products.list',[
    		 'products' => $products,
    		 'categories' => $categories,
    		 'vendors' => $vendors,
    		 'sizes' => $sizes,
    		 'colors' => $colors,
    	]);
    }

    public function getListProduct(){

    	$products = Product::select(
    		'products.id', 
    		'products.name_product', 
    		'products.description',
    		'products.origin_price', 
    		'products.sale_price',
    		'products.category_id',
    		'categories.name_cate',
    		'products.vendor_id',
    		'vendors.name_vendor'
    	)
    	->join('categories','categories.id','=', 'products.category_id')
    	->join('vendors','vendors.id','=', 'products.vendor_id')
    	->orderBy('products.id', 'desc');

    	return Datatables::of($products)
	        ->addColumn('action', function ($products) {
	           return '
					<button href="" class="show-modal btn btn-success btn-xs btn-detail " data-id="'.$products->id.'" data-title="'.$products->name.'"  data-content="{{$categories->description}}">
	                <span class="glyphicon glyphicon-eye-open "></span>Show </button>
	                
	                <button class="edit-modal btn btn-info btn-xs" data-id="'.$products->id.'" data-title="'.$products->name.'" >
	                <span class="glyphicon glyphicon-edit "></span>Edit</button>
	                <button class="delete-product btn btn-danger btn-xs" data-id="'.$products->id.'">
	                <span class="glyphicon glyphicon-trash"></span>Delete</button>';
	        })
	        ->rawColumns(['action'])
	        ->toJson();
    }
    
    // Upload images form fileinput- Add
    public function store(Request $request){
        // $imageName = request()->file->getClientOriginalName();
        // request()->file->move(public_path('upload'), $imageName);
        // return response()->json(['uploaded' => '/upload/'.$imageName]);    
        $path = $request->file->store('upload');
        $img = ImageGallery::create(['image' => $path]);
        return response()->json(['data' => $img]);
    }
    // Upload images form fileinput - Show
    

    public function storeProduct(StoreProduct $request)
    {
        // dd($request);
       
        date_default_timezone_set("Asia/Ho_Chi_Minh");

        $date = date("YmdHis", time());

        $data = $request->all(); //Để lấy dữ liệu từ phía người dùng nhập vào

        //str_lug: sinh ra một "slug" thân thiện cho URL (https://giaphiep.com/docs/5.3/helpers#method-str-slug)
        $data['slug'] = str_slug($data['name_product']);  
        $dataProduct = array();
        $dataProduct['name_product'] =  $data['name_product'];
        $dataProduct['category_id'] = $data['category_id'];
        $dataProduct['vendor_id'] = $data['vendor_id'];
        $dataProduct['origin_price'] = $data['origin_price'];
        $dataProduct['sale_price'] = $data['sale_price'];
        $dataProduct['slug'] = $data['slug'];
        $dataProduct['description'] = $data['description'];
        $dataProduct['content'] = $data['content'];

        $product = Product::create($dataProduct);

        // json_decode: chuyển chuỗi request => dạng mảng hoặc object
        // json-endecode: chuyển mảng / object => chuỗi
        $details = json_decode($request->details); 

        if (!empty($details)){
            foreach ($details as $detail) {
                // 
                $product_detail  = new Product_Detail();
                $size = $detail->size;
                $color = $detail->color;
                $qty = $detail->qty;
                $Size = Size::where('size',$size)->first();
                $Color = Color::where('name',$color)->first();
                if ($Size) {
                    // Nếu $size nhập vào đã tồn tại thì bỏ qua
                }
                else{
                    // Nếu $size chưa tồn tại thì thêm mới size
                    $Size = Size::create(['size'=>$size]); 
                }

                $size_id = $Size->id;

                if ($Color) {
                    // Nếu $color nhập vào đã tồn tại thì bỏ qua
                }
                else{
                    // Nếu $color chưa tồn tại thì thêm mới color
                    $Color = Color::create(['name'=>$color]);
                }

                $color_id = $Color->id;
                    // ---
                $product_detail->color_id = $color_id;
                $product_detail->size_id = $size_id;
                $product_detail->quantity = $qty;
                $product_detail->product_id = $product->id;
                
                $product_detail->save();
            }
        } 

        if (!empty($data['images'])) {
             $images = explode(',', $data['images']);
            unset($images['0']);
            // dd($image1);
            // 
            // dd('qqqq');
            if (isset($images)) {
                foreach ($images as $img ) {
                    $temp = [];
                    $temp['link'] = $img;
                    $temp['name'] = $request['name'];
                    $temp['product_id'] = $product['id'];
                    $temp['product_detail_id'] = $product_detail['id'];
                    Gallary_Image::storeData($temp);
                }
            }
        }else {
            $temp = [];
            $temp['name'] = $request['name'];
            $temp['product_id'] = $product['id'];
            $temp['product_detail_id'] = $product_detail['id'];

            Gallary_Image::storeData($temp);
        }
        return response()->json(['message' => 'Thanh cong'], 200);
    }

    // Show Detail Product
    public function show($id)
    {
        $product_details=Product_Detail::all();
        $colors = Color::all();
        $sizes = Size::all();
        $products=Product::all();
        return view('admin.products.list',[
            'products' => $products,
            'sizes' => $sizes,
            'colors' => $colors,
            'product_details' => $product_details,
        ]);
    }
    public function getListProductDetail($id_product){
        $product_details = Product_Detail::where('product_details.product_id', '=', $id_product)
        ->join('sizes','sizes.id','=', 'product_details.size_id')
        ->join('colors','colors.id','=', 'product_details.color_id')
        ->join('gallary_images', 'gallary_images.product_detail_id', '=', 'product_details.id')
        ->select(
            'product_details.id', 
            'product_details.product_id', 
            'product_details.size_id',
            'product_details.color_id', 
            'product_details.quantity',
            'product_details.created_at',
            'sizes.size',
            'colors.name',
            'gallary_images.link'
        )
        ->limit(1)
        ->orderBy('product_details.id', 'desc');


        return Datatables::of($product_details)
            ->addColumn('action', function ($product_details) {
               return '
                
                    <button class="add_new_detail btn btn-primary " data-toggle="modal" data-id="'.$product_details->product_id.'">New <i class="fa fa-plus-square"></i></button>
                    <button class="slide-modal-detail btn btn-success btn-xs" data-id="'.$product_details->id.'" >
                    <span class="glyphicon glyphicon-edit "></span>Slide</button>
                    <button class="edit-modal-detail btn btn-info btn-xs" data-id="'.$product_details->id.'" >
                    <span class="glyphicon glyphicon-edit "></span>Edit</button>
                    <button class="delete-detail btn btn-danger btn-xs" data-id="'.$product_details->id.'">
                    <span class="glyphicon glyphicon-trash"></span>Delete</button>';
            })
            ->addColumn('photo', function($product_details){                
                 return '<img class="img-responsive img-thumbnail" style="width:80px; height:auto" src="'.asset(\Storage::url($product_details->link)).'">';
            })
            // ->addColumn('newDetail', function($product_details){
                // $product_id = $product_details->product_id;
                // dd($product_id);
                // return view('admin.products.list',[
                    // 'product_details' => $product_details,
                // ]);
            // })
            ->rawColumns(['action','photo'])
        ->toJson();
    }

    public function edit($id)
    {
        return Product::findOrFail($id);
    }

    public function update(Request $request, $id)
    {   
            // Response::json(array('errors' => $validator->getMessageBag()->toArray()));
            $product = Product::findOrFail($id);
            $update = $product->update($request->all());
            return response()->json(['data'=>$update],200);
    }


    public function destroy(Request $request, $id)
    {
        $id = $request->all()['product_id'];
        // dd($id);
        Product::destroy($id);
        Product_Detail::where('product_id',$id)->delete();
        Gallary_Image::where('product_id', $id)->delete();
        return \Response::json([
            'error' => false,
        ]);
    }
    
}
