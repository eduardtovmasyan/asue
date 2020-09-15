<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    public $table = 'dec_us_plans';
    public $timestamps = false;

    public function graphic()
    {
        return $this->hasMany(GraphicLoadMain::class, 'plan_id', 'id');
    }
}
