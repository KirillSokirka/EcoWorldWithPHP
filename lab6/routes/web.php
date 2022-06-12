<?php

use App\Http\Controllers\UserAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnouncementController;
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

Route::group(['namespace' => 'App\Http\Controllers'], function() {

    Route::group(['middleware' => ['guest']], function () {

        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');


        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

        Route::get('/announcements', [AnnouncementController::class, 'index']);
        Route::get('/announcements/{id}', [AnnouncementController::class, 'show']);

    });
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/home/mobile', function () {
    return view('mobile-menu');
});