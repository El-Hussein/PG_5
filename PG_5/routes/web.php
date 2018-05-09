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
    return view('Home');
});

Route::get('/admi', function () {
    return view('admin.index');
});

Route::get('/AddPlayGround', function () {
    return view('admin.addNewPlayGround');
});

Route::post('/addNewPG', 'AdminController@AddNewPG');
Route::get('/home','HomeController@footer');
Route::get('/getPG','HomeController@getPG');
Route::get('/pgs','HomeController@pgs');
Route::post('/play_ground','HomeController@play_ground');
Route::post('/book_play_ground','HomeController@book_play_ground');
// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();



