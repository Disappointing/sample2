<?php

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

Route::get('/','StaticPages@home')->name('home');
Route::get('help','StaticPages@help')->name('help');
Route::get('about','StaticPages@about')->name('about');

Route::get('signup','Users@create')->name('signup');
Route::resource('users','Users');

Route::get('login', 'Sessions@create')->name('login');
Route::post('login', 'Sessions@store')->name('login');
Route::delete('logout', 'Sessions@destroy')->name('logout');

Route::resource('statuses','Statuses',['only'=>['store','destroy']]);