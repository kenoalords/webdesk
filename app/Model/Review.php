<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
	protected $fillable = ['user_id', 'review', 'score'];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
