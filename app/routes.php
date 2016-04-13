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

Route::get('/', 'HomeController@showWelcome');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/resume', 'HomeController@showResume');

Route::resource('posts', 'PostsController'); // CRUD

Route::get('/whackamole', 'HomeController@showWhackamole');

Route::get('/sayhello',function()
{
		return "Howdy, Codeup";
});

Route::get('/sayhello/{name}',function($name)
{
		if($name == 'George') {
			return Redirect::to('/');
		} else {
			return "Hello, $name!";
		}
});

Route::get('/resume',function()
{
		return View::make('resume');
});

Route::get('/portfolio',function()
{
		return View::make('portfolio');
});

Route::get('/sayhello/{name?}', function($name = 'Codeup')
{
    $data = ['name' => $name];   // the key and value should be the same, echo the key $name
    return View::make('my-first-view')->with($data);
});

Route::get('roll-dice/{dice?}', 'HomeController@rolldice');