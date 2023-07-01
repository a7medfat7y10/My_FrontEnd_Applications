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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//displaying the post and comment section in each post
Route::group(['middleware'=>'admin'], function(){

    Route::get('/admin', 'AdminPageController@index');

//    Route::resource('admin/users', 'AdminUsersController');
    Route::get('admin/users', 'AdminUsersController@index');
    Route::get('admin/users/pending', 'AdminUsersController@indexPending');
    Route::get('admin/users/{id}/activateUser', 'AdminUsersController@activateUser');
    Route::get('admin/users/create', 'AdminUsersController@create');
    Route::get('admin/users/{id}', 'AdminUsersController@show');
    Route::post('admin/users', 'AdminUsersController@store');
    Route::get('admin/users/{id}/edit', 'AdminUsersController@edit');
    Route::put('admin/users/{id}', 'AdminUsersController@update');
    Route::delete('admin/users/{id}', 'AdminUsersController@destroy');


    //    Route::resource('admin/categories', 'AdminCategoriesController');
    Route::get('admin/categories', 'AdminCategoriesController@index');
    Route::get('admin/categories/create', 'AdminCategoriesController@create');
    Route::get('admin/categories/{id}', 'AdminCategoriesController@show');
    Route::post('admin/categories', 'AdminCategoriesController@store');
    Route::get('admin/categories/{id}/edit', 'AdminCategoriesController@edit');
    Route::put('admin/categories/{id}', 'AdminCategoriesController@update');
    Route::delete('admin/categories/{id}', 'AdminCategoriesController@destroy');



//    Route::resource('admin/items', 'AdminItemsController');
    Route::get('admin/items', 'AdminItemsController@index');
    Route::get('admin/items/{id}/activateItem', 'AdminItemsController@activateItem');
    Route::get('admin/items/create', 'AdminItemsController@create');
    Route::get('admin/items/{id}', 'AdminItemsController@show');
    Route::post('admin/items', 'AdminItemsController@store');
    Route::get('admin/items/{id}/edit', 'AdminItemsController@edit');
    Route::put('admin/items/{id}', 'AdminItemsController@update');
    Route::delete('admin/items/{id}', 'AdminItemsController@destroy');



//    Route::resource('admin/comments', 'PostCommentsController');
    Route::get('admin/comments', 'CommentsController@index');
    Route::get('admin/comments/{id}/activateComment', 'AdminItemsController@activateComment');
    Route::get('admin/comments/create', 'CommentsController@create');
    Route::get('admin/comments/{id}', 'CommentsController@show');
    Route::post('admin/comments', 'CommentsController@store');
    Route::get('admin/comments/{id}/edit', 'CommentsController@edit');
    Route::put('admin/comments/{id}', 'CommentsController@update');
    Route::delete('admin/comments/{id}/delete', 'CommentsController@destroy');



//    Route::resource('admin/comment/replies', 'CommentRepliesController');
    Route::get('admin/replies', 'CommentRepliesController@index');
    Route::get('admin/replies/create', 'CommentRepliesController@create');
    Route::get('admin/replies/{id}', 'CommentRepliesController@show');
    Route::post('admin/replies', 'CommentRepliesController@store');
    Route::get('admin/replies/{id}/edit', 'CommentRepliesController@edit');
    Route::put('admin/replies/{id}', 'CommentRepliesController@update');
    Route::delete('admin/replies/{id}/delete', 'CommentRepliesController@destroy');

});

Route::group(['middleware'=>'auth'], function() {
    Route::post('comment/reply', 'CommentRepliesController@createReply');
});
