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

//Welcome
Route::get('/', function () {
    return view('welcome'); //View is a global helper function which can be accessed from any place in code
});



//Posts
Route::prefix('posts')->group(function () {

    Route::get(
        '/',
        [PostController::class, 'index']
    )->name('posts.index');// ::class is a php magic constant // TestController::class returns string contains its namespace

    Route::get(
        '/create',
        [PostController::class, 'create']
    )->name('posts.create');

    Route::post(
        '/store',
        [PostController::class, 'store']
    )->name('posts.store');

    Route::get(
        '/{post}',
        'App\Http\Controllers\PostController@show'
    )->name('posts.show');// PostController::class ==> App\Http\Controllers\PostController

    Route::get(
        '/{post}/edit',
        [PostController::class, 'edit']
    )->name('posts.edit');// ::class is a php magic constant // TestController::class returns string contains its namespace

    Route::post("/{post}", 
    [PostController::class, 'update']
    )->name('posts.update');

    Route::get(
        '/{post}/delete',
        [PostController::class, 'destroy']
    )->name('posts.destroy');// ::class is a php magic constant // TestController::class returns string contains its namespace
});
