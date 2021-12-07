<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DetailOrderController;
use App\Http\Controllers\OrderController;


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
    return view('welcome', ["title" => "Welcome to PCHub"]);
});

// Route::get('/', [ProductController::class, 'getSample']);


Route::get('/product', function () {
    return view('product', ["title" => "Products"]);
});

Route::get('/about', function () {
    return view('about', ["title" => "Products"]);
});

Route::get('/signin', function () {
    return view('signin', ["title" => "Sign In"]);
});

Route::post('/signin', [LoginController::class, 'authenticate']);
Route::get('/signout', [LoginController::class, 'signout']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/custom', [ProductController::class, 'getAll']);

Route::get('/addproducts', function () {
    return view('addproducts', ["title" => "Add Products"]);
});

Route::post('/addproducts', [ProductController::class, 'store']);

Route::get('/detail', function () {
    return view('detailproduct', ["title" => "Detail Product"]);
});

Route::get('/profile', [CustomerController::class, 'getMember']);

Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'show']);

Route::get('/addproducts', function () {
    $level = Session::get('user');
    if ($level == "admin") {
        return view('addproducts', ["title" => "Add Products"]);
    } else {
        return redirect()->back();
    }
});

Route::post('/detailproduct/{id}', [DetailOrderController::class, 'store']);

Route::get('/cart', [OrderController::class, 'showCart']);

Route::get('/showproducts', [ProductController::class, 'getAllForShow']);

Route::post('/search', [ProductController::class, 'search']);

