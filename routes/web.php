<?php

use App\Http\Controllers\ProfilesController;
use Illuminate\Support\Facades\Route;

Route::get('/', static function () {
    return view('home');
})->name('home');

Route::get('/profiles', [ProfilesController::class, 'show'])->name('profiles');

Route::get('/profile/{userId}', static function (int $userId) {
    return view('profile', ['userId' => $userId]); // TODO: check userId exists in controller
})->whereNumber('userId')->name('profile');

Route::get('/games', static function () {
    return view('games');
})->name('games');

Route::get('/game/{gameId}', static function (int $gameId) {
    return view('game', ['gameId' => $gameId]); // TODO: check gameId exists in controller
})->whereNumber('gameId')->name('game');

Route::get('leaderboard', static function () {
    return view('leaderboard');
})->name('leaderboard');
