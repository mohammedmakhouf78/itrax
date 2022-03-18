<?php

namespace App\Providers;

use App\View\Components\Form\InputFile;
use App\View\Components\Form\InputSelect;
use App\View\Components\Form\InputText;
use App\View\Components\Form\InputTextArea;
use Illuminate\Support\Facades\Blade;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component(InputText::class,'input-text');
        Blade::component(InputTextArea::class,'input-text-area');
        Blade::component(InputFile::class,'input-file');
        Blade::component(InputSelect::class,'input-select');
    }
}
