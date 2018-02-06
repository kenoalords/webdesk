<?php

namespace App\Model;

use App\Traits\Orderable;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use Orderable;
    
    protected $fillable = [
    		'package_id', 'has_domain', 'domain_name', 'include_logo', 'is_active', 'expires', 'renew_interval', 'notes', 'access_token'
    ];

    protected $dates = [
    		'expires', 'created_at', 'updated_at'
    ];

    public function user()
    {
    		return $this->belongsTo(User::class);
    }
}
