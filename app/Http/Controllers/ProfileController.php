<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(User $profileUser){
        $pool = $profileUser->followed;
        $user = auth()->user();
        $res = false;
        $pool->each(function($item,$key) use ($user,&$res){
            if($item->id == $user->id )
                $res = true; 
                return false;
        });

        $activities = $profileUser->activity()->latest()->with('subject')->get();
        return view('profile.show' , compact("profileUser","res","activities"));
    }
}
