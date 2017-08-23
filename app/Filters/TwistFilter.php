<?php

namespace App\Filters;
use App\User;
use Illuminate\Http\Request;

//Twist filters based on funduntional Filter
class TwistFilter extends Filter{

    public $request;
    protected $filters = ['by'];

    public function __construct(Request $request){
        $this->request = $request;
    }

    public function by($username)
    {
        $user = User::where('name',$username)->firstOrFail();
        return $this->builder->where('user_id',$user->id);
    }

}