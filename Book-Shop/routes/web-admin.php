<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserInformationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Sub_CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PromotionController;
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

Route::group(['prefix' => 'admin'],function (){

    Route::get('login', [AuthenticateController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AuthenticateController::class, 'login']);

    Route::group(['middleware' => ['auth', 'isAdmin']], function(){
        Route::get('/', function (){
            return view('backend.index');
        });
        Route::get('/logout', [AuthenticateController::class, 'logout']);
        Route::get('/profile',[UserInformationController::class, 'showProfile']);
        // Route::get('/profile/edit',[UserController::class, 'editProfile']);
        Route::put('/profile',[UserInformationController::class, 'updateProfile']);
        Route::get('/changepassword', [AuthenticateController::class, 'changePassword']);
        Route::put('/changepassword', [AuthenticateController::class, 'updatePassword']);

        Route::post('/avatar/{id}', [UserInformationController::class, 'updateAvatar']);

        
        Route::resource('users', UserController::class);
        Route::get('/users/{id}/information', [UserInformationController::class, 'createProfile']);
        Route::put('/users/{id}/information', [UserInformationController::class, 'storeProfile']);
        
        Route::resource('categories', CategoryController::class);
        Route::resource('sub_categories', Sub_CategoryController::class);

        Route::resource('promotions', PromotionController::class);

        Route::resource('products', ProductController::class);

        Route::get('/orders', [OrderController::class, 'index']);
        Route::get('/orders/{id}', [OrderController::class, 'show']);
        Route::put('/orders/{id}', [OrderController::class, 'update']);
        Route::delete('/orders/{id}', [OrderController::class, 'destroy']);
    });


});
