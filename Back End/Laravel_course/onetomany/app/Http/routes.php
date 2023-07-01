<?php

use App\Post;
use App\User;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/create', function(){
    $user = User::findOrFail(1);
    $user->posts()->save(new Post(['title'=>'hey from laravel 2', 'body'=>'hey laravel body 2']));
});

Route::get('/read', function() {
   $user = User::findOrFail(1);
   foreach($user->posts as $post) {
       echo $post->title . "</br>";
   }
});

Route::get('/update', function(){
   $user = User::find(1);
   $user->posts()->whereId(1)->update(['title'=>'uodated here ', 'body'=>'updated content']);
});

Route::get('/delete', function() {
   $user = User::findOrFail(1);
   $user->posts()->whereId(1)->delete();
});