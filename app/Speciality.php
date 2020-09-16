<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    public $table = 'dec_masnagitucyun';
    public $timestamps = false;

    public function student()
    {
        return $this->belongsTo(Student::class, 'specialty', 'MasnagitutyunID');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'st_group', 'MasnagitutyunID');
    }
}
