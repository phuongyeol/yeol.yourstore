<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Position;
class User extends Authenticatable
{
    use Notifiable;
    protected $fillable = [
        'name',
        'email', 
        'password',
        'username', 
        'avatar',
        'thumbnail',
        'mobile',
        'address'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function position(){
        return $this->hasOne('App\Position', 'id', 'position_id');
    }
    
}
