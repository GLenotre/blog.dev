<?php

use Carbon\Carbon;

class BaseModel extends Eloquent {

	public function getCreatedAtAttribute($value)
	{
	    $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
	    return $utc->setTimezone('local');
	}

	public function getUpdatedAtAttribute($value)
	{
	    $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
	    return $utc->setTimezone('local');
	}	

	public function setUsernameAttribute($value)
	{
    	$this->attributes['username'] = strtolower($value);
	}

	public function setPasswordAttribute($value)
	{
	    $this->attributes['password'] = Hash::make($value);
	}

}

?>
