<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	public function index()
	{
		return View::make('landing');	
	}

	public function showWhackamole()
	{
		return View::make('whackamole');
	}

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	public function showResume()
	{
		return View::make('resume');
	}

	// public function rolldice($dice = 'Let\'s roll!')
	// {
	// 	$random = mt_rand(1, 6);
	// 	$data = [
	// 			'dice' => $dice,
	// 			 'random' => $random
	// 			];
		
	// 	return View::make('roll-dice')->with($data);
	// }
}