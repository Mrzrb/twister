<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
        <strong>Group</strong> <span class="caret"></span>
    </a>

    <ul class="dropdown-menu" role="menu">
        <li>
            @foreach($groups as $group)
            <a href="{{ $group->path() }}">
                {{ $group->name }}
            </a> @endforeach
        </li>
    </ul>
</li>