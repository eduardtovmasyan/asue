<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    public $table = 'dec_ashxatakic';
    public $timestamps = false;

    public function schedule()
    {
        return $this->belongsTo(Schedule::class, 'dasaxos', 'user_id');
    }
}
