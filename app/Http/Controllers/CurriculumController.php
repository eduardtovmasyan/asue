<?php

namespace App\Http\Controllers;

use Curriculum;
use Illuminate\Http\Request;

class CurriculumController extends Controller
{
    public function showCurriculumPage()
    {
        return view('curriculum');
    }
}
