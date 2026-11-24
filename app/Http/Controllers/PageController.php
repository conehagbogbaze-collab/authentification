<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function dashboard()
    {
        return view('dashboard', [
            'user' => Auth::user(),
        ]);
    }

    public function profile()
    {
        return view('profile', [
            'user' => Auth::user(),
        ]);
    }
}