<?php

namespace App\Http\Controllers;

use App\Models\Score;
use App\Models\User;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Show list of profiles
     */
    public function show(int $userId): View
    {
        $user = User::query()
            ->select(['users.id AS id', 'users.name AS name', 'users.created_at AS date_joined'])
            ->where('users.id', '=', $userId)
            ->firstOrFail();

        $scores = Score::query()
            ->leftJoin('users', 'users.id', '=', 'scores.user_id')
            ->where('users.id', '=', $userId)
            ->pluck('score');

        $averageScore = $scores->sum() / $scores->count();

        return view('profile', [
            'profile' => $user,
            'averageScore' => $averageScore
        ]);
    }
}
