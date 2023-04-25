<?php

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
    return view('welcome'); //View is a global helper function which can be accessed from any place in code
});

Route::get('posts', 
[PostController::class, 'index']);// ::class is a php magic constant // TestController::class returns string contains its namespace

Route::get('posts/{post}', 
'App\Http\Controllers\PostController@show')->name('posts.show');// PostController::class ==> App\Http\Controllers\PostController