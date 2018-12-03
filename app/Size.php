<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $fillable = [
        'size', 
    ];
     public function size_details(){
        return $this->belongsToMany('App\Product_Detail','size_id','id');
    }
}
