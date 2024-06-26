<?php

use App\Http\Controllers\GamesController;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfilesController;
use Illuminate\Support\Facades\Route;

Route::get('/', static function () {
    return view('home');
})->name('home');

Route::get('/profiles', [ProfilesController::class, 'show'])->name('profiles');

Route::get('/profile/{userId}', [ProfileController::class, 'show'])->name('profile');

Route::get('/games', [GamesController::class, 'show'])->name('games');

Route::get('/game/{gameId}', static function (int $gameId) {
    return view('game', ['gameId' => $gameId]); // TODO: check gameId exists in controller
})->whereNumber('gameId')->name('game');

Route::get('/leaderboard', [LeaderboardController::class, 'show'])->name('leaderboard');
