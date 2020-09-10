<?php

namespace App\Http\Controllers;

use Notification;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Notification::get();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $notification_id
     * @return \Illuminate\Http\Response
     */
    public function show($notification_id)
    {
        return Notification::show($notification_id);
    }
}
