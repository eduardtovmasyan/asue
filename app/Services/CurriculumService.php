<?php

namespace App\Services;

use App\Speciality;
use App\Curriculum;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\GraphicLoadMain as GraphicLoadMainResource;

class CurriculumService
{
    public function getCurriculumPageInfo()
    {
        $specialityId = Auth::user()->information->st_group;
        $teachTypeId = Auth::user()->information->studentCourse
            ->where('status', 1)->first()->teaching_type;
        $teachProgramId = Auth::user()->information->studentCourse
            ->where('status', 1)->first()->teach_programm;
        $speciality = Speciality::where('MasnagitutyunID', $specialityId)->first();
        $teachProgram = DB::table('lms_teach_program')
            ->where('id', $teachProgramId)->first();
        $teachType = DB::table('lms_teaching_types')
            ->where('id', $teachTypeId)->first();
        $quality = DB::table('lms_quality_types')
            ->where('id', $speciality->quality_type)->first();
        
        $pageInfo['speciality'] = $speciality->Masnagitutyun;
        $pageInfo['teachProgram'] = $teachProgram->name;
        $pageInfo['teachType'] = $teachType->name;
        $pageInfo['quality'] = $quality->name_arm;

        return $pageInfo;
    }

    public function getCurriculum()
    {
        $speciality = Auth::user()->information->studentCourse->where('status', 1)
            ->first()->krt_cragir;
        $dateEnter = Auth::user()->information->date_enter;
        $curriculum = Curriculum::where('masn_id', $speciality)
            ->where('confirm_date', $dateEnter)
            ->where('status', 1)->first();

        return GraphicLoadMainResource::collection($curriculum->graphic)->groupBy('half_year');
    }
}
