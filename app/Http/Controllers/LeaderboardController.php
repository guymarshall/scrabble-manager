<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class LeaderboardController extends Controller
{
    /**
     * Show list of games
     */
    public function show(): View
    {
        $usersWithScores = User::query()
            ->select('users.id', 'users.name', DB::raw('AVG(scores.score) as average_score'))
            ->join('scores', 'users.id', '=', 'scores.user_id')
            ->groupBy('users.id', 'users.name')
            ->orderBy('average_score', 'desc')
            ->limit(10)
            ->get();

        return view('leaderboard', [
            'usersWithScores' => $usersWithScores
        ]);
    }
}
