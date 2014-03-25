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