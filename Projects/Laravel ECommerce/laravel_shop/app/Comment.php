<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = [
        'item_id',
        'user_id',
        'is_approved',
        'email',
        'body'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
    public function replies() {
        return $this->hasMany('App\CommentReply');
    }
}
