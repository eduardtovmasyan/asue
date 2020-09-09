<?php

namespace App\Http\Controllers;

use AcademicInfo;

class AcademicInfoController extends Controller
{
    public function showAcademicInfoPage()
    {
        $information = AcademicInfo::get();

        return view('academicInfo')->with('information', $information);
    }
}
