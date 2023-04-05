<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('homepage');
// });

// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/', [ProductController::class, 'show']);
Route::get('/ourContact', function () {
    return view('contact');
});

Route::get('/register',  [AuthController::class, "register"]);
Route::get('/login',  [AuthController::class, "login"])->name('login');

Route::post('/login', [AuthController::class, "doLogin"]);
Route::post('/register', [AuthController::class, "doRegister"]);

Route::middleware(['auth:web'])->group(function () {
    
    Route::get('/logout', [AuthController::class, "logout"]);
    Route::put('/update', [AuthController::class, "update"]);
    Route::get('/edit', [AuthController::class, "edit"]);
    Route::get('/deletePhoto', [AuthController::class, "deletePhoto"]);
    
    Route::get('/product', [ProductController::class, "index"]);
    Route::post('/product/add', [ProductController::class, 'store']);
    Route::put('/product/edit/{id}', [ProductController::class, 'update']);
    Route::get('/product/delete/{id}', [ProductController::class, 'destroy']);
    
    Route::get('/category', [CategoryController::class, 'index']);
    Route::get('/category/add', [CategoryController::class, 'store']);
    Route::get('/category/edit/{id}', [CategoryController::class, 'update']);
    Route::get('/category/delete/{id}', [CategoryController::class, 'destroy']);
});
    