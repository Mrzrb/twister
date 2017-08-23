@extends('layouts.app')

@section('content')

       <div class="row">
           <div class="col-md-row">
                <div class="panel panel-default">
                    <div class="panel-heading">Group :  
                        <strong>{{ $group->name }}</strong>
                        
                        <a href=""><button type="button" class="btn btn-default">Join</button></a>
                        
                     </div>
                    <div class="panel-body">
                        <h3>User</h3>
                        <ul class="list-group">
                            <li class="list-group-item">Item 1</li>
                        </ul>
                        
                    </div>
                </div>
            </div>   
       </div>


       

    
    {{--  <form action="{{ $group->path() }}/reply" method="POST" role="form">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="hidden" name="twist_id" value="{{ $twist->id }}">
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <input type="hidden" name="to_who" value="{{ $twist->user->id }}">
            <input type="text" class="form-control" name="body" id="" placeholder="Say whatever you want">
        </div>
        <button type="submit" class="btn btn-primary">Reply</button>
    </form>  --}}
    


@endsection
