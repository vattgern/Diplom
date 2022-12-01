<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\GenreController;
use App\Http\Controllers\API\UserController;
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
// Users
Route::controller(UserController::class)->group(function (){
    Route::get('/users','all');
    Route::get('/users/{id}','index');
    Route::put('/users/{id}', 'update');
    Route::delete('/users/{id}','destroy');
});
//Genres
Route::controller(GenreController::class)->group(function (){
    Route::get('/genres','all');
    Route::get('/genres/{id}','index');
    Route::post('/genres/create','store');
    Route::put('/genres/{id}','update');
    Route::delete('/genres/{id}','destroy');
});;
