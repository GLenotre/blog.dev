<?php

 // Eloquent is an alias for a class that has methods like insert, update, delete
class Post extends Eloquent   
{
	protected $table = 'posts';

	public static $rules = array(
    'title'      => 'required|max:100',
    'body'       => 'required|max:10000'
);

}

