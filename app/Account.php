<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    public $timestamps = false;
    protected $table = 'Account';
    protected $guarded = ['Accountno'];
}
