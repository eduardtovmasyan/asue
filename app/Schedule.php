<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    public $table = 'lms_schedule';
    public $timestamps = false;

    public function lecturer()
    {
        return $this->hasOne(Lecturer::class, 'user_id', 'dasaxos');
    }
}
