@include('templates.base', ['title' => 'Leaderboard'])

<h1>Leaderboard</h1>

@foreach($usersWithScores as $user)
    <a href="{{ URL::route('profile', $user->user_id) }}"><h3>{{ $user->name . ' - ' . $user->score }}</h3></a>
@endforeach

@include('templates.end')
