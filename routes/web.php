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
/*
Route::get('/', function() {
  return view('welcome');
});
*/
Route::get('/', 'RoomsController@index');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/rooms/{room}', 'RoomsController@room')->where('room', '[0-9]+');
Route::get('/room/create', 'RoomsController@create');
Route::post('/rooms', 'RoomsController@store');
Route::delete('/rooms/{room}', 'RoomsController@destroy');

Route::post('/rooms/{room}/comments', 'CommentsController@store');
