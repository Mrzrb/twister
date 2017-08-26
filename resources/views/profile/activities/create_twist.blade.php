

<div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">
            {{ $profileUser->name }} twist at {{ $activity->created_at->diffForHumans()}}

        </h3>
      </div>

       <a href="{{ $activity->subject->path() }}"> 
      <div class="panel-body">
          {{ $activity->subject->body }}
      </div>
    </a>
  </div>