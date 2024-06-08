@include('templates.base', ['title' => 'Games'])

<h1>Games</h1>

@foreach($games as $game)
<a href="{{ URL::route('game', $game->id) }}"><h3>{{ $game->id . ' - ' . $game->created_at }}</h3></a>
@endforeach

@include('templates.end')
