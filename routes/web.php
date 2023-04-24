<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::get('/test', 
[TestController::class, 'testAction']);// ::class is a php magic constant // TestController::class returns string contains its namespace
