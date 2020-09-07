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

    public function schedule()
    {
        // $schedule = 
    }
}
