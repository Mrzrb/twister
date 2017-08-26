@extends('layouts.app')

@section('content')
<div class="page-header">
  <h1>{{ $profileUser->name }}<small> Since {{ $profileUser->created_at->diffForHumans() }}</small></h1>
  
  @if(auth()->user()->id !== $profileUser->id)
  <a href="/follow/{{ $profileUser->id }}"><button type="button" class="btn btn-default">
    @if($res)
    Unfollow
    @else
    Follow
    @endif
  </button></a>
  @endif

@if(count($activities))
  @foreach($activities as $activity)
    @include("profile.activities.{$activity->type}") 
  @endforeach
@else
  
  <div class="alert">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Notice</strong> The User do not have any activity
  </div>
@endif

</div>

@endsection