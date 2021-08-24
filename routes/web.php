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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('news', 'App\Http\Controllers\HomeController@news')->name('news');
Route::get('register', 'App\Http\Controllers\HomeController@register')->name('register');
Route::get('single-news', 'App\Http\Controllers\HomeController@singleNews')->name('single-news');
Route::get('volunteer', 'App\Http\Controllers\HomeController@volunteer')->name('volunteer');
Route::get('volunteer-members', 'App\Http\Controllers\HomeController@volunteerMembers')->name('volunteer-members');
Route::get('volunteer-profile', 'App\Http\Controllers\HomeController@volunteerProfile')->name('volunteer-profile');
