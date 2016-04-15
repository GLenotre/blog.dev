<?php

class PostTableSeeder extends Seeder
{
	public function run()
	{
		$post = new Post();
		$post->title = 'Hello World';
		$post->body = 'Lava and rocks';
		$post->user_id = User::first()->id;
		$post->save();

		$post = new Post();
		$post->title = 'Hello USA';
		$post->body = 'Oil and water';
		$post->user_id = User::first()->id;
		$post->save();
	}
}