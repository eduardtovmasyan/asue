<?php

namespace App\Services;

use Hash;
use App\User;
use Illuminate\Support\Facades\Auth;

class LoginService
{
    protected $userModel;

    function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    public function logIn($request)
    {
        $user = $this->userModel::where('email', $request->email)->first();
dd($user);
        if (isset($user)) {
            dd(Hash::check($request->password, $user->pass));
            
            if (Hash::check($request->password, $user->pass)) {
                Auth::login($user);

                return true;
            }
        }

        return false;
    }
}
