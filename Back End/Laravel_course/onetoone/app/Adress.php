<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    //to solve mass assignment problem
    protected $fillable = [
      'name'
    ];
}
