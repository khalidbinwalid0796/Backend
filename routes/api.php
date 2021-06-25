<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ForgotController;
use App\Http\Controllers\Api\UserController;


//login route
Route::post('/login',[AuthController::class,'login']);

//register route
Route::post('/register',[AuthController::class,'register']); 

//forgot password 
Route::post('/forgotpassword',[ForgotController::class,'forgotPassword']); 

//reset password 
Route::post('/resetpassword',[ForgotController::class,'resetPassword']); 

//curent user
Route::get('/user',[UserController::class,'user'])->middleware('auth:api');