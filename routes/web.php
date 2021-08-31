<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'admin\UserController@login');
Route::get('/login', 'admin\UserController@login')->name('login');
Route::post('/login', 'admin\UserController@log_in')->name('logedin');

// Route::post('/log_in', function () {
//     echo 1;
//     return;
// });
Route::get('/forgot', 'admin\UserController@forgot')->name('forgot');
Route::get('dashboard', 'admin\DashboardController@index')->name('dashboard');

// Route::group(['prefix' => 'admin', 'middleware' => 'adminauth'], function () {
//     Route::get('dashboard', 'UserController@dashboard')->name('dashboard');
// });
