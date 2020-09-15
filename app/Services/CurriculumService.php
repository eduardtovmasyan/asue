<?php

namespace App\Services;

use App\Curriculum;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\Curriculum as CurriculumResource;
use App\Http\Resources\GraphicLoadMain as GraphicLoadMainResource;

class CurriculumService
{
    public function getCurriculum()
    {
        $speciality = Auth::user()->information->studentCourse->where('status', 1)
        	->first()->krt_cragir;
        $dateEnter = Auth::user()->information->date_enter;
        $curriculum = Curriculum::where('masn_id', $speciality)
        	->where('confirm_date', $dateEnter)
        	->where('status', 1)->first();

        dd(GraphicLoadMainResource::collection($curriculum->graphic));

        return $curriculum->graphic;
    }
}
