<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthenticationController;
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
    return view('welcome');
});


Route::get('/dashboard', [UserController::class, 'dashboard' ])->name('dashboard');
Route::get('/listProduct', [UserController::class, 'listProduct' ])->name('listProduct');
Route::get('/detailProduct', [UserController::class, 'detailProduct' ])->name('detailProduct');
Route::get('/searchProduct', [UserController::class, 'searchProduct' ])->name('searchProduct');
Route::get('/slider', [UserController::class, 'slider' ])->name('slider');


Route::get('/registration', [AuthenticationController::class, 'registration' ]);
Route::get('/login', [AuthenticationController::class, 'login' ]);

Route::group(['prefix' => 'products', 'as' => 'product', 'middleware' => ['guest']], function () {
    Route::get('/list', [ProductController::class, 'getProducts'])->name('.list');
    Route::post('/list', [ProductController::class, 'getProducts'])->name('.search');
});