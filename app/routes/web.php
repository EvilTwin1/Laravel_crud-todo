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


Route::get('/', 'ToDoController@index');
Route::post('/store', 'ToDoController@store')->name('todo.store');
Route::post('/update/{id}', 'ToDoController@update')->name('todo.update');
Route::delete('/destroy/{id}', 'ToDoController@destroy')->name('todo.destroy');
