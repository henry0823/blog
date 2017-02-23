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

Route::get('/', 'PagesController@index');
Route::get('/notes', 'NotesController@index');
Route::get('/notes/create', 'NotesController@create');
Route::get('/notes/{notes}', 'NotesController@show');
Route::post('/notes/create/store', 'NotesController@store');
