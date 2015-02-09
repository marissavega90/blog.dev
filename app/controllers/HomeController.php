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

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showResume()
	{
		return View::make('resume');
	}

	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	public function showParks()
	{
		return View::make('parks');
	}

	public function showLogin() {

		return View::make('login');
	}


	public function doLogin() {

		$email    = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password))) {

			Session::flash('successMessage', "Login successful");
    		return Redirect::intended('/');

		} else {

			Session::flash('errorMessage', "Login failed, please re-enter login and password.");
    		return Redirect::action('PostsController@index');
		};
	}

	public function doLogout() {

		Auth::logout();
		Session::flash('successMessage', "Goodbye!");
		return Redirect::action('PostsController@index');
	}

}
