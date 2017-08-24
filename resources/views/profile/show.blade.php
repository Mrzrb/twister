@extends('layouts.app')

@section('content')
<div class="page-header">
  <h1>{{ $profileUser->name }}<small> Since {{ $profileUser->created_at->diffForHumans() }}</small></h1>
  
  @if(auth()->user()->id !== $profileUser->id)
  <a href="/follow/{{ $profileUser->id }}"><button type="button" class="btn btn-default">Follow</button></a>
  @endif
</div>

@endsection