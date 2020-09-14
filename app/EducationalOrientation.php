<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EducationalOrientation extends Model
{
    public $table = 'lms_krtamas';
    public $timestamps = false;

    public function graphic()
    {
        return $this->belongsTo(GraphicLoadMain::class, 'krtamas', 'id');
    }
}
