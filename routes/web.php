<?php

use App\Http\Controllers\HomeController;
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