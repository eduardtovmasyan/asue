<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GraphicLoadMain extends Model
{
    public $table = 'dec_grafic_load_main';
    public $timestamps = false;

    public function curriculum()
    {
        return $this->belongsTo(Curriculum::class, 'id', 'plan_id');
    }

    public function chair()
    {
        return $this->hasOne(Chair::class, 'AmbionID', 'ambion');
    }

    public function subject()
    {
        return $this->hasOne(Subject::class, 'id', 'subj_id');
    }

    public function educationalOrientation()
    {
        return $this->hasOne(EducationalOrientation::class, 'id', 'krtamas');
    }
}
