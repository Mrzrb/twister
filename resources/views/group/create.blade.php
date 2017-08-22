@extends('layouts.app') 
@section('content')

    <div class="row">
        <div class="col-md-row col-md-offset-2">

        
        <form action="/group" method="POST" role="form">
            {{ csrf_field() }}
            <div class="form-group">
                
                <input type="text" class="form-control" id="" name="name" placeholder="enter the name of group">
            </div>

            <button type="submit" class="btn btn-primary">Establish the group</button>
        </form>
        
            
        </div>
    </div>

@endsection