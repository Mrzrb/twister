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


       <div class="row">
           <div class="col-md-row col-md-offset-2">
                @foreach($replies as $reply)
                    @include('twist.reply'); 
                @endforeach
            </div>   
       </div>


   </div>

@endsection