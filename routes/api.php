<?php

use App\Http\Controllers\API\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->group(function (){
    Route::get('/me',[AuthController::class,'me']);
    Route::get('/logout',[AuthController::class,'logout']);
});

// Auth
Route::post('/signUp',[AuthController::class,'signUp']);
Route::post('/signIn',[AuthController::class,'signIn']);
