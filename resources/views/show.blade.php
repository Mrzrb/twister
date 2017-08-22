@extends('layouts.app')

@section('content')

       <div class="row">
           <div class="col-md-row">
                <div class="panel panel-default">
                    <div class="panel-heading">Twist by <strong>{{ $twist->user->name }}</strong> </div>
                    <div class="panel-body">{{ $twist->body }}</div>
                </div>
            </div>   
       </div>


       <div class="row">
           <div class="col-md-row">
                @foreach($replies as $reply)
                    @include('twist.reply')
                @endforeach
            </div>   
       </div>

    
    <form action="{{ $twist->path() }}/reply" method="POST" role="form">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="hidden" name="twist_id" value="{{ $twist->id }}">
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <input type="hidden" name="to_who" value="{{ $twist->user->id }}">
            <input type="text" class="form-control" name="body" id="" placeholder="Say whatever you want">
        </div>
        <button type="submit" class="btn btn-primary">Reply</button>
    </form>
    


@endsection
