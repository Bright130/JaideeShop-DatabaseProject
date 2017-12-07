<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productimage extends Model
{
    public $timestamps = false;
    protected $table = 'productimage';
    protected $fillable = ['productid','urlimage'] ;
    protected $guarded = [];
}
