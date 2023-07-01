<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{


    //has many through relation
    public function posts () {
        return $this->hasManyThrough('App\Post','App\User');

        //return $this->hasManyThrough('App\Post','App\User','country_id','user_id');
    }
}
