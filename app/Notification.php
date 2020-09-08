<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    public $table = 'lms_notification';
    public $timestamps = false;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'from', 'to_uname', 'status', 'heading', 'text', 'cr_date', 'read_date',
    ];
}
