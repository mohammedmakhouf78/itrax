<?php

use App\Http\Controllers\Admin\AdminActivityController;
use App\Http\Controllers\Admin\AdminFaqController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin','as' => 'admin.'],function(){

    Route::resource('slider',AdminSliderController::class);
    Route::resource('activity',AdminActivityController::class);
    Route::resource('faq',AdminFaqController::class);
    Route::resource('contact',AdminContactController::class);
    Route::resource('course',AdminCourseController::class);
    Route::resource('teacher',AdminTeacherController::class);

});
