<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $table = 'category';
    protected $guarded=[];

    public $timestamps = false;
}
