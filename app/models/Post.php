<?php
use Carbon\Carbon;
 // Eloquent is an alias for a class that has methods like insert, update, delete
class Post extends BaseModel   
{
	protected $table = 'posts';

	public static $rules = array(
    'title'      => 'required|max:100',
    'body'       => 'required|max:10000'
);

public function getCreatedAtAttribute($value)
{
    $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
    return $utc->setTimezone('America/Chicago');
}

public function user()
{
	return $this->belongsTo('User');
}
}

