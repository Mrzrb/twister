<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Activity;

class Reply extends Model
{

    use RecordActivity;
    protected $guarded = [] ;
    
    public function owner(){
        return $this->belongsTo(\App\User::class,'user_id');
    }

    public function towho(){
        return $this->belongsTo(\App\User::class,'to_who');
    }


    protected static function boot()
    {
        parent::boot();
        static::created(function($reply){
            $reply->recordActivity('create');
        });
    }
}
