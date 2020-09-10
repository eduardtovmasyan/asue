<?php

namespace App\Services;

use App\Notification;
use Illuminate\Support\Facades\Auth;

class NotificationService
{
    public function get()
    {
        return Notification::where('to_uname', Auth::user()->information->stud_id)
        	->where('status', 0)->get();
    }
}
