<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $fillable = [
        'name_vendor', 'status', 'description',
    ];

    public function product(){
    	return $this->hasMany('App\Vendor','vendor_id','id');
    }
}
