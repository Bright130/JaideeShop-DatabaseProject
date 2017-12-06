<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class newBuyer extends Authenticatable
{
    use Notifiable;
    protected $guard ='newBuyer' ;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'buyername', 'buyersurname', 'buyeraddress','buyergender','buyertel',
        'buyerimg','buyergender','email','password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
