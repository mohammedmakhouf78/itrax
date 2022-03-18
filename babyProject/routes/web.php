<?php

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
    return view('site.index');
});

Route::view('dashboard','admin.index');

//Route::prefix('admin')->group(function(){
//    Route::resource('faq',\App\Http\Controllers\FaqController::class);
//});


Route::get('/admin/loginPage',[\App\Http\Controllers\AuthController::class,'loginPage'])->name('admin.loginPage');
Route::post('/admin/login',[\App\Http\Controllers\AuthController::class , 'login'])->name('admin.login');


Route::group(['prefix' => 'admin','as' => 'admin.','middleware' => 'auth'],function(){
    Route::post('/logout',[\App\Http\Controllers\AuthController::class , 'logout'])->name('logout');
    Route::resource('faq',\App\Http\Controllers\FaqController::class);
    Route::resource('slider',\App\Http\Controllers\SliderController::class);
});
