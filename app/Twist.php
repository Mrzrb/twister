<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Twist extends Model
{
    public function path(){
        return '/twist/' . $this->id;
    }

    public function replies(){
        return $this->hasMany(\App\Reply::class);
    }
}
