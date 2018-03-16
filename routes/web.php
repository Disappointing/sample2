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

Route::get('/users/{user}/followings', 'Users@followings')->name('users.followings');
Route::get('/users/{user}/followers', 'Users@followers')->name('users.followers');

Route::post('/users/followers/{user}', 'FollowersController@store')->name('followers.store');
Route::delete('/users/followers/{user}', 'FollowersController@destroy')->name('followers.destroy');

Route::get('/wg','Wg@show')->name('wg');