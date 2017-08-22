<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class Twist extends Model
{

	protected $guarded = [] ;
    public function path(){
        return '/twist/'  . $this->id;
    }


    //relationship area
    public function replies(){
        return $this->hasMany(\App\Reply::class);
    }

    public function user(){
        return $this->belongsTo(\App\User::class);
    }




    //model controll
    public function reply( Request $request){
        \App\Reply::create($request->all());
    }
}
