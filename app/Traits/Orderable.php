<?php

namespace App\Traits;

trait Orderable 
{
	public function scopeLatestFirst($query)
	{
		return $query->orderBy('created_at', 'desc');
	}

	public function scopeModifiedFirst($query)
	{
		return $query->orderBy('updated_at', 'desc');
	}
}