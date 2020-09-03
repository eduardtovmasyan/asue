<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LmsUser extends Model
{
    public $table = 'lms_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uname', 'email', 'pass', 'active', 'crdate', 'roleID',
    ];
}
