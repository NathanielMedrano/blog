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
		return $posts;
		// Log::info('This is some useful information.');

		// Log::warning('Something could be wrong.');

		// Log::error('Something is really wrong.');

		// return "Show a list of all posts.";		
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

		Log::info('This is some useful information.');

		Log::warning('Something could be going wrong.');

		Log::error('Something is really going wrong.');
		return Redirect::back()->withInput();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find(1);
return $post;

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