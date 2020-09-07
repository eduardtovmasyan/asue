<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public $table = 'lms_status';
    public $timestamps = false;

    public static function setStatus($data)
    {
        $status = Status::where('id', $data)->first();

        return $status->description;
    }
}
