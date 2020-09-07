<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $table = 'lms_students';
    public $timestamps = false;

    public function information()
    {
        return $this->belongsTo(User::class, 'uname', 'stud_id');
    }

    public function faculty()
    {
        return $this->hasOne(Faculty::class, 'FacultetID', 'facultet_id');
    }

    public function course()
    {
        return $this->hasOne(Course::class, 'stud_id', 'stud_id');
    }
}
