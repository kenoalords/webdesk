<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    protected $fillable = ['fullname', 'email', 'contact_number', 'subject', 'message', 'ip'];
}
