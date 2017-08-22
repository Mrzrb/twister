@extends('layouts.app')

@section('content')

       <div class="row">
           <div class="col-md-row col-md-offset-2">

            @foreach($twists as $twist)
                <div class="panel panel-default">
                    <div class="panel-heading"> {{ $twist->user->name }} said : </div>
                    <a href="{{ $twist->path() }}">
                    <div class="panel-body">{{ $twist->body }}</div></a>
                          <div class="panel-footer">
                              {{ $twist->updated_at->diffForHumans() }}
                          </div>
                    
                </div>
            @endforeach
            </div>   
       </div>

@endsection