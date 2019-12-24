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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/game', 'GameController@index')->name('game');

Route::get('/about', 'AboutController@index')->name('about');

Route::get('/profile/{username}', 'UserController@index')->name('profile.index');

Route::get('/edit_profile/{username}', 'UserController@edit')->name('edit_profile.edit');

Route::post('update_profile', 'UserController@update_profile');
