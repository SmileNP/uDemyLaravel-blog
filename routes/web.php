<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

use App\Models\Blog;
use App\Models\User;
use App\Models\Country;
use App\Models\Video;
use App\Models\Tag;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| ELOQUENT RELATIONSHIP
|--------------------------------------------------------------------------
*/

//Route::get('/hasone', function () {
//    return User::find(1)->blog;
//});
//
//// inverse relationship
//Route::get('/belongsto', function () {
//    return Blog::find(1)->user->name;
//});
//
//Route::get('/hasmany', function () {
//    $user = User::find(1);
//    foreach ($user->blogs as $blog) {
//        echo $blog->title . "<br>";
//    }
//});
//
//Route::get('/manytomany', function () {
//    $user = User::find(1);
//    foreach ($user->roles as $role) {
//        echo $role->name . "<br>";
//    }
//});

// Accessing the intermediate table / pivot table

//Route::get('user/pivot', function () {
//    $user = User::find(1);
//
//    foreach ($user->roles as $role) {
//        echo $role->pivot->created_at . "<br>";
//    }
//
//});
//
//Route::get('user/country', function () {
//    $country = Country::find(2);
//
//    foreach ($country->blogs as $blog) {
//        return $blog->title;
//    }
//});


// Polymorphic Relations

//Route::get('user/photos', function () {
//    $user = User::find(1);
//    foreach ($user->photos as $photo) {
//        return $photo;
//    }
//});
//
//Route::get('blog/photos', function () {
//    $blog = Blog::find(1);
//    foreach ($blog->photos as $photo) {
//        return $photo;
//    }
//});
//
//Route::get('/blog/tag', function () {
//    $blog = Blog::find(1);
//    foreach ($blog->tags as $tag) {
//        return $tag;
//    }
//});
//
//Route::get('/video/tag', function () {
//    $video = Video::find(1);
//    foreach ($video->tags as $tag) {
//        return $tag;
//    }
//});
//
//Route::get('/tag/blog', function () {
//    $tag = Tag::find(2);
//    foreach ($tag->blogs as $blog) {
//        return $blog;
//    }
//});
//
//Route::get('/tag/video', function () {
//    $tag = Tag::find(1);
//    foreach ($tag->videos as $blog) {
//        return $blog;
//    }
//});
/*
|--------------------------------------------------------------------------
| ELOQUENT
|--------------------------------------------------------------------------
*/

//Route::get('/read', function () {
//
//    $posts = Blog::all();
//
//    foreach ($posts as $post) {
//        return $post->title;
//    }
//    return null;
//});
//
//Route::get('/find', function () {
//    return Blog::find(2)->title;
//});
//
//Route::get('/findwhere', function () {
//    return Blog::where('id', 3)->orderBy('id', 'desc')->take(1)->get();
//});
//
//Route::get('/insert', function () {
//    $blog = new Blog();
//
//    $blog->title = "New Eloquent Blog";
//    $blog->content = "eloquent content";
//
//    $blog->save();
//});
//
//Route::get('/create', function () {
//    Blog::create(['title' => 'the create method', 'content' => 'WOW']);
//});
//
//Route::get('/update', function () {
//    Blog::where('id', 2)->update(['title' => 'NEW UPDATED TITLE']);
//});
//
//Route::get('/delete', function () {
////    Blog::find(2)->delete();
////    Blog::destroy([3, 5]);
//});


/*
|--------------------------------------------------------------------------
| DATABASE Raw SQL Queries
|--------------------------------------------------------------------------
*/

//Route::get('/insert', function () {
//    DB::insert('insert into blogs(title, content) values(?,?)', ['DJANGO', 'Django is the best thing that has happened to python']);
//});
//
//Route::get('/read', function () {
//    $results = DB::select('select * from blogs where id = ?', [1]);
////    $str = '';
////    foreach ($results as $blog) {
////        $str = $str . $blog->title . " " . $blog->content;
////    }
////    return 'READ ' . $str;
//    return var_dump($results);
//});
//
//Route::get('/update', function () {
//    return DB::update('update blogs set title = "Updated title" where id = ?', [1]);
//});
//
//Route::get('/delete', function () {
//    return DB::delete('delete from blogs where id = ?', [1]);
//});

/*
|--------------------------------------------------------------------------
| Web Routes
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/about', function () {
//     // return view('welcome');
//     return "ABOUT";
// });
// Route::get('/contact', function () {
//     // return view('welcome');
//     return "CONTACT";
// });

// Route::get('/post/{id}/{name}', function($id, $name) {
//     return "This is post number ". $id . " ". $name;
// });

// // Named route
// Route::get('admin/posts/example',array ( 'as'=>'admin.home', function () {
//     $url = route('admin.home');
//     return "this url is ". $url;
// }));

// Route::get('/post/{id}', [C\PostsController::class, 'index']);

// Route::resource('posts', C\PostsController::class);

//Route::get('/contact', [C\PostsController::class, 'contact']);
//
//Route::get('post/{id}/{name}', [C\PostsController::class, 'show_post']);


/*
 * Crud Application
 */

Route::resource('/blogs', PostsController::class);

Route::get('/dates', function () {

    $date = new DateTime('+1 week');
    echo $date->format('m-d-Y');
    echo "<br>";
    echo Carbon::now()->addDays(10)->diffForHumans();
});
