<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\View\View;

class GamesController extends Controller
{
    /**
     * Show list of games
     */
    public function show(): View
    {
        $games = Game::all();

        return view('games', [
            'games' => $games
        ]);
    }
}
