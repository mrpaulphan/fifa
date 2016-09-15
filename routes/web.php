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

Route::get('/transfers', 'PagesController@getTransfers');
Route::get('/styleguide', 'PagesController@getStyleGuide')->name('show.styleguide');

Route::get('/', 'PagesController@getIndex');
Auth::routes();
Route::get('/saves', 'PagesController@getSaves')->name('show.saves');
Route::get('/season', 'TeamController@getSeasons')->name('show.seasons');
Route::post('/season/create', 'TeamController@store')->name('post.team');
Route::get('/season/create', 'TeamController@create')->name('create.team');
Route::put('/season', 'TeamController@edit')->name('edit.team');

Route::get('/team', 'PagesController@getPlayers')->name('show.players');
Route::get('/transfer', 'PagesController@getTransfers')->name('show.transfers');
Route::get('/youth', 'PagesController@getYouth')->name('show.youth');
Route::get('/career', 'PagesController@getCareers')->name('show.careers');
Route::get('/teamselect', 'PagesController@getTeamSelect')->name('show.teamselect');
