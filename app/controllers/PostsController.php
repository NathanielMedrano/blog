<?php

class PostsController extends \BaseController {

	public function __construct()
	{
		//Include parent constructor
		parent::__construct();

		//Run an auth filter before all methods except index and show
		$this->beforeFilter('auth', ['except' => ['index', 'show']]);

	}

	/**
	 * Display a listing of the resource.
	 *
	 *  Response
	 */
	public function index()

	{	//$posts = Post::with('user')->paginate(4);
		$search = Input::get('search');
		$query = Post::orderBy('created_at', 'desc')->with('user');
		if (is_null($search)) 
		{
	
		$posts = $query->paginate(5);
		//return View::make('posts.index')->with(array('posts' => $posts));
		}	else {
		$posts = $query->where('title', 'LIKE', "{$search}")
					   ->orWhere('body', 'LIKE', "{$search}")
					   ->paginate(5);
		$post = Post::find(1);
		
		}
		return View::make('posts.index')->with(array('posts' => $posts));
	
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');


	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

			// create the validator
	    $validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails())
	    {	
	    	Session::flash('errorMessage', 'Post was NOT created successfully');
	         return Redirect::back()->withInput()->withErrors($validator);
	    }
	    else
	    {
	        // validation succeeded, create and save the post

		//Save to DB
		$post1 = new Post();
		$post1->title = Input::get('title');
		$post1->body = Input::get('body');
		$post1->user_id = Auth::user()->id;
		$post1->save();
		//Session::flash('successMessage', 'Post created successfully');
		return Redirect::action('PostsController@index');
	    
	    }
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::findOrFail($id);
		return View::make('posts.show')->with(array('post' => $post));
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{	
		$post = Post::findOrFail($id);
		return View::make('posts.edit')->with('post', $post);

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{	
		$post = Post::findOrFail($id);
			// create the validator
	    $validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails())
	    {
	    	Session::flash('errorMessage', 'Post was NOT updated successfully');
	        return Redirect::back()->withInput()->withErrors($validator);
	    }
	    else
	    {
	        // validation succeeded, create and save the post

		//Save to DB
		$post->title = Input::get('title');
		$post->body = Input::get('body');
		$post->save();

		return Redirect::action('PostsController@index');
	    
	    }
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post=Post::findOrFail($id);
		$post->delete();
		return Redirect::action('PostsController@index');
	}
}

