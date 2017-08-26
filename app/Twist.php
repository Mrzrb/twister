<?php

namespace App;

use App\Activity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class Twist extends Model
{
    use RecordActivity;
    protected $guarded = [] ;
    
    
    public function path(){
        return '/twist/'  . $this->id;
    }


    //relationship area
    public function replies(){
        return $this->hasMany(\App\Reply::class)->with('owner')->with('towho');
    }

    public function user(){
        return $this->belongsTo(\App\User::class);
    }




    //model controll
    public function reply( Request $request){
        \App\Reply::create($request->all());
    }

    public function scopeFilter($query, $filter){
        return $filter->apply($query);
    }
}
