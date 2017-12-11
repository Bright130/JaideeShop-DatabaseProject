<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shippingtype extends Model
{
    public $timestamps = false;
    protected $table = 'shippingtype';
    protected $guarded = ['shippingtypeid'];
}
