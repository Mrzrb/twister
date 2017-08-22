@extends('layouts.app') 
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-row col-md-offset-2">

        
        <form action="/twist" method="POST" role="form">
            {{ csrf_field() }}
            <div class="form-group">
                
                <input type="text" class="form-control" id="" name="body" placeholder="Twist an Twister">
            </div>

            <button type="submit" class="btn btn-primary">Twist it</button>
        </form>
        
            
        </div>
    </div>
</div>

@endsection