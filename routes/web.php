<?php

use App\Http\Controllers\HomeController;
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