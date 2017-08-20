@extends('layouts.app')

@section('content')

   <div class="container">
       <div class="row">
           <div class="col-md-row col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Twist</div>
                    <div class="panel-body">{{ $twist->body }}</div>
                </div>
            </div>   
       </div>
   </div>

@endsection