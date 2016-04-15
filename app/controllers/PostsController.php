<?php

class PostsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		    $posts = Post::paginate(5);
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

	   Log::info('This is some useful information.');
       $post = new Post();
       return $this->validateAndSave($post);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = $this->postNotFound($id);
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
		$post = $this->postNotFound($id);

		$post = Post::find($id);
		// dd($post);
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
		$post = $this->postNotFound($id);
		$post = Post::find($id);
 		return $this->validateAndSave($post);
 	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = $this->postNotFound($id);
		$post = Post::find($id);

		if(!$post) {
			Session::flash('errorMessage', "Page was not found");
			return Redirect::action('PostsController@index');		
		}
		
		$post->delete();
		Session::flash('successMessage', "The post was successfully deleted"); 
		return Redirect::action('PostsController@index');
	}

	public function validateAndSave($post)
	{
		$validator = Validator::make(Input::all(), Post::$rules);
		// attempt validation
	
	    if ($validator->fails()) {
	    	return Redirect::back()->withInput()->withErrors($validator);
	        // validation failed, redirect to the post create page with validation errors and old inputs
	    }
	        // validation succeeded, create and save the post
       
		$post->title = Input::get('title');
		$post->body = Input::get('body');
		// $post-user_id = Auth::id();
		$post->user_id = User::first()->id;
		$post->save(); // Post model extends methods from Eloquent, which has save() implementation
		// return an entry from the db of that page with the id
		
		Session::flash('successMessage', "Post was successfully saved");	
		return Redirect::action('PostsController@index');
	}
	
	public function postNotFound ($post) 
		{
			$post = Post::find($id);
			if (is_null($post)) 
			{
				App:abort(404);
			}
			return $post;
		}
}
