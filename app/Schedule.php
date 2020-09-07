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

    public function teachRoom()
    {
        return $this->hasOne(TeachRoom::class, 'id', 'room');
    }

    public function subject()
    {
        return $this->hasOne(Subject::class, 'id', 'ararka');
    }
}
