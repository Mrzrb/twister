<?php

namespace App\Filters;


//Twist filters based on funduntional Filter
class TwistFilter{

    public $request;
    protected $filter = ['by'];

    public function __construct(Requst $requst){
        $this->request = $request;
    }

    public function by()
    {
        
    }

}