<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @include('templates.navbar', ['pages' => [
            ['url' => 'home', 'name' => 'Home'],
            ['url' => 'profiles', 'name' => 'Profiles'],
            ['url' => 'games', 'name' => 'Games'],
            ['url' => 'leaderboard', 'name' => 'Leaderboard'],
        ]])

        <title>{{ $title }}</title>
    </head>
    <body>
