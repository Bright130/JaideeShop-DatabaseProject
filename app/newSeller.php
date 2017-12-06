<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class newSeller extends Authenticatable
{
    use Notifiable;
    protected $guard ='newSeller' ;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sellername', 'sellersurname', 'selleraddress','sellergender','sellertel',
        'sellerimg','sellergender','email','password',
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
