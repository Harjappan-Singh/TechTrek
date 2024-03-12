<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\TagsController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PagesController::class, 'index']);

Route::get('/about', [PagesController::class, 'about']);

Route::get('/blog/tags/{tag}', [PostsController::class, 'tagPosts'])->name('tag_posts');

Route::get('/blog/tags', [PostsController::class, 'tagPostsBySearch'])->name('tag_posts_by_search');


Route::resource('/blog', PostsController::class);

Auth::routes();
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');