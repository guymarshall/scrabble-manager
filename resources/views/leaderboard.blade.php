@include('templates.base', ['title' => 'Leaderboard'])

<h1>Leaderboard</h1>

@foreach($usersWithScores as $user)
    <a href="{{ URL::route('profile', $user->id) }}"><h3>{{ $user->name . ' - ' . $user->average_score }}</h3></a>
@endforeach

@include('templates.end')
