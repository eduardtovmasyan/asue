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
}
