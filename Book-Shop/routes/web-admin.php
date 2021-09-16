<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Sub_CategoryController;
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

Route::group(['prefix' => 'admin'],function (){

    Route::get('login', [AuthenticateController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AuthenticateController::class, 'login']);

    Route::group(['middleware' => 'auth'], function(){
        Route::get('/', function (){
            return view('backend.index');
        });
        Route::get('/logout', [AuthenticateController::class, 'logout']);
        Route::get('/profile',[UserController::class, 'showProfile']);
        Route::get('/profile/edit',[UserController::class, 'editProfile']);
        Route::put('/profile/edit',[UserController::class, 'updateProfile']);
        Route::get('/resetpassword', [AuthenticateController::class, 'resetPassword']);
        Route::put('/resetpassword', [AuthenticateController::class, 'updatePassword']);

        Route::post('/avatar', [UserController::class, 'updateAvatar']);

        Route::resource('categories', CategoryController::class);
        Route::resource('sub_categories', Sub_CategoryController::class);
        Route::resource('products', ProductController::class);
    });


});
