<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
    		'user_id', 'invoice_id', 'amount_paid', 'amount_due', 'amount_difference', 'paystack_id', 'paystack_reference', 'paystack_fees', 'paystack_customer_code', 'ip', 'authorization_code', 'bin', 'signature', 'last4', 'card_type', 'bank', 'country_code', 'brand', 'medium', 'approved_by'
    ];

    public function user()
    {
    		return $this->belongsTo(User::class);
    }

}
