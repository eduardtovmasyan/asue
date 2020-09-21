<?php

namespace App\Http\Controllers;

use Schedule;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return Schedule::get();
    }
}
