<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserInformationController;

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
Route::get('/orders', [OrderController::class, 'index']);
// Route::get('/users', [UserController::class, 'index']);

Route::get('/category/{category_id}/sub_category/{subcategory_id}/products', [ProductController::class, 'shop']);
Route::get('/products/{id}', [ProductController::class, 'show']);

Route::get('/login', [AuthenticateController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthenticateController::class, 'login']);
Route::get('/register', [AuthenticateController::class, 'showRegister']);
Route::post('/register', [AuthenticateController::class, 'register']);

Route::get('/profile',[UserInformationController::class, 'showProfile']);
Route::put('/profile',[UserInformationController::class, 'updateProfile']);

Route::get('/logout', [AuthenticateController::class, 'logout']);


Route::get('/cart', [CartController::class, 'showCart']);
Route::put('/cart', [CartController::class, 'update']);
Route::post('/cart', [CartController::class, 'add']);
Route::delete('/cart', [CartController::class, 'delete']);
Route::get('/getCart', [CartController::class, 'getCart']);
Route::get('/comment/product/{product_id}', [CommentController::class, 'show']);
Route::group(['middleware' => 'auth'], function(){
Route::get('/payment', [PaymentController::class, 'show']);
Route::get('/order', [OrderController::class, 'create']);
Route::post('/comment', [CommentController::class, 'create']);

Route::get('/orders/{id}', [OrderController::class, 'show']);
});
