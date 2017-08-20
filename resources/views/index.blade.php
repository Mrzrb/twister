@extends('layouts.app')

@section('content')

   <div class="container">
       <div class="row">
           <div class="col-md-row col-md-offset-2">

            @foreach($twists as $twist)
                <div class="panel panel-default">
                    <div class="panel-heading">Twist</div>
                    <a href="{{ $twist->path() }}"><div class="panel-body">{{ $twist->body }}</div></a>
                </div>
            @endforeach
            </div>   
       </div>
   </div>

@endsection