<ul class="list-group">
 @foreach($groups as $group)
    <li class="list-group-item">
        <span class="badge"></span> 
        <a href="{{ $group->path() }}"> {{ $group->name }} </a>
    </li>
@endforeach
</ul>