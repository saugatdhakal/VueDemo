<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

//Public Routes
Route::post('/registeruser',[UserController::class,'register'])->name('registerUser');

Route::post('/login',[UserController::class,'login'])->name('login');

Route::group(['middleware'=>['auth:sanctum']],function(){
    Route::get('/getUsers',[UserController::class,'getUsers'])->name('getUsers');
    Route::post('/logout',[UserController::class,'logout'])->name('logoutUser');
    Route::delete('/deleteUser/{id}',[UserController::class,'deleteUser'])->name('deleteUser');
    Route::get('/getUserDetail',[UserController::class,'getUserDetail'])->name('getUserDetail');



});
