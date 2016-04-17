<?php

class UserController extends BaseController {
	
	public function showLogin
	{
		return View::make('login');	
	}

    public function postLogin()
    {
        $email = Input::get('email');
        $password = Input::get('password');
        if (Auth::attempt(array('email' => $email, 'password' => $password))) {
            return Redirect::intended('/posts');
        } else {
            // login failed, go back to the login screen
            Session::flash('errorMessage', 'Login failed.');
            return Redirect::back();
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return Redirect::action('PostsController@index');
    }

}
