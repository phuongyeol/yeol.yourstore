<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table = 'positions';
    protected $fillable=[
    	'name_pos', 
    	'description', 
    	'user_id', 
    ];
    public function users(){
        return $this->belongsToMany('App\User','user_id','id');
    }
}
