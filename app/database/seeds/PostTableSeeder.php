<?php

class PostTableSeeder extends Seeder
{
	public function run()
	{
		$post = new Post();
		$post->title = 'Why I want to code';
		$post->body = 'Everybody\'s doing it. Really. That\'s the reason. Well, most of my close childhood friends now code. They thought outside the normal groupthink. They tried to think for themselves. They were both reflective and social.' . PHP_EOL . 
		'So why coding? There is a beauty and self-sustaining part of code. It lives and breathes on logic and arguments, parts and wholes, intelligibility and purpose, all in order to enrich people\'s lives. It\'s both reflective and social. That\'s why I want to code.';
		$post->user_id = User::first()->id;
		$post->save();

		$post = new Post();
		$post->title = 'Hello USA';
		$post->body = 'Oil and water';
		$post->user_id = User::first()->id;
		$post->save();
	}
}