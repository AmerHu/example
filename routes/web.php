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


Route::get('/', 'PostsController@index')->name('home');

Route::get('/forms', 'FormsController@index');
Route::get('/forms/create', 'FormsController@create');
Route::get('/forms/{id}', 'FormsController@show');
Route::get('/forms/{id}/edit', 'FormsController@showEdit');
Route::get('/forms/print/{id}', 'FormsController@printForm');
Route::post('/forms/{id}/edit', 'FormsController@edit');

Route::get('/forms/destroy/{id}', 'FormsController@destroy');

Route::post('/forms', 'FormsController@store');

Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');

Route::get('/posts/{id}/edit', 'PostsController@showEdit');
Route::post('/posts/{id}/edit', 'PostsController@edit');

Route::get('/posts/delete/{id}', 'PostsController@delete');
Route::get('/posts/tags/{tag}', 'TagsController@index');

Route::post('/posts/{id}/comments', 'CommentsController@store');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionController@create');
Route::post('/login', 'SessionController@store');

Route::get('/logout', 'SessionController@destroy');


Route::get('/tasks', 'TaskController@index');
Route::get('/tasks/{task}', 'TaskController@show');