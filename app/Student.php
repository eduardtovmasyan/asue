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

    public function studentFaculty()
    {
        return $this->hasOne(Faculty::class, 'FacultetID', 'facultet_id');
    }

    public function studentCourse()
    {
        return $this->hasMany(Course::class, 'stud_id', 'stud_id');
    }

    public function studentSpeciality()
    {
        return $this->hasOne(Speciality::class, 'MasnagitutyunID', 'st_group');
    }
}
