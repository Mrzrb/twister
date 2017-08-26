@extends('layouts.app')

@section('content')

       <div class="row">
           <div class="col-md-row">
            @foreach($twists as $twist)
                <div class="panel panel-default">
                    <div class="panel-heading"> 
                        <a href="{{ $twist->user->path() }}"> {{ $twist->user->name }} </a> 
                        said : 
                    </div>
                    <a href="{{ $twist->path() }}">
                    <div class="panel-body">{{ $twist->body }}</div></a>
                          <div class="panel-footer">
                              {{ $twist->updated_at->diffForHumans() }}
                          </div>
                    
                </div>
            @endforeach
            {{ $twists->links() }}
            </div>   
            
       </div>

@endsection