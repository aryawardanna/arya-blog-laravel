<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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
    return view('home', [
			"title" => "Home",
			"active" => "active",
		]);
});

Route::get('/about', function () {
	return view('about', [
		"title" => "About",
		'active' => 'about',
		"name" => "Arya Wardana",
		"email" => "aryamadridfc@gmail.com",
		"image" => "arya.jpg"
	]);
});




Route::get('/posts', [PostController::class, 'index']);

//halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function() {
	return view('categories', [
		'title' => 'Post Categories',
		'active' => 'categories',
		'categories' => Category::all()
	]);
});
