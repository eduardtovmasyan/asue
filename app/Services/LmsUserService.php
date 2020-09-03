<?php

namespace App\Services;

use App\LmsUser;

class LmsUserService
{
    protected $userModel;

    function __construct(LmsUser $userModel)
    {
        $this->userModel = $userModel;
    }
}
