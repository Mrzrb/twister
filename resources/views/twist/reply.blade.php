<div class="panel panel-default">
    <div class="panel-heading">
        <strong>{{ $reply->owner->name }} </strong> {{ $reply->updated_at->diffForHumans() }} Said:
    </div>
    <div class="panel-body">{{ $reply->body }}</div>
</div>