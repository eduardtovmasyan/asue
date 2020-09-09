<?php

namespace App\Http\Controllers;

use Schedule;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $schedule = Schedule::get();

        return view('home')->with('days', parent::WEEK_DAYS)
                ->with('schedule', $schedule);
    }
}
