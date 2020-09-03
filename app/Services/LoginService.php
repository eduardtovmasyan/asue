<?php

namespace App\Services;

use App\LmsUser;

class LoginService
{
    protected $userModel;

    function __construct(LmsUser $userModel)
    {
        $this->userModel = $userModel;
    }
}
