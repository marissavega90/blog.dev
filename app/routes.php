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
	return 'Hello Codeup';
	// return View::make('hello');
});

Route::get('parks', function() {
	return View::make('parks');
});

Route::post('parks.html', function() {
	return 'Which will you see???????';
});

Route::get('say-hello/{name}', function($name) {
		return View::make('sayhello');
	
	
});

Route::get('say-hello/{name}/{age}', function($name, $age) {
	return "Hello $name! I hear you're $age years old.";
});

Route::get('resume', function() {
	return "My resume";
});

Route::get('portfolio', function() {
	return "My portfolio";
});

// NOTES:

Route::get('say-hello/{urlName}', function($argName) {
	return View::make('sayhello')->with('viewName', $argName)->with('age', 0);
});


Route::get('say-hello/{urlName}', function($argName) {
	$data = array(
		'viewName' => $argName,
		'age'      => 0
	);

	// All three Views below are the same!

	return View::make('sayhello', $data);
	return View::make('sayhello')->with($data);
	return View::make('sayhello')->with('viewName', $argName)->with('age', 0);
});





Route::get('/rolldice/{guess}', function($guess) {

	$randomNumb = rand(1, 6);

	if ($randomNumb == $guess) {
		echo "You guessed correctly! :D";
	} else {
		echo "You guessed wrong. :(";
	}

	return View::make('roll-dice')->with('randomNumb', $randomNumb)->with('guess', $guess);

});



