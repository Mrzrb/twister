<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $guarded = [];
    public function users()
    {
        return $this->belongsToMany(\App\User::class);
    }


    //path info
    public function path()
    {
        return "/group/".$this->id;
    }
}
