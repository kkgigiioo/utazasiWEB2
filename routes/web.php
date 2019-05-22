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

Route::get('/', 'travelAgencyController@index');
Route::get('/travels/{id}', 'travelAgencyController@show');

Route::get('/new', 'travelAgencyController@showNewTravel');
Route::post('/new', 'travelAgencyController@store');

Route::post('/travelSave/{id}', 'travelAgencyController@saveTravel');
Route::post('/travelResign/{id}', 'travelAgencyController@resignTravel');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
