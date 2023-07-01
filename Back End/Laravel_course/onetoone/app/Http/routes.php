<?php

use App\User;
use App\Adress;
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

Route::get('/insert',function() {
   $user = User::findOrFail(1);
   $adress = new Adress(['name'=>'121 B Baker street']);
   $user->adress()->save($adress);
});
Route::get('/update', function(){
   $adress = Adress::whereUserId(1)->first();
   $adress->name = "221 B Baker street";
   $adress->save();
});
Route::get('/read', function() {
    $user = User::findOrFail(1);
    echo $user->adress->name;
});
Route::get('/delete', function() {
    $user = User::findOrFail(1);
    $user->adress()->delete();
    return "done";
});
