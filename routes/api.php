<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/users', function(){
    return response()->json([
        'id' => 1,
        'name' => "Mahmud Ibrahim",
    ],200);
});

Route::get('/users/{name}', function($name = null){
    return "Hi". $name;
})->where('name', '[a-zA-Z]+');

Route::get('/products/{id?}', function ($id = null) {
    return 'Product ID: '.$id;
})->where('id', '[0-9]+');

Route::match(['get', 'post'], '/students', function (Request $request) {
    return 'Requested method is '. $request->method();
});