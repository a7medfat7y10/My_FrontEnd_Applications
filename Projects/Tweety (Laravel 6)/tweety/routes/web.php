<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::middleware('auth')->group(function() {
    Route::get('/tweets', 'TweetsController@index')->name('home');
    Route::post('/tweets', 'TweetsController@store')->name('tweets');

    Route::post('/tweets/{tweet}/like', 'TweetLikesController@store');
    Route::delete('/tweets/{tweet}/like', 'TweetLikesController@destroy');


    Route::post('/profiles/{user}/follow', 'FollowsController@store');
    //we can put authorization here instead of controller ->middleware('can:edit,user') in the end of these to routes
    Route::get('/profiles/{user}/edit', 'ProfilesController@edit');
    Route::patch('/profiles/{user}', 'ProfilesController@update' );

    Route::get('/explore', 'ExploreController@index');

});


Route::get('/profiles/{user}', 'ProfilesController@show')->name('profile');



Auth::routes();


