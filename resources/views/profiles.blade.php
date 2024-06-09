@include('templates.base', ['title' => 'Profiles'])

<h1>Profiles</h1>

@foreach($profiles as $profile)
    <a href="{{ URL::route('profile', $profile->id) }}"><h3>{{ $profile->name . ' - ' . $profile->created_at }}</h3></a>
@endforeach

@include('templates.end')
