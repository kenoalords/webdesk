<?php

namespace App\Model;

use App\Traits\Orderable;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use Orderable;
    
    protected $fillable = [
    		'user_id', 'package_id', 'subscription_id', 'amount', 'uid', 'is_paid', 'payment_date', 'description'
    ];

    public function user()
    {
    		return $this->belongsTo(User::class);
    }

    public function scopeUnPaidInvoices($query)
    {
    	return $query->where('is_paid', false);
    }

    public function scopePaidInvoices($query)
    {
        return $query->where('is_paid', true);
    }
}
