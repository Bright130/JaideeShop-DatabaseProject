<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public $timestamps = false;
    protected $table = 'Shop';
    protected $fillable = ['ShopID','ShopName','ShoptypeID','ShopDesc','shopimg','ShopImg','ShopView'];
}
