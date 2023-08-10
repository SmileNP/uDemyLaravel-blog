<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers as C;
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

Route::get('/contact', [C\PostsController::class, 'contact']);

Route::get('post/{id}/{name}', [C\PostsController::class, 'show_post']);