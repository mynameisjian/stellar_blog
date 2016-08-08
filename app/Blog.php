<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{

	use SoftDeletes;

	protected $table = 'blogs';	

	protected $dates = ['deleted_at', 'published_at'];

	public function user()
	{

		return $this->belongsTo('App\User');

	}	

	public function setPublishedAtAttribute($value)
    {

        $this->attributes['published_at'] = \Carbon\Carbon::parse($value)->format('Y-m-d H:i:m');

    }

    public function getPublishedAtAttribute($value)
    {
    	return \Carbon\Carbon::parse($value)->format('m-d-Y H:i:s');
    }

    public function getCreatedAtAttribute()
    {

    	return \Carbon\Carbon::parse($value)->format('m-d-Y H:i:s');

    }

    public function getUpdatedAtAttribute($value)
    {

    	return \Carbon\Carbon::parse($value)->format('m-d-Y H:i:s');

    }

}