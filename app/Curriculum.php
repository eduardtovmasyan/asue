<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    protected $table = 'dec_us_plans';
    public $timestamps = false;
    protected $primaryKey = null;
    public $incrementing = false;

    public function graphic()
    {
        return $this->hasOne(GraphicLoadMain::class, 'plan_id', 'id');
    }
}
