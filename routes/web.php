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

Route::get('/', 'HomeController@index');
Route::get('/posts/', 'PostController@posts');
Route::get('/create/', 'PostController@create');
Route::get('/update/', 'PostController@update');
Route::get('/delete/', 'PostController@delete');
