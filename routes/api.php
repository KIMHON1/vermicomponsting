<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BinController;
use App\Http\Controllers\vermuserController;
use App\Http\Controllers\AuthController;
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

//public routes
Route::post('/regis',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);
Route::get('/bins',[BinController::class,'index']);
Route::get('/bins/{id}',[BinController::class,'show']);
Route::get('/vermuser',[vermuserController::class, 'index']);
Route::get('/vermuser/search/{name}',[vermuserController::class, 'search']);
Route::get('/vermuser/{id}',[vermuserController::class, 'show']);

Route::get('/bins',[BinController::class,'index']);














//protected routes

Route::group(['middleware' => ['auth:sanctum']], function () {
//bins 
    Route::post('/bins',[BinController::class,'store']);
    Route::post('/bins/id',[BinController::class,'update']);
    Route::post('/bins/id',[BinController::class,'destroy']);



//user

    Route::post('/vermuser',[vermuserController::class, 'store']);
    Route::put('/vermuser',[vermuserController::class, 'update']);
    Route::delete('/vermuser/{id}',[vermuserController::class, 'destroy']);
    Route::post('/logout',[AuthController::class,'logout']);
  
});









// Route::get('/vermuser',[vermuserController::class,'index']);
// Route::get('/vermuser/{id}',[vermuserController::class,'show']);
// Route::post('/vermuser',[vermuserController::class,'store']);
// Route::post('/vermuser',[vermuserController::class,'update']);

//Route::resource('/vermuser',vermuserController::class);






