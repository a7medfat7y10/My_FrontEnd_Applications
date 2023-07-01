<?php
    use App\Photo;
    use App\Country;
    use App\Post;
    use App\Tag;
    use App\User;
use Carbon\Carbon;


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
//
    Route::get('/', function () {
        return view('welcome');
    });
//
//    Route::get('/contact', function () {
//        return "Here I'm contact";
//    });
//
//    Route::get('/post/{id}/{name}', function ($id, $name) {
//        return "Here Post number" . $id . " " . $name;
//    });
//
//    Route::get('/posts', 'PostsController@index');
//
//    Route::get('/contact', 'PostsController@contact');
//
// 
// 
// 
//  /*
//    |--------------------------------------------------------------------------
//    | Raw SQL
//    |--------------------------------------------------------------------------
//    */
//
//    Route::get('/insert', function () {
//        DB::insert('insert into posts (title, body) values (?, ?)', ['PHP with laravel', 'laravel is the best for me']);
//    });
//
//    Route::get('/read', function () {
//        $results = DB::select('select * from posts where id =?', [1]);
//        foreach ($results as $post) {
//            return $post->title;
//        }
//    });
//
//    Route::get('/update', function() {
//        $updated = DB::update('update posts set title="Updated title" where id=?', [1]);
//        return $updated;
//    });
//
//    Route::get('/delete', function() {
//        $deleted = DB::delete('delete from posts where id = ?', [1]);
//        return $deleted;
//    });
// 
// 
// 
//    |--------------------------------------------------------------------------
//    | Eloquent
//    |--------------------------------------------------------------------------
//    */
// 
//    Route::get('/read', function() {
//        $posts = Post::all();
//
//        foreach ($posts as $post) {
//
//            return $post->title;
//        }
//    });
//
//    Route::get('/find', function () {
//        $post = Post::find(2);
//        return $post->title;
//    });

//    Route::get('/findwhere', function() {
//       $posts = Post::where('id', 2)->orderBy('id', 'desc')->take(1)->get();
//       return $posts;
//    });

//    Route::get('/findmore', function() {
////       $posts = Post::findOrFail(1);
////       return $posts;
//
//        $posts = Post::where('users_count' , '<', 50)->firstOrFail();
//    });

//    Route::get('/basicinsert', function() {
//       $post = new Post ;
//       $post->title = 'New record insert';
//       $post->body = 'Wow cool insert';
//       $post->save();
//    });

//    Route::get('/basicinsert2', function() {
//      $post = Post::find(2);
//      $post->title = 'New 2  record insert';
//      $post->body = 'Wow cool insert 2';
//      $post->save();
//    });

//    Route::get('/create', function() {
//       Post::create(['title'=>'the create method', 'body'=>'learning cool stuff here']);
//    });
//
//    Route::get('/update', function() {
//       Post::where('id', 2)->where('is_admin', 0)->update(['title'=>'New tiitle', 'body'=>'New Content']);
//    });
//

//    Route::get('/delete', function() {
//       $post = Post->find(2);
//       $post-delete();
//    });
//
//    Route::get('/delete2', function() {
//        Post::destroy([3,4]);
//    });
//
//    Route::get('/delete3', function() {
//        Post::where('is_admin', 0)->delete();
//    });
//
//    Route::get('/softdelete', function() {
//        Post::find(4)->delete();
//    });
//
//    Route::get('/readsoftdelete', function() {
////       $post = Post::withTrashed()->where('id', 4)->get();
//
//        $post = Post::onlyTrashed()->where('id', 4)->get();
//
//       return $post;
//    });
//
//    Route::get('/restoresoftdelete', function() {
//        $post = Post::withTrashed()->where('id', 4)->restore();
//    });
//
//    Route::get('/forceDelete', function() {
//        $post = Post::withTrashed()->where('id', 4)->forceDelete();
//
//    });

//    |--------------------------------------------------------------------------
//    | Eloquent relationships
//    |--------------------------------------------------------------------------
//    */
//
//    //One to one relationship
//    Route::get('/user/{id}/post',function($id) {
//       return User::find($id)->post;
//    });
//    //inverse relation
//    Route::get('/post/{id}/user',function($id) {
//        return Post::find($id)->user->name;
//    });
//    //one to many relation
//    Route::get('/posts',function() {
//       $user = User::find(1);
//       foreach ($user->posts as $post) {
//           echo $post->title . '</br>';
//       }
//    });
//
//    //many to many relationship
//    Route::get('/user/{id}/role', function($id) {
//       $user = User::find($id);
//
//       foreach ($user->roles as $role) {
//           return $role->name;
//       }
//    });
//
//    //accessing intermediate table (pivot table -> role_user)
//    Route::get('/user/pivot',function() {
//        $user = User::find(1);
//        foreach ($user->roles as $role) {
//            return $role->pivot->created_at;
//        }
//    });
//    //has many Through relation
//    Route::get('/user/country',function() {
//        $country = Country::find(2);
//        foreach ($country->posts as $post) {
//            return $post->title;
//        }
//    });
//
//
//    //polymorphic relations
//    Route::get('user/photos', function() {
//        $user = User::find(1);
//        foreach($user->photos as $photo) {
//            return $photo;
//        }
//    });
//    Route::get('photo/{id}/post', function($id) {
//        $photo = Photo::findOrFail($id);
//        return $photo->imageable_id;
//    });
//
//
//    //polymorphic many to many
//    Route::get('/post/tag', function() {
//        $post = Post::find(1);
//        foreach ($post->tags as $tag) {
//            echo $tag->name;
//        }
//    });
//    Route::get('/tag/post', function() {
//        $tag = Tag::find(2);
//        foreach ($tag->posts as $post) {
//            return $post->title;
//        }
//    });


//  /*
//    |--------------------------------------------------------------------------
//    | Form application Crud
//    |--------------------------------------------------------------------------
//    */


    //this makes $errors available in this route
    //Validation and forms
    Route::resource('/posts', 'PostsController');


//  /*
//    |--------------------------------------------------------------------------
//    | Database Dating, Accessors and mutators
//    |--------------------------------------------------------------------------
//    */

    //Dating and Carbon
    Route::get('/dates', function(){
       $date = New DateTime('+1 week');
       echo $date->format('m-d-Y');
       echo Carbon::now()->addDays(10)->diffForHumans();
    });


    //Accessors, mutators
    Route::get('/name', function(){
       $user = User::find(1);
       echo $user->name;
    });
    Route::get('/nameset', function(){
    $user = User::find(1);
    $user->name = 'Mohamed';
    $user->save();



});