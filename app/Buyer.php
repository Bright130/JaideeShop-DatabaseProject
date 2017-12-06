<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Buyer extends Authenticatable
{
    protected $guard = 'buyer';

    public $timestamps = false;
    protected $table = 'Buyer';
    protected $fillable = ['password','email'] ;
}
