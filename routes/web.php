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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about/', 'HomeController@about');

Route::group(['prefix' => '/posts'], function () {
    Route::get('/', 'PostController@posts')->name('posts');
    Route::get('/show/{post_id}', 'PostController@show')->name('show');
    Route::get('/create/', 'PostController@create')->name('create');
    Route::post('/store/', 'PostController@store')->name('post.store');
    Route::get('/update/{post_id}', 'PostController@update')->name('update');
    Route::post('/update/{post_id}', 'PostController@restore')->name('restore');
    Route::get('/delete/{post_id}', 'PostController@delete')->name('delete');
});

Route::get('/login/', 'RegisterController@login')->name('login');
Route::post('/login/loginin/', 'RegisterController@loginin')->name('post.loginin');
Route::get('/register/', 'RegisterController@register')->name('register');
Route::post('/', 'RegisterController@registration')->name('post.registration');


Route::group(['prefix' => '/category'], function () {
    Route::get('/', 'CategoryController@categories');
    Route::get('/create/', 'CategoryController@create')->name('createCat');
    Route::post('/store/', 'CategoryController@store')->name('cat.store');
    Route::get('/update/{post_id}', 'CategoryController@update')->name('updateCat');
    Route::post('/update/{post_id}', 'CategoryController@restore')->name('restore');
    Route::get('/delete/{post_id}', 'CategoryController@delete')->name('delete');
});





