<?php

namespace App\Services;

use App\Status;
use Illuminate\Support\Facades\Auth;

class AcademicInfoService
{
    public function get()
    {
        $information = Auth::user()->information->studentCourse()
                    ->select('academic_year', 'course', 'himq', 'hraman', 'status')
                    ->get()->toArray();

        foreach ($information as &$key) {
            $description = Status::setStatus($key['status']);
            $key['statusName'] = $description;
        }

        return $information;
    }
}
