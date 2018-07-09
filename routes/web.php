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
    return view('dashboard');
});


Route::get('current_todo', 'TodoController@index');
Route::get('archived_todo', 'TodoController@archived');
Route::post('create_todo', 'TodoController@store');
Route::post('delete_todo/{id}', 'TodoController@destroy');
Route::post('archive_todo/{id}', 'TodoController@archive');
Route::post('edit_todo', 'TodoController@edit');
