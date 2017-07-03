<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'last_name_1',
        'last_name_2',
        'email',
        'username',
        'phone',
        'mobile',
        'active',
        'street_address',
        'colony',
        'exterior_number',
        'interior_number',
        'postal_zip',
        'city',
        'state',
        'role'
    ];

    use Notifiable;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
