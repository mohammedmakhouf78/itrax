<?php

use App\Http\Controllers\Admin\AdminActivityController;
use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\Admin\AdminCourseController;
use App\Http\Controllers\Admin\AdminFaqController;
use App\Http\Controllers\Admin\AdminSliderController;
use App\Http\Controllers\Admin\AdminTeacherController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('admin.index');
});

Route::group(['prefix' => 'admin','as' => 'admin.'],function(){

    Route::resource('slider',AdminSliderController::class);
    Route::resource('activity',AdminActivityController::class);
    Route::resource('faq',AdminFaqController::class);
    Route::resource('contact',AdminContactController::class);
    Route::resource('course',AdminCourseController::class);
    Route::resource('teacher',AdminTeacherController::class);

});
