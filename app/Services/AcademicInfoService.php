<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;

class AcademicInfoService
{
    public function get()
    {
        $information = Auth::user()->information->studentCourse()
                    ->select('academic_year', 'course', 'himq', 'hraman', 'status')
                    ->get()->toArray();

        return $information;
    }
}