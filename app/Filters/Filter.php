<?php 

namespace App\Filters;

use Illuminate\Http\Request;


//Base Filters
class Filter{

    protected $request , $builder;
    protected $filters = [];

    public function __construct(Request $request) 
    {
        $this->request = $request;
    }

    public function apply($builder)
    {
       $this->builder = $builder; 

        $this->getFilter()
        ->filter(function($filter){
            return method_exist($this,$filter);
        })->each(function($filter,$value){
            $this->$filter($value);
        });

    //    foreach($this->filters as $filter){
    //        if(method_exist($this,$filter) && $this->request->has($filter)){
    //            $this->$filter($this->request->$filter);
    //        }
    //    }
        return $this->builder;
    }


    public function getFilter(){
        return collect($this->request->intersect($this->filters))->flip();
    }
    
    
    

}