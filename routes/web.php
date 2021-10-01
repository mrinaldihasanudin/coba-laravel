<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;



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
        "title"=>'Home',
        "active" => "home"
    ]);
});


Route::get('/about', function () {
    return view('about', [
        "name" => "M Rinaldi Hasanudin",
        "email" => "mrinaldihasanudin@gmail.com",
        "image" => "https://source.unsplash.com/400x400/?nature,water",
        "title"=>'about',
        "active" => "about"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/categories', [PostController::class, 'categories']
);
Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);

Route::get('/register',[RegisterController::class,'index'])->middleware('guest');
Route::post('/register',[RegisterController::class,'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

// Route::get('/authors/{author:username}',[PostController::class, 'authors']);


// halaman single post

Route::get('posts/{post:slug}', [PostController::class, 'show']);
// Route::get('/categories/{category:slug}', [PostController::class, 'category' ]);