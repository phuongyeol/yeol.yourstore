<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $fillable = [
        'name', 'code'
    ];
    public function color_details(){
        return $this->belongsToMany('App\Product_Detail','color_id','id');
    }
}
