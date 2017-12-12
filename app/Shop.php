<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public $timestamps = false;
    protected $table = 'Shop';
    protected $primaryKey = 'ShopID';
    protected $fillable = ['ShopID','ShopName','sellerid','shoptypeid','ShopDesc','shopimg','ShopImg','ShopView'];
}
