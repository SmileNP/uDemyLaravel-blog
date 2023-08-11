<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers as C;

/*
|--------------------------------------------------------------------------
| DATABASE Raw SQL Queries
|--------------------------------------------------------------------------
*/

//Route::get('/insert', function () {
//    DB::insert('insert into blogs(title, content) values(?,?)', ['PHP with laravel', 'Laravel is the best thing that has happened to PHP']);
//});

Route::get('/read', function () {
    $results = DB::select('select * from blogs where id = ?', [1]);
//    $str = '';
//    foreach ($results as $blog) {
//        $str = $str . $blog->title . " " . $blog->content;
//    }
//    return 'READ ' . $str;
    return var_dump($results);
});


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
