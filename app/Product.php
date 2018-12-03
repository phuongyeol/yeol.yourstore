<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Category, Vendor, Product_Detail, Gallary_Image;
class Product extends Model
{
    protected $fillable=[
    	'name_product', 
    	'category_id', 
    	'vendor_id', 
    	'description', 
    	'origin_price', 
    	'sale_price',
    	'slug', 
        'content'
    ];

    // 1 sản phẩm thuộc duy nhất 1 thể loại => 1product hasOne category_id
    public function category(){
    	return $this->hasOne('App\Category', 'id', 'category_id');
    }

    //1 sản phẩm do 1 nhà cung cấp duy nhất cung cấp
    public function vendor(){
    	return $this->hasOne('App\Vendor', 'id', 'vendor_id');
    }

    // 1 sản phẩm có 1 bản ghi chi tiết của nó
    public function product_detail(){
    	return $this->hasOne('App\Product_Detail', 'product_id', 'id');
    }

    // 1 sản phẩm có nhiều ảnh khác nhau
    public function images(){
    	return $this->hasMany('App\Gallary_Image', 'product_id', 'id');
    }

    public function img1(){
        return $this->image()->first();
    }
     public function img2(){
        return $this->image()->take(3)->get();
    }

}
