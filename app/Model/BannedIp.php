<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BannedIp extends Model
{
    protected $fillable = ['ip'];
}
