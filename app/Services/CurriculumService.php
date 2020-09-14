<?php

namespace App\Services;

use App\Curriculum;
use Illuminate\Support\Facades\Auth;

class CurriculumService
{
    public function getCurriculum()
    {
        $speciality = Auth::user()->information->studentCourse->where('status', 1)->first()->krt_cragir;
        $dateEnter = Auth::user()->information->date_enter;
        $curriculum = Curriculum::where('masn_id', $speciality)->where('confirm_date', $dateEnter)->get();
dd($curriculum);
        return $curriculum->graphic->get();
    }
}
