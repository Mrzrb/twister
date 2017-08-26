<?php

namespace App;

use App\Activity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class Twist extends Model
{
    use RecordActivity;
    protected $guarded = [] ;
    

    protected static function boot(){
        parent::boot();

        static::created(function($twist){
            $twist->recordActivity('create');
        });
    }


    // public function recordActivity($event){
    //     Activity::create([
    //         'user_id' => \Auth::user()->id,
    //         'type' => $this->getActivityType($event),
    //         'subject_id' => $this->id,
    //         'subject_type' => Twist::class
    //     ]);
    // }

    // public function getActivityType($event)
    // {
    //     return $event .'_'. strtolower((new \ReflectionClass($this))->getShortName());
    // }
    
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
