<?php

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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
    return view ('home',[
        'title' => "Home",
        'active' => "Home",
    ]);
});

Route::get('/about', function () {
    return view ('about',[
        'title' => "About",
        'active' => "About",
        'name' => "Rinaldi Rizqi Fauzi",
        'email' => "kylavesfar@gmail.com",
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view ('categories',[
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all(),
    ]);
});