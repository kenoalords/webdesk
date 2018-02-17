<?php

namespace App\Model;

use App\Traits\Orderable;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
	use Orderable;
	protected $fillable = ['fullname', 'email', 'contact_number', 'subject', 'message', 'ip'];
}
