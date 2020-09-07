<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public $table = 'lms_subjects';
    public $timestamps = false;

    public function schedule()
    {
        return $this->belongsTo(Schedule::class, 'ararka', 'id');
    }
}
