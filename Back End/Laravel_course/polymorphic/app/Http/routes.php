<?php

use App\Staff;
use App\Photo;
use App\Product;

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

//creating photo for the staff with imageable_type = "App\Staff"
Route::get('/create', function(){
   $staff = Staff::find(1);
   $staff->photos()->create(['path'=>'ex.jpg']);
});
//creating photo for the product with imageable_type = "App\Product"
Route::get('/create2', function(){
    $product = Product::find(1);
    $product->photos()->create(['path'=>'ex2.jpg']);
});


Route::get('/read', function(){
   $staff = Staff::findOrFail(1);
   foreach ($staff->photos as $photo) {
       return $photo->path;
   }
});

Route::get('/update', function() {
   $staff = Staff::find(1);
   $photo = $staff->photos()->whereId(1)->first();
   $photo->update(['path'=>'updated']);
});
Route::get('/updateAnotherWay', function(){
   $staff = Staff::find(1);
   $photo = $staff->photos()->whereId(1)->first();
   $photo->path = 'update2';
   $photo->save();
});
Route::get('/delete', function() {
   $staff = Staff::find(1);
   $staff->photos()->whereId(1)->delete();
});

//Extra Techniques
Route::get('/assign', function(){
   $staff = Staff::findOrFail(1);
   $photo = Photo::findOrFail(3);
   $staff->photos()->save($photo);
});
Route::get('/unassign', function(){
    $staff = Staff::findOrFail(1);
    $staff->photos()->whereId(3)->update(['imageable_id'=>'', 'imageable_type'=>'']);
});
