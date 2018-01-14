<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'fullname', 'city', 'state', 'phone_number'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function subscription()
    {
        return $this->hasMany(Subscription::class);
    }

    public function invoice()
    {
        return $this->hasMany(Invoice::class);
    }

    public function payment()
    {
        return $this->hasMany(Payment::class);
    }

    public function contact()
    {
        return $this->hasMany(Contact::class);
    }
}
