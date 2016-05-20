<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function()
// {
// 	return View::make('hello');
// });

// Route::resource('posts', 'PostsController');

Route::get('/login', 'UserController@showLogin');
Route::post('/login', 'UserController@postLogin');
Route::get('/logout', 'UserController@getLogout');
Route::get('/', 'UserController@show');

Route::get('/', 'HomeController@index');
Route::get('/blog', 'PostsController@index');
Route::get('/portfolio', 'HomeController@showPortfolio');
Route::get('/resume', 'HomeController@showResume');

Route::resource('/posts', 'PostsController'); // CRUD
Route::resource('/posts/edit', 'PostsController');

// Route::get('/whackamole', 'HomeController@showWhackamole');

Route::get('/query', 'PostsController@search');

