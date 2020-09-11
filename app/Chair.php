<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chair extends Model
{
    public $table = 'dec_ambion';
    public $timestamps = false;

    public function graphic()
    {
        return $this->belongsTo(GraphicLoadMain::class, 'ambion', 'AmbionID');
    }
}
