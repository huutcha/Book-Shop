<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\UserController;
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
    Route::get('/', function (){
        return view('backend.index');
    });
    Route::get('login', [AuthenticateController::class, 'showLoginForm']);
    Route::post('login', [AuthenticateController::class, 'login']);

    Route::get('/logout', [AuthenticateController::class, 'logout']);
    Route::get('/profile',[UserController::class, 'showProfile']);
    Route::get('/profile/edit',[UserController::class, 'editProfile']);
    Route::put('/profile/edit',[UserController::class, 'updateProfile']);
    Route::get('/resetpassword', [AuthenticateController::class, 'resetPassword']);
    Route::put('/resetpassword', [AuthenticateController::class, 'updatePassword']);
});
