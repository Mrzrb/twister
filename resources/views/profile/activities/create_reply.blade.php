

<div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">
            {{ $profileUser->name }} replied to
            <a href="{{ $activity->subject->twist->user->path() }}">{{ $activity->subject->twist->user->name }} 
             at {{ $activity->created_at->diffForHumans()}} </a>
        </h3>
      </div>
    <a href="{{ $activity->subject->twist->path() }}"> 
      <div class="panel-body">
          {{ $activity->subject->body }}
      </div>
    </a>
  </div>