<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
 
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
 
Route::post('/register',[UserController::class,'register']); // Singup URL 
Route::post('/reactlogin',[UserController::class,'login']); // lOGIN url