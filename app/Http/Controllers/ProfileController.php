<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    public function showProfilePage()
    {
        return view('profile');
    }
}
