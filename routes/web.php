<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BinController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\pageController;
use Illuminate\Http\Request;
use App\Http\Controllers\BinconditionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProfileController;



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

// Route::get('/send',[UserController::class,'sendnotification']
//  );


//public routes



Route::get('/',[pageController::class, 'index']);
Route::get('/invalidateError',[pageController::class,'InvalidError']);







Route::post('/regis',[UserController::class,'register']);
Route::post('/log',[UserController::class,'login']);




//Route::get('/bins',[BinController::class,'index']);

Route::get('/login',function(){
    return view('Auth.login1');
})->name('login');

Route::get('/register',function(){
     return view('Auth.register1');
 });

//  Route::get('/create_bin',function(){
//     return view('Normal.create_bin');
// });













//protected routes

Route::group(['middleware' => ['auth:sanctum']], function () {
//dashboard





Route::get('/dashboard',[pageController::class, 'dashbord']);

Route::get('/adminbins',[pageController::class, 'adminbin']);

Route::get('/admsinglebin',[pageController::class, 'admsinglebin']);
Route::get('/useradmin/{id}',[AdminController::class, 'show']);

// //assign roles
// Route::get('/roles',[AdminController::class,'index']);
// Route::patch('/manage/role/permissions/{id}',[UserController::class,'RevokePermission']);
//Route::post('/changeRole',[UserController::class,'changeRole']);




//bins
    Route::get('/create_bin',[BinController::class,'create']);
    Route::post('/create_bi',[BinController::class,'store']);


    Route::get('/bins/{bin}/edit',[BinController::class,'edit']);
    Route::put('/bins/{bin}',[BinController::class,'update']);





    Route::get('/delete/{id}',[BinController::class,'destroy']);
    Route::get('/bins',[BinController::class,'index']);
    Route::get('/bin/{id}',[BinController::class,'show']);



//user
    Route::get('users/create/',[UserController::class,'create_Admin_User']);
    Route::post('/users/store',[UserController::class, 'store']);

    Route::post('/create_vermuser',[UserController::class, 'store']);

    Route::get('/users/{user}/edit',[UserController::class, 'edit']);
    Route::put('/users/{user}/update',[UserController::class, 'update']);


    Route::get('/delete_vermuser/{id}',[UserController::class, 'destroy']);
    Route::get('/logout',[UserController::class,'logout']);

    Route::get('/vermuser/search/{name}',[UserController::class, 'search']);
    Route::get('/vermuser/{id}',[UserController::class, 'show']);



    Route::get('/conditions/{bin}/create',[BinconditionController::class,'create']);



    Route::post('/create_cond',[BinconditionController::class,'store']);



    Route::get('/vermusers',[UserController::class, 'index']);
    Route::get('/vermusers/{user}/edit',[UserController::class, 'edit']);
   Route::get('/vermusers/status_code/{user_id}/{status_code}', [UserController::class, 'updateStatus'])->name('users.update.status');

    Route::get('/Profile/create', [ProfileController::class, 'create']);
    Route::post('/Profile/store', [ProfileController::class, 'store']);
    Route::resource('roles', RoleController::class);











});


