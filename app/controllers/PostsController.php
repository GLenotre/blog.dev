<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		    $posts = Post::paginate(2);
		    return View::make('posts.index')->with(array('posts' => $posts));

		// return View::make('posts.index', [
		// 	'posts' => Post::paginate(4)		
		// 	]);
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
	    $validator = Validator::make(Input::all(), Post::$rules);
			// attempt validation
		    if ($validator->fails()) {
		    	return Redirect::back()->withInput()->withErrors($validator);

		        // validation failed, redirect to the post create page with validation errors and old inputs
		    } else {
		        // validation succeeded, create and save the post
		       $post = new Post();

				$post->title = Input::get('title');
				$post->body = Input::get('body');
				$post->save(); // Post model extends methods from Eloquent, which has save() implementation
				// return an entry from the db of that page with the id
			
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

		// return an entry from the db of that page with the id
		return View::make('posts.show')->with('post', $post); 
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
		return View::make('posts.edit')->with(['post' => $post]);

	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// create Validator

		//attempt Validator


		$post = Post::find(1);
		$post->title = Input::get('title');
		$post->body = Input::get('body');
		$post->save();
		return $post;
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return 'destroy id';
	}


}
