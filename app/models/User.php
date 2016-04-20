<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends BaseModel implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	const ADMIN = 1;
	const STANDARD = 2;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function posts()  // must be plural if the term is many. in this case, it's one (user) to many (post)
	{
		//this refers to a given object. any given user object has a post. 
		//the argument that goes into the relationship is the name of the model
		return $this->hasMany('Post');  

	}

	public function setPasswordAttribute($value)
	{
	    $this->attributes['password'] = Hash::make($value);
	}

	public function isStandard()
	{
		return $this->role_id == User::STANDARD;
	}
}
