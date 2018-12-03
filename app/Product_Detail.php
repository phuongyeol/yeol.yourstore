<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
class Product_Detail extends Model
{
    protected $table='product_details';
    protected $fillable = [
    	'product_id',
    	'color_id',
    	'size_id',
    	'quantity'
    ];

    public function product(){
    	return $this->belongsTo()('App\Product', 'product_id', 'id');
    }

    public function colors(){
    	return $this->hasMany('App\Color', 'id', 'color_id');
    }

    public function sizes(){
    	return $this->hasMany('App\Size', 'id', 'size_id');
    }
    public function image(){
        return $this->hasMany('App\Gallary_Image', 'id', 'product_detail_id');
    }
}
