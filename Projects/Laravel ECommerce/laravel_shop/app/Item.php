<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'price',
        'country',
        'is_approved',
        'category_id',
        'photo_id',
        'tags',
        'user_id'
    ];
    public function user() {
        return $this->belongsTo('App\User');
    }
    public function category() {
        return $this->belongsTo('App\Category');
    }
    public function photo() {
        return $this->belongsTo('App\Photo');
    }
}
