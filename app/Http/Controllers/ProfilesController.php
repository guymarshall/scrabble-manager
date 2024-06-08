<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;

class ProfilesController extends Controller
{
    /**
     * Show list of profiles
     */
    public function show(): View
    {
        $users = User::all();

        return view('profiles', [
            'profiles' => $users
        ]);
    }
}
