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

Route::get('/', function()
{
	return View::make('hello');
});


Route::get('resume', 'HomeController@showResume');

Route::get('portfolio', 'HomeController@showPortfolio');

Route::resource('posts', 'PostsController');

Route::get('/rolldice/{guess}', function($guess) {

	$randomNumb = rand(1, 6);

	if ($randomNumb == $guess) {
		echo "You guessed correctly! :D";
	} else {
		echo "You guessed wrong. :(";
	}

	return View::make('roll-dice')->with('randomNumb', $randomNumb)->with('guess', $guess);

});

Route::get('/whackamole', function() 
{
	return View::make('whackamole');
});

Route::resource('posts', 'PostsController');

Route::get('orm-test', function() {

	$post1 = new Post();
	$post1->title = 'Eloquent is awesome!';
	$post1->body  = 'It is super easy to create a new post.';
	$post1->save();

	$post2 = new Post();
	$post2->title = 'Post number two';
	$post2->body  = 'The body for post number two.';
	$post2->save();

});




