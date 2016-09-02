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



Route::get('/team/create', 'PlayerController@getIndex')->name('create.player');
Route::post('/team/create', 'PlayerController@store')->name('post.player');
Route::post('/team/delete', 'PlayerController@destroy')->name('delete.player');

Route::get('transfers', 'PagesController@getTransfers');

Route::get('/', 'PagesController@getIndex');
Auth::routes();
Route::get('/home', 'PagesController@getSeasons')->name('show.seasons');
Route::post('/home/create', 'TeamController@store')->name('post.team');


Route::get('/team', 'PagesController@getPlayers')->name('show.players');
Route::get('/transfer', 'PagesController@getTransfers')->name('show.transfers');
Route::get('/youth', 'PagesController@getYouth')->name('show.youth');
Route::get('/career', 'PagesController@getCareers')->name('show.careers');
