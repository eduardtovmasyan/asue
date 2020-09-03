<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * 
 */
class LmsUser extends Facade
{
    protected static function getFacadeAccessor() {
        return 'user';
    }
}
