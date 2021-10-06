<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;


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

Route::get('/', [ProductController::class, 'home']);

Route::get('/category/{category_id}/sub_category/{subcategory_id}/products', [ProductController::class, 'shop']);
Route::get('/products/{id}', [ProductController::class, 'show']);

Route::get('/login', [AuthenticateController::class, 'showLogin']);
Route::post('/login', [AuthenticateController::class, 'login']);
Route::get('/register', [AuthenticateController::class, 'showRegister']);
Route::post('/register', [AuthenticateController::class, 'register']);


Route::get('/cart', [CartController::class, 'showCart']);
Route::put('/cart', [CartController::class, 'update']);
Route::post('/cart', [CartController::class, 'add']);
Route::delete('/cart', [CartController::class, 'delete']);
Route::get('/getCart', [CartController::class, 'getCart']);

