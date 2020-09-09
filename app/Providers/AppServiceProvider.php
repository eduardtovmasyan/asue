<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('user', 'App\Services\LoginService');
        $this->app->bind('academicInfo', 'App\Services\AcademicInfoService');
        $this->app->bind('contact', 'App\Services\ContactService');
        $this->app->bind('schedule', 'App\Services\ScheduleService');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
