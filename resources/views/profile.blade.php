@include('templates.base', ['title' => 'Profile'])

<h1>{{ $profile->name }} ({{ $profile->id }}) joined {{ $profile->date_joined }}</h1>

<h3>Average score: {{ $averageScore }}</h3>


@include('templates.end')
