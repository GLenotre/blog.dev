<?php
use Carbon\Carbon;
 // Eloquent is an alias for a class that has methods like insert, update, delete
class Post extends BaseModel   
{
	protected $table = 'posts';

	public static $rules = [
    'title'      => 'required|max:100',
    'body'       => 'required|max:10000',
    'image'		 => 'max:30000|mimes:jpeg,png,gif,jpg'
];
public function getBodyAttribute($body)
{
	$Parsedown = new Parsedown();

	return $Parsedown->text($body); 
} 

public function getCreatedAtAttribute($value)
{
    $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
    return $utc->setTimezone('America/Chicago');
}

public function user()
{
	return $this->belongsTo('User');
}

public static function getAllLike($search)
{
	return self::where('title', 'LIKE', "%$search%")->orWhere('body', 'LIKE', "%$search%")->get();
}

public function isAuthor(user $user)
{
	return $this->user_id != $user->id;
}
}

