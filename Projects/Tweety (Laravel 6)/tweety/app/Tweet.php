<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Tweet extends Model
{
    //
    protected $fillable = ['body', 'user_id'];


    public function user() {
        return $this->belongsTo('App\User');
    }



    public function like($user = null) {
        $this->likes()->updateOrCreate([
            'user_id' => ($user) ? $user->id : auth()->id() ,
        ], [
            'liked' => true
        ]);
    }
    public function dislike($user = null) {
        $this->likes()->updateOrCreate([
            'user_id' => ($user) ? $user->id : auth()->id(),
        ], [
            'liked' => false
        ]);
    }

    public function isLikedBy(User $user) {
        return (bool) $user->likes->where('tweet_id', $this->id)->where('liked', true)->count();
    }
    public function isDislikedBy(User $user) {
        return (bool) $user->likes->where('tweet_id', $this->id)->where('liked', false)->count();
    }

    public function likes() {
        return $this->hasMany('App\Like');
    }

    //it joins the likes and dislikes column with the tweet table
    //Showing number of the likes and dislikes for each tweet
    public function scopeWithLikes(Builder $query) {
        $query->leftJoinSub(
            'SELECT tweet_id, sum(liked) likesnum, sum(!liked) dislikesnum from likes group by tweet_id',
            'likes',
            'likes.tweet_id',
            'tweets.id'
        );
    }

}
