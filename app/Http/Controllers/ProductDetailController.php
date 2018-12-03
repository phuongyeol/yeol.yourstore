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

class ProductDetailController extends Controller
{
	public function storePD(Request $request){
        $path2 = $request->file_details->store('upload');
        $img2 = ImageGallery::create(['image' => $path2]);
        return response()->json(['data' => $img2]);
    }

    public function slideshow($pr_detail_id){
        $product_detail = Product_Detail::where('product_details.id', '=', $pr_detail_id)
        ->join('gallary_images', 'gallary_images.product_detail_id', '=', 'product_details.id')
        ->select(
            'gallary_images.link'
        );

        return Datatables::of($product_detail)
            ->addColumn('image', function($product_detail){
                return '<img class="img-responsive img-thumbnail" style="width:150px; height:auto;margin-left: 35%;" src="'.asset(\Storage::url($product_detail->link)).'">';
            })
            ->rawColumns(['image'])
        ->toJson();


    }

    public function destroyDetail(Request $request, $id){
    	$id = $request->all()['id'];
    	// dd($id);
        Product_Detail::destroy($id);
        Gallary_Image::where('product_detail_id',$id)->delete();

        return \Response::json([
            'error' => false,
        ]);
    }

    
    public function storeDetailProduct( Request $request ,$id_product)
    {
        // dd($request);
       	// $product = Product_Detail::findOrFail($id_product);

       	// dd($id_product);

        date_default_timezone_set("Asia/Ho_Chi_Minh");

        $date = date("YmdHis", time());

        $data = $request->all(); 
        $details = $request->details;
        // return response()->json($details);
         

        if (!empty($details)){
            foreach ($details as $detail) {
            	// return response()->json($detail);
                // 
                $product_detail  = new Product_Detail();
                $size = $detail->size;
                $color = $detail->color;
                $qty = $detail->qty;
                $Size = Size::where('size',$size)->first();
                $Color = Color::where('name',$color)->first();
                if ($Size) {}
                else{
                    $Size = Size::create(['size'=>$size]); 
                }

                $size_id = $Size->id;
                if ($Color) {}
                else{
                    $Color = Color::create(['name'=>$color]);
                }

                $color_id = $Color->id;

                $product_detail->color_id = $color_id;
                $product_detail->size_id = $size_id;
                $product_detail->quantity = $qty;
                $product_detail->product_id = $id_product;
                
                $product_detail->save();
            }
        } 

        if (!empty($data['images'])) {
             $images = explode(',', $data['images']);
            unset($images['0']);
            if (isset($images)) {
                foreach ($images as $img ) {
                    $temp = [];
                    $temp['link'] = $img;
                    $temp['name'] = $request['name'];
                    $temp['product_id'] = $id_product;
            		$temp['product_detail_id'] = $product_detail['id'];

                    Gallary_Image::storeData($temp);
                }
            }
        }else {
            $temp = [];
            $temp['name'] = $request['name'];
            $temp['product_id'] = $id_product;
            $temp['product_detail_id'] = $product_detail['id'];

            Gallary_Image::storeData($temp);
        }
        return response()->json(['message' => 'Thanh cong'], 200);
        // return response()->json(['data' => $product], 200);

    }
}
