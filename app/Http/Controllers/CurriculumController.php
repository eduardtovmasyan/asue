<?php

namespace App\Http\Controllers;

use Curriculum;

class CurriculumController extends Controller
{
    public function showCurriculumPage()
    {
        $pageInfo = Curriculum::getCurriculumPageInfo();

        return view('curriculum')->with('pageInfo', $pageInfo);
    }

    public function getCurriculum()
    {
        return Curriculum::getCurriculum();
    }
}
 