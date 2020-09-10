<?php

namespace App\Services;

use App\Notification;
use Illuminate\Support\Facades\Auth;

class NotificationService
{
    public function get()
    {
        return Notification::where('to_uname', Auth::user()->information->stud_id)
            ->join('dec_ashxatakic', 'from', '=', 'dec_ashxatakic.user_id')
            ->where('lms_notification.status', 0)
            ->select('lms_notification.id', 'heading', 'name', 'lname')
            ->get();
    }

    public function show($notification_id)
    {
        $notification = Notification::where('to_uname', Auth::user()->information->stud_id)
            ->join('dec_ashxatakic', 'from', '=', 'dec_ashxatakic.user_id')
            ->where('lms_notification.id', $notification_id)
            ->select('lms_notification.id', 'heading', 'text', 'name', 'lname')
            ->first();

        return $notification;
    }
}
