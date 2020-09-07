<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public $table = 'dec_courser';
    public $timestamps = false;

    public function student()
    {
        return $this->belongsTo(Student::class, 'stud_id', 'stud_id');
    }
}
