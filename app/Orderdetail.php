<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
    public $timestamps = false;
    protected $table = 'orderdetail';
    protected $guarded = ['orderid'];
}
