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

Route::group(['prefix' => '/auth'], function () {
    Route::get('/registration', 'Auth\RegisterController@getRegister')->name('auth.get.register');
    Route::post('/registration', 'Auth\RegisterController@postRegister')->name('auth.post.register');
    Route::get('/login', 'Auth\LoginController@getLogin')->name('auth.get.login');
    Route::post('/login', 'Auth\LoginController@postLogin')->name('auth.post.login');
});

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
    Route::get('/', 'CatController@categories');
    Route::get('/create/', 'CatController@create')->name('createCat');
    Route::post('/store/', 'CatController@store')->name('cat.store');
    Route::get('/update/{post_id}', 'CatController@update')->name('updateCat');
    Route::post('/update/{post_id}', 'CatController@restore')->name('restoreCat');
    Route::get('/delete/{post_id}', 'CatController@delete')->name('deleteCat');
});


Route::group(['prefix' => '/comments'], function () {
    Route::get('/', 'CommentController@store')->name('comments.create');
    Route::get('/delete/{comment_id}/{post_id}', 'CommentController@delete')->name('comments.delete');
});


Route::group(['prefix' => '/faq'], function () {
    Route::get('/', 'FaqController@faqindex')->name('faq');
    Route::get('/create/', 'FaqController@faqcreate')->name('createFaq');
    Route::post('/store/', 'FaqController@store')->name('faq.store');
    Route::get('/update/{post_id}', 'FaqController@update')->name('updateFaq');
    Route::post('/update/{post_id}', 'FaqController@restore')->name('restoreFaq');
    Route::get('/delete/{post_id}', 'FaqController@delete')->name('deleteFaq');
});


Route::group(['prefix' => '/users'], function () {
    Route::get('/', 'UserController@index')->name('userindex');
});


