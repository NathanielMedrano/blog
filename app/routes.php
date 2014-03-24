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

Route::get('/resume', function()
{
	return View::make('resume');
});

Route::get('/portfolio', function()
{
	return View::make('portfolio');
});

Route::get('/home', function()
{
	return View::make('home');
});

Route::get('/blog', function()
{
	return View::make('blog');
});

Route::get('/sayhello/{name}', function($name)
{
    if ($name == "Chris")
    {
        return Redirect::to('/');
    }
    else
    {
        return "Hello, $name?";
    }
});

Route::get('/sayhello/{site}', function($site)
{
    if ($name == "site")
    {
        return "This is my resume";
    }
    else if ($name == "portfolio")
    {
        return "Hello, $name";
    }
});

Route::get('/sayhello/{name}', function($name)
{
	$data = array(
			'name' => $name
		);
    //return View::make('first_view')->with('name', $name);
     return View::make('first_view')->with($data);
});


Route::get('/rolldice/{guess?}', function($guess = null)
{

    $ran_num = rand(1, 6);
	$data = array('ran_num'=>$ran_num, 'guess'=>$guess);

    return View::make('rolldice')->with($data);

});

// Route::get('/rolldice', function()
// {
// 	$ran_num = rand(1, 6);

//     return View::make('rolldice')->with('ran_num', $ran_num);
// });



