<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
	protected $fillable = ['user_id', 'review', 'score', 'name', 'position'];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
