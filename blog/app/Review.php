<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
	protected $guarded = ['id'];

	public function service()
	{
		return $this->belongsTo(Service::class);
	}
}
