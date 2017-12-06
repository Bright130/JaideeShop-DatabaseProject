<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoptype extends Model
{
    public $timestamps = false;
    protected $table = 'shoptype';
    protected $fillable = ['shoptype','ShopDesc'];
    protected $guarded = ['shoptypeid'];
}
