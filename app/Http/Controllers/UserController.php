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
        if(in_array($user->toArray(),Auth::user()->follow->toArray())){
            Auth::user()->follow()->detach($user->id);
        }else{
            Auth::user()->follow()->attach($user->id);
        }
    }

    public function joinOrNot(Group $group)
    {
        if( !inPool($group->users,Auth::user())){
            auth()->user()->groups()->attach($group->id);
        }else{
            Auth::user()->groups()->detach($group->id);
        }
        return redirect($group->path());
    }

}
