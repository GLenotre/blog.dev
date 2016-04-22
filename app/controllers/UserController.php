<?php

class UserController extends BaseController {
	
	public function showLogin()
	{
		return View::make('users.login');	
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

    public function userNotFound ($id) 
        {
            $user = User::find($id);
            if (is_null($user)) 
            {
                App::abort(404);
            }
            return $user;
        }

    public function show($id)
    {
        $user = $this->userNotFound($id);

        // return an entry from the db of that page with the id
        return View::make('users.user')->with('user', $user); 
    }


}
