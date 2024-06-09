<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;

class LeaderboardController extends Controller
{
    /**
     * Show list of games
     */
    public function show(): View
    {
        $usersWithScores = User::query()
            ->select(['users.name AS name', 'users.id AS user_id', 'scores.score'])
            ->leftJoin('scores', 'scores.user_id', '=', 'users.id')
            ->where('scores.score', '>', 0)
            ->orderBy('score', 'desc')
            ->limit(10)
            ->get();

        return view('leaderboard', [
            'usersWithScores' => $usersWithScores
        ]);
    }
}
