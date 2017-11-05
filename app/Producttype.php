<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producttype extends Model
{
    public $timestamps = false;
    protected $table = 'producttype';
    protected $guarded = ['producttypeid'];
}
