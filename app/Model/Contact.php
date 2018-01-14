<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['user_id', 'subscription_id', 'department', 'subject', 'message', 'is_solved', 'status'];

    public function user()
    {
    		return $this->belongsTo(User::class);
    }
}
