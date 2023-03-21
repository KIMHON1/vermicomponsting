<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BinController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\pageController;
use Illuminate\Http\Request;
use App\Http\Controllers\BinconditionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;



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


 Route::get('password-reset/', [AuthController::class, 'passwordEmail']);


//  Route::get('/create_bin',function(){
//     return view('Normal.create_bin');
// });













//protected routes

Route::group(['middleware' => ['auth:sanctum']], function () {
//dashboard


Route::get('/notification',[pageController::class, 'databaseNoIndex']);


Route::post('/mark-as-read',[AdminController::class, 'markNotification'])->name('markNotification');


Route::get('/dashboard',[pageController::class, 'dashbord']);

Route::get('/adminbins',[pageController::class, 'adminbin']);

Route::get('/admsinglebin/{bin}',[BinconditionController::class, 'show']);
Route::get('/useradmin/{id}',[AdminController::class, 'show']);






//bins
    Route::get('/create_bin',[BinController::class,'create']);
    Route::post('/create_bi',[BinController::class,'store']);


    Route::get('/bins/{bin}/edit',[BinController::class,'edit']);
    Route::put('/bins/{bin}/update',[BinController::class,'update']);





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

    Route::get('/conditions/{bin}/edit',[BinconditionController::class,'edit']);
    Route::put('/conditions/{bin}/update',[BinconditionController::class,'update']);



    Route::post('/create_cond',[BinconditionController::class,'store']);



    Route::get('/vermusers',[UserController::class, 'index']);
    Route::get('/vermusers/{user}/edit',[UserController::class, 'edit']);
    Route::get('/vermusers/status_code/{user_id}/{status_code}', [UserController::class, 'updateStatus'])->name('users.update.status');

    Route::get('/Profile/create', [ProfileController::class, 'create']);
    Route::post('/Profile/store', [ProfileController::class, 'store']);
    Route::get('/Profile/show/{user}', [ProfileController::class, 'show']);
















});



Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);

});
