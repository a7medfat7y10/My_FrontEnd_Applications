<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//use Illuminate\Database\Eloquent\SoftDeletes; //added by me

class Post extends Model
{
    //this is commented as it makes error when viewing the posts page
//    use SoftDeletes;

        //to set custom name for the table
    //    protected $table = 'posts';
        //to set custom name for the primary_key
    //    protected $primaryKey = "id";


    protected $dates = ['deleted_at'];

    //to configure mass assignment for creating data
    protected $fillable = [
        'title',
        'body',
        'path'
    ];


    //by me to make inverse relation between user and post tables\
    public function user () {
        return $this->belongsTo('App\User');
    }
//polymorphic relation
    public function photos() {
        return $this->morphMany('App\Photo', 'imageable');
    }
//many to many polymorphic
    public function tags() {
        return $this->morphToMany('App\Tag', 'taggable');
    }


    //using accessor for the upload file image
//    public $directory = 'images/';
//    public function getPathAttribute($value)
//    {
//        return $this->directory . $value;
//    }


}


