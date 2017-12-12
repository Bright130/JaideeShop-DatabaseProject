<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;
    protected $table = 'product';
      protected $primaryKey = 'productid';
    protected $fillable = [
    	'productname',
    	'producttype',
    	'producttypeid',
    	'productdesc',
    	'productprice',
    	'shopid',
    	'quantity',
    	'productview'
    ];
    protected $guarded = [];
}
