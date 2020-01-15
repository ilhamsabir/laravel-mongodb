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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','StudentController@index');
Route::get('add','StudentController@add');
Route::post('add','StudentController@store');
Route::get('edit/{id}','StudentController@edit');
Route::post('edit/{id}','StudentController@update');
Route::delete('{id}','StudentController@delete');
