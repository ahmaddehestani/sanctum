<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\BlogController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::post('login', [AuthController::class, 'signin']);
Route::post('register', [AuthController::class, 'signup']);


Route::middleware('auth:sanctum')->group( function () {
    Route::get('blogs',[BlogController::class,'index']);
    Route::post('blogs',[BlogController::class,'store']);
    Route::get('logout', [AuthController::class, 'logout']);
//    Route::resource('blogs', BlogController::class);
});
