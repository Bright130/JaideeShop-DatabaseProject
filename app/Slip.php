<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slip extends Model
{
    public $timestamps = false;
    protected $table = 'slip';
    protected $guarded = [];
}
