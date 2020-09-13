<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// functional routes 
Route::get('/users', function(){
    return 'Hi there! This is user web page';
});

// Controller routes
// laravel <8.0 way
// Route::get('/home', 'HomeController@index'); 

// Laravel 8 way 
Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/home/user/{name}', [HomeController::class, 'username'])->name('user-name');
Route::get('/user', [UserController::class,'index'])->name('user.index');

Route::get('/product', [ProductController::class, 'index'])->name('product.index');

Route::get('/posts', [ClientController::class, 'getAllPost'])->name('post.index');
Route::get('/posts/{id}', [ClientController::class, 'getSinglePost'])->name('post.show');
Route::get('/add-post', [ClientController::class, 'addPost'])->name('post.create');
Route::get('/update-post/{id}', [ClientController::class, 'updatePost'])->name('post.update');
Route::get('/delete-post/{id}', [ClientController::class, 'deletePost'])->name('post.delete');

// Login Routes 
Route::get('/login', [LoginController::class, 'login'])->name('login.index');
Route::post('/login', [LoginController::class, 'loginStore'])->name('login.store');