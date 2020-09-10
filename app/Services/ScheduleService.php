<?php

namespace App\Services;

use App\Schedule;
use Illuminate\Support\Facades\Auth;

class ScheduleService
{
    protected $scheduleModel;

    function __construct(Schedule $scheduleModel)
    {
        $this->scheduleModel = $scheduleModel;
    }

    public function get()
    {
        $studentCourse = Auth::user()->information->studentCourse
        	->where('status', 1)->first();
        $currentYear = date('Y');
        $mounth = date('m');
        $semestr;
        
        if ($mounth >= '09' && $mounth <= '12') {
            $semestr = 1;
        } else if ($mounth >= '02' && $mounth <= '08') {
            $semestr = 2;
        }

        $schedule = $this->scheduleModel::where('teach_year', $currentYear)
            ->join('lms_subjects', 'ararka', '=', 'lms_subjects.id')
            ->where('specialty', $studentCourse->krt_cragir)
            ->where('course', $studentCourse->course)
            ->where('xumb', $studentCourse->group)
            ->where('semestr', $semestr)
            ->select('week_day', 'ararka', 'room', 'teach_time', 'sbjname')
            ->get()
            ->groupBy('teach_time');

        return $schedule;
    }
}
