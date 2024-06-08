<nav>
    <ul>
        @foreach ($pages as $page)
            <li>
                <a href="{{ URL::route($page['url']) }}">{{ $page['name'] }}</a>
            </li>
        @endforeach
    </ul>
</nav>
