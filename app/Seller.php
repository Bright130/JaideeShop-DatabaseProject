<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    public $timestamps = false;
    protected $table = 'seller';
    protected $guarded = ['SellerID'];
}
