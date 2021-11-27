<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;


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
    return view('welcome', ["title"=>"Welcome to PCHub"]);
});

Route::get('/product', function () {
    return view('product', ["title"=>"Products"]);
});

Route::get('/about', function () {
    return view('about', ["title"=>"Products"]);
});

Route::get('/signin', function () {
    return view('signin', ["title"=>"Sign In"]);
});

Route::post('/signin', [LoginController::class, 'authenticate']);
Route::get('/signout', [LoginController::class, 'signout']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/custom', function () {
    return view('custom', ["title"=>"Custom"]);
});

Route::get('/addproducts', function () {
    return view('addproducts', ["title"=>"Add Products"]);
});

Route::post('/addproducts', [ProductController::class, 'store']);

