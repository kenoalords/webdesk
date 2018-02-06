<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class EmailSubscription extends Model
{
    protected $fillable = ['email', 'fullname', 'website', 'ip', 'iso_code', 'country', 'city', 'state'];
}
