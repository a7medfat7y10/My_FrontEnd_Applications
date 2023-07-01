<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    //by me to make relation between user and post tables\
    public function post () {
        return $this->hasOne('App\Post');
    }

    public function posts () {
        return $this->hasMany('App\Post');
    }

    public function roles() {
        return $this->belongsToMany('App\Role')->withPivot('created_at');
        //customize table and columns name
//        return $this->belongsToMany('App\Role', 'roles', 'user_id','role_id');
    }

    public function photos () {
        return $this->morphMany('App\Photo', 'imageable');
    }

    public function getNameAttribute($value){
        return strtoupper($value);
    }
    public function setNameAttribute($value){
        $this->attributes['name'] = strtoupper($value);
    }

}
