<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentApplication extends Model
{
    public $table = 'lms_student_applications';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description', 'document_type_id', 'stud_id', 'status',
    ];
}
