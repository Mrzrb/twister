<div class="panel panel-default">
    <div class="panel-heading">
        <strong> 
            <a href="{{ $reply->owner->path() }}"> {{ $reply->owner->name }} </a></strong> 
        {{ $reply->updated_at->diffForHumans() }} 
        Said : @
        {{ $reply->towho->name }}
    </div>
    <div class="panel-body">{{ $reply->body }}</div>
</div>