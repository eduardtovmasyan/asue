<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeachRoom extends Model
{
    public $table = 'lms_teach_room';
    public $timestamps = false;

    public function schedule()
    {
        return $this->belongsTo(Schedule::class, 'room', 'id');
    }
}
