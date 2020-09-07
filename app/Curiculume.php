<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curiculume extends Model
{
    protected $table = 'dec_us_plans';
    public $timestamps = false;
    protected $primaryKey = null;
    public $incrementing = false;

    // public function curiculume($courser){
    //     return $this->where('teach_programm', $courser->teach_programm)
    //         ->where('teach_type', $courser->teaching_type)
    //         ->where('status', 1)
    //         ->where('masn_id', $courser->krt_cragir?$courser->krt_cragir:$courser->specialty);
    // }
}
