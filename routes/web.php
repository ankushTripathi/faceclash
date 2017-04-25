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
Route::model('images','APP\Image');

Route::get('/','HomeController@index');
Route::get('/stats','ImageController@stats');

Route::resource('images','ImageController');
Route::resource('game','GameController');
