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



Route::get('task', 'TaskController@gettask')->name('task');
Route::post('task', 'TaskController@posttask')->name('create_task');
Route::get('task/edit/{id}', 'TaskController@getEdittask')->name('view_edittask');
Route::put('task/edit/{id}', 'TaskController@postEdittask')->name('update_task');
Route::delete('task/delete/{id}', 'TaskController@Deletetask')->name('detete_task');
