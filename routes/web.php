<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BinController;
use App\Http\Controllers\vermuserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\pageController;
use Illuminate\Http\Request;

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

// Route::get('/', function () {
//     return view('welcome');
// });


//public routes

Route::get('/',[pageController::class, 'index']);



Route::get('/dashboard',[pageController::class, 'dashbord']);

Route::get('/adminbins',[pageController::class, 'adminbin']);

Route::get('/admsinglebin',[pageController::class, 'admsinglebin']);




Route::post('/regis',[AuthController::class,'register']);
Route::post('/log',[AuthController::class,'login']);
Route::get('/bins',[BinController::class,'index']);
Route::get('/bin/{id}',[BinController::class,'show']);
Route::get('/vermusers',[vermuserController::class, 'index']);
Route::get('/vermuser/search/{name}',[vermuserController::class, 'search']);
Route::get('/vermuser/{id}',[vermuserController::class, 'show']);


//Route::get('/bins',[BinController::class,'index']);

Route::get('/login',function(){
    return view('Auth.login');
});

Route::get('/register',function(){
     return view('Auth.register');
 });

//  Route::get('/create_bin',function(){
//     return view('Normal.create_bin');
// });













//protected routes

    Route::group(['middleware' => ['auth:sanctum']], function () {
//bins 
    Route::get('/create_bin',[BinController::class,'create']);
    Route::post('/create_bi',[BinController::class,'store']);
    Route::post('/bins/id',[BinController::class,'update']);
    Route::get('/delete/{id}',[BinController::class,'destroy']);



//user

    Route::post('/create_vermuser',[vermuserController::class, 'store']);
    Route::put('/update_vermuser',[vermuserController::class, 'update']);
    Route::get('/delete_vermuser/{id}',[vermuserController::class, 'destroy']);
    Route::get('/logout',[AuthController::class,'logout']);
  
});
