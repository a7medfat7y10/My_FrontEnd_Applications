<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
//many to many relation
    public function users() {
        return $this->belongsToMany('App\User');
    }

}
