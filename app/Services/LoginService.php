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

        if (isset($user)) {
            if ($this->userModel->where('email', $request->email)->where('pass', '=', hash('sha256', $request->password))->first())
            {
                Auth::login($user);

                return true;
            }
        }

        return false;
    }
}
