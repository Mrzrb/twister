<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Group;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function followOrNot(User $user)
    {
        Auth::user()->follow()->toggle($user->id);
    }

    public function joinOrNot(Group $group)
    {
        auth()->user()->groups()->toggle($group->id); 
        return redirect($group->path());
    }

}
