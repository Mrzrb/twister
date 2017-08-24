<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(User $profileUser){
        return view('profile.show' , compact("profileUser"));
    }
}
