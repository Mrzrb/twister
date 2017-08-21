<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function followOrNot(User $user){
        if(in_array($user->toArray(),Auth::user()->follow->toArray())){
            Auth::user()->follow()->dettach($user->id);
        }else{
            Auth::user()->follow()->attach($user->id);
        }
    }

}
