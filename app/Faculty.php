<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    public $table = 'dec_fakultet';
    public $timestamps = false;

    public function student()
    {
        return $this->belongsTo(Student::class, 'facultet_id', 'FacultetID');
    }
}
