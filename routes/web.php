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


Route::resource('images','ImageController');
Route::resource('game','Gamecontroller');

<<<<<<< HEAD
=======
Route::get('/', function () {
    return view('pages.home');
});
>>>>>>> fffcbe7e6bc8f81ecd5cf27902f022e2fd23dedd
