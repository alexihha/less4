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

//Route::get('/','TaskController@getTasks');
//Route::post('/counter','TaskController@addCounter');


Route::get('/', 'TaskController@index');

Route::get('/queue', 'TaskController@queue');
Route::get('/done', 'TaskController@done');



Route::get('/add', 'TaskController@add');
Route::get('/{id}', 'TaskController@counter');


