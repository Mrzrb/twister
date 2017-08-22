<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $guarded = [];
    public function users(){
        return $this->belongsToMany(\App\User::class);
    }
}
