<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{

    protected $guarded = [] ;
    
    public function owner(){
        return $this->belongsTo(\App\User::class,'user_id');
    }

    public function towho(){
        return $this->belongsTo(\App\User::class,'to_who');
    }
}
