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

Route::get('/', 'PagesController@getIndex')->name('show.landing');
Route::get('/register/confirm/{token}', 'RegisterConfirmation@confirmAccount')->name('confirm.email');
Route::get('/register/confirm', 'RegisterConfirmation@checkEmailToConfirm')->name('check.email');
Route::post('/register/confirm', 'RegisterConfirmation@activeAccount')->name('confirm.token');


Route::get('auth', 'FacebookController@redirectToProvider');
Route::get('auth/callback', 'FacebookController@handleProviderCallback');
Auth::routes();

// Saves
Route::get('{CurrentUsername}/saves', 'SavesController@index')->name('get.saves');
Route::post('{CurrentUsername}/saves/create', 'SavesController@store')->name('post.saves');
Route::put('{CurrentUsername}/saves/edit', 'SavesController@edit')->name('update.saves');
Route::delete('{CurrentUsername}/saves/delete', 'SavesController@delete')->name('delete.saves');

// Season
Route::get('{CurrentUsername}/{SaveSlug}/season', 'PagesController@getSeasons')->name('show.seasons');
Route::post('{CurrentUsername}/{SaveSlug}/season/create', 'SeasonController@store')->name('store.team');
Route::put('{CurrentUsername}/{SaveSlug}/season/update', 'SeasonController@update')->name('update.seasons');


// Squad
Route::get('{CurrentUsername}/{SaveSlug}/season/squad', 'SquadController@index')->name('get.squad');


// Competition
Route::put('{CurrentUsername}/{SaveSlug}/competition/update', 'CompetitionController@store')->name('store.competition');

// Players
Route::post('{CurrentUsername}/{SaveSlug}/player/create', 'PlayerController@store')->name('store.players');


Route::get('/styleguide', 'PagesController@getStyleGuide')->name('show.styleguide');
