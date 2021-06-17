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
Route::get('/about/', 'HomeController@about');
Route::get('/posts/', 'PostController@posts');
Route::get('/show/{post_id}', 'PostController@show')->name('show');
Route::get('/stalker/', 'PostController@stalker');
Route::get('/kanykei/', 'PostController@kanykei');
Route::get('/erkin/', 'PostController@erkin');
Route::get('/school/', 'PostController@school');
Route::get('/ukraine/', 'PostController@ukraine');
Route::get('/geneve/', 'PostController@geneve');
Route::get('/productindex/', 'ProductController@productindex');
Route::get('/productcreate/', 'ProductController@productcreate');
Route::get('/productupdate/', 'ProductController@productupdate');
Route::get('/productdelete/', 'ProductController@productdelete');
Route::get('/faqindex/', 'FaqController@faqindex');
Route::get('/faqcreate/', 'FaqController@faqcreate');
Route::get('/faqupdate/', 'FaqController@faqupdate');
Route::get('/faqdelete/', 'FaqController@faqdelete');
Route::get('/userindex/', 'UserController@userindex');
Route::get('/usercreate/', 'UserController@usercreate');
Route::get('/userupdate/', 'UserController@userupdate');
Route::get('/userdelete/', 'UserController@userdelete');



