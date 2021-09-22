<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Models\Category;


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
//     return view('welcome', [
//         "title" => "Wellcome"
//     ]);
// });

Route::get('/', function () {
    return view('home', [
        "name" => "M Rinaldi Hasanudin",
        "email" => "mrinaldihasanudin@gmail.com",
        "image" => "frontend/images/avatar-1.png",
        "title" => "Home"
    ]);
});


Route::get('/about', function () {
    return view('about', [
        "name" => "M Rinaldi Hasanudin",
        "email" => "mrinaldihasanudin@gmail.com",
        "image" => "frontend/images/avatar-1.png",
        "title" => "About"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/categories', [PostController::class, 'categories']
);
Route::get('/authors/{author:username}',[PostController::class, 'authors']);


// halaman single post

Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::get('/categories/{category:slug}', [PostController::class, 'category' ]);