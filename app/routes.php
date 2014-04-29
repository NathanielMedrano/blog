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

/* Uncomment to Log Eloquent Queries */
// Event::listen('illuminate.query', function($sql, $bindings, $time){
//   Log::info($sql);
//   Log::info(implode($bindings, ', '));
// });

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/create', 'HomeController@showNewBlog');

Route::get('/resume', 'HomeController@showResume');

Route::get('/home', 'HomeController@showHome');

Route::get('/', 'HomeController@showHome');

Route::get('/blog', 'HomeController@showBlog');

Route::resource('posts', 'PostsController');

Route::get('/login', 'HomeController@showLogin');

Route::post('/login', 'HomeController@doLogin');

Route::get('/logout', 'HomeController@logout');


Route::get('orm-test', function () {
 	$post = Post::find(1);
	$post->delete();

});



