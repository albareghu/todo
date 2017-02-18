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
    return view('welcome');
});
Route::get('/todo', 'toController@todo');
Route::post('/multi', 'toController@save');
Route::get('/view', 'toController@view');
Route::get('/delete/{id}','toController@delete');
Route::get('/edit/{id}','toController@edit');
Route::get('/update/{id}','toController@update');