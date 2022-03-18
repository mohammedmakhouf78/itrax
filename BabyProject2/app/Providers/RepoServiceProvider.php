<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            "App\Http\Interfaces\Admin\AdminActivityInterface",
            "App\Http\Repositories\Admin\AdminActivityRepo"
        );

        $this->app->bind(
            "App\Http\Interfaces\Admin\AdminContactInterface",
            "App\Http\Repositories\Admin\AdminContactRepo"
        );

        $this->app->bind(
            "App\Http\Interfaces\Admin\AdminCourseInterface",
            "App\Http\Repositories\Admin\AdminCourseRepo"
        );

        $this->app->bind(
            "App\Http\Interfaces\Admin\AdminFaqInterface",
            "App\Http\Repositories\Admin\AdminFaqRepo"
        );

        $this->app->bind(
            "App\Http\Interfaces\Admin\AdminSliderInterface",
            "App\Http\Repositories\Admin\AdminSliderRepo"
        );

        $this->app->bind(
            "App\Http\Interfaces\Admin\AdminTeacherInterface",
            "App\Http\Repositories\Admin\AdminTeacherRepo"
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
