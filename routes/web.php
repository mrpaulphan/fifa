<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'PagesController@getIndex');
Route::get('team', 'PagesController@getTeam');

Route::get('team', 'TeamController@show')->name('list.player');
Route::get('team/create', 'TeamController@getIndex')->name('create.player');
Route::post('team/create', 'TeamController@store')->name('post.player');
Route::get('transfers', 'PagesController@getTransfers');

Auth::routes();

Route::get('/home', 'HomeController@index');
