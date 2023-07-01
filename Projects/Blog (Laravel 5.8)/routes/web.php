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



Route::group(['middleware'=>'admin'], function(){
    Route::get('/admin', function(){
        return view('admin.index');
    });

//    Route::resource('admin/users', 'AdminUsersController');
    Route::get('admin/users', 'AdminUsersController@index');
    Route::get('admin/users/create', 'AdminUsersController@create');
    Route::post('admin/users/store', 'AdminUsersController@store');
    Route::get('admin/users/edit/{id}', 'AdminUsersController@edit');
    Route::put('admin/users/update/{id}', 'AdminUsersController@update');
    Route::delete('admin/users/delete/{id}', 'AdminUsersController@destroy');


    // Route::resource('admin/posts', 'AdminPostsController');
    Route::get('admin/posts', 'AdminPostsController@index');
    Route::get('admin/posts/create', 'AdminPostsController@create');
    Route::post('admin/posts/store', 'AdminPostsController@store');
    Route::get('admin/posts/edit/{id}', 'AdminPostsController@edit');
    Route::put('admin/posts/update/{id}', 'AdminPostsController@update');
    Route::delete('admin/posts/delete/{id}', 'AdminPostsController@destroy');

    Route::get('home/post/{id}', 'AdminPostsController@post');



//    Route::resource('admin/categories', 'AdminCategoriesController');
    Route::get('admin/categories', 'AdminCategoriesController@index');
    Route::get('admin/categories/create', 'AdminCategoriesController@create');
    Route::post('admin/categories/store', 'AdminCategoriesController@store');
    Route::get('admin/categories/edit/{id}', 'AdminCategoriesController@edit');
    Route::put('admin/categories/update/{id}', 'AdminCategoriesController@update');
    Route::delete('admin/categories/delete/{id}', 'AdminCategoriesController@destroy');

//    Route::resource('admin/media', 'AdminMediasController');
    Route::get('admin/media', 'AdminMediasController@index');
    Route::get('admin/media/create', 'AdminMediasController@create');
    Route::post('admin/media/store', 'AdminMediasController@store');
    Route::get('admin/media/edit/{id}', 'AdminMediasController@edit');
    Route::put('admin/media/update/{id}', 'AdminMediasController@update');
    Route::delete('admin/media/delete/{id}', 'AdminMediasController@destroy');

    Route::delete('admin/delete/media', 'AdminMediasController@deleteMedia');



//    Route::resource('admin/comments', 'PostCommentsController');
    Route::get('admin/comments', 'PostCommentsController@index');
    Route::get('admin/comments/show/{id}', 'PostCommentsController@show');
    Route::get('admin/comments/create', 'PostCommentsController@create');
    Route::post('admin/comments/store', 'PostCommentsController@store');
    Route::get('admin/comments/edit/{id}', 'PostCommentsController@edit');
    Route::put('admin/comments/update/{id}', 'PostCommentsController@update');
    Route::delete('admin/comments/delete/{id}', 'PostCommentsController@destroy');



//    Route::resource('admin/comment/replies', 'CommentRepliesController');
    Route::get('admin/comments/replies', 'CommentRepliesController@index');
    Route::get('admin/comments/replies/show/{id}', 'CommentRepliesController@show');
    Route::get('admin/comments/replies/create', 'CommentRepliesController@create');
    Route::post('admin/comments/replies/store', 'CommentRepliesController@store');
    Route::get('admin/comments/replies/edit/{id}', 'CommentRepliesController@edit');
    Route::put('admin/comments/replies/update/{id}', 'CommentRepliesController@update');
    Route::delete('admin/comments/replies/delete/{id}', 'CommentRepliesController@destroy');
});
Route::group(['middle'=>'auth'], function() {
    Route::post('admin/comments/replies/createReply', 'CommentRepliesController@createReply');
});
