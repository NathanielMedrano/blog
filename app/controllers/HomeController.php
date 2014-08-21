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

	public function showResume()
	{
		return View::make('resume');
	}

	public function showWhack()
	{
		return View::make('whack');
	}


	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	public function showPayment()
	{
		require_once("stripe-php/lib/Stripe.php");
		// Set your secret key: remember to change this to your live secret key in production
		// See your keys here https://dashboard.stripe.com/account
		Stripe::setApiKey("sk_live_iT2v6RcBsdcybroe5iAaKLs8");

		// Get the credit card details submitted by the form
		$token = $_POST['stripeToken'];

		// Create the charge on Stripe's servers - this will charge the user's card
		try {
		$charge = Stripe_Charge::create(array(
		  "amount" => 1000, // amount in cents, again
		  "currency" => "usd",
		  "card" => $token,
		  "description" => "gonatstech@gmail.com")
		);
		} catch(Stripe_CardError $e) {
		  // The card has been declined
		}
		return View::make('payment');
	}


	public function showHome()
	{
		$post = Post::PostHome();
		return View::make('home')->with(array('post' => $post));
	}



	public function showBlog()
	{
		return Redirect::action('posts.index');
	}

	public function showNewBlog()
	{
		return Redirect::action('posts.create');
	}

		public function showLogin()
	{
		return View::make('login');
	}

	public function doLogin()
	{	
		//$pw = Hash::make(Input::get('password'));
		if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))))
		{
		    return Redirect::intended('/posts');
		}
		else
		{
		    // login failed, go back to the login screen
		    return Redirect::back()->withInput();
		}
	}

		public function logout()
	{
		Auth::logout();
		return Redirect::action('PostsController@index');
	}

}