<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 *  Response
	 */
	public function index()

	{
		$posts = Post::all();
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
	         return Redirect::back()->withInput()->withErrors($validator);
	    }
	    else
	    {
	        // validation succeeded, create and save the post

		//Save to DB
		$post1 = new Post();
		$post1->title = Input::get('title');
		$post1->body = Input::get('body');
		$post1->save();

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
		$post = Post::find($id);
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
		return "Edit a form";
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return "Update a form.";
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return "Deletes a post.";
	}

}