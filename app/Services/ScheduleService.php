<?php

namespace App\Services;

use App\Schedule;

class ScheduleService
{
    protected $scheduleModel;

    function __construct(Schedule $scheduleModel)
    {
        $this->scheduleModel = $scheduleModel;
    }
}
