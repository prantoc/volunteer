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

Route::get('events', 'App\Http\Controllers\HomeController@news')->name('news');

Route::get('volunteer-story', 'App\Http\Controllers\HomeController@volunteerStory')->name('volunteer-story');

Route::get('single-news/{slug}', 'App\Http\Controllers\HomeController@singleNews')->name('single-news');

Route::get('volunteer', 'App\Http\Controllers\HomeController@volunteer')->name('volunteer');

Route::get('volunteer-members/{slug}', 'App\Http\Controllers\HomeController@volunteerMembers')->name('volunteer-members');

Route::get('volunteer-profile/{slug}', 'App\Http\Controllers\HomeController@volunteerProfile')->name('volunteer-profile');

Route::get('register', 'App\Http\Controllers\HomeController@register')->name('register');

Route::get('/search/', 'App\Http\Controllers\HomeController@search')->name('search');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
