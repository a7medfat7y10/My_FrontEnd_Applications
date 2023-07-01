<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Tweet;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'name', 'email', 'password', 'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function timeline() {
        //get a list of the ids of all friends
        $followings = $this->follows()->pluck('id');

        //notice that ->withLikes() is a scoped quetry to left join I added in User.php
        //which make a table of tweets has two columns of likes and dislikes
        $followingTweets =  Tweet::whereIn('user_id', $followings)
        ->orWhere('user_id', $this->id)
        ->withLikes()
        ->latest()->get();

        return $followingTweets;
    }

    public function tweets() {
        return $this->hasMany('App\Tweet')->latest();
    }

    //a function to follow a user
    public function follow(User $user) {
        return $this->follows()->save($user);
    }

    //unfollow a user
    public function unfollow(User $user) {
        return $this->follows()->detach($user);
    }

    public function toggleFollow(User $user) {
        if($this->following($user)) {
            return $this->unfollow($user);
        }

        return $this->follow($user);
    }

    //check if the user is followed
    public function following(User $user) {
        return $this->follows()->where('following_user_id', $user->id)->exists();
    }

    //relationship to get the followings that user follows
    public function follows() {
        //follows will be the table name as tghe relation is between user_user and it cannot be the name of the table
        return $this->belongsToMany('App\User', 'follows', 'user_id', 'following_user_id');

    }


    //buildin function uses the username instead of id in the url
    public function getRouteKeyName() {
        return 'username';
    }

    //$this->password = 'anypass' it will set that attribute in db
    // public function setPasswordAttribute($value) {
    //     $this->attributes['password'] = bcrypt($value);
    // }

    public function likes() {
        return $this->hasMany('App\Like');
    }


}
