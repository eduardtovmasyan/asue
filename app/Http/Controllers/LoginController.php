<?php

namespace App\Http\Controllers;

use Users;
use App\Http\Requests\UserValidationRequest;

class LoginController extends Controller
{
    public function showLoginPage()
    {
        return view('auth.signin');
    }

    public function signIn(UserValidationRequest $request)
    {
        $enter = Users::logIn($request);

        if ($enter) {
            return redirect()->route('home');
        } else {
            return redirect()->back();
        }
    }
}
