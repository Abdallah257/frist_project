<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// not work you must enter app and providers and routeServiceProvider And add base_path namespace to work

// enter folder controller see inside folder name Admin

//Route::namespace('Admin')->group(function (){

//    Route::get('admin',[AdminController::class,'index']);
//   Route::get('show',[AdminController::class,'show']);
//});

////show in url admins/admin

//Route::prefix('admins')->group(function (){
//    Route::get('admin',[AdminController::class,'index']);
//});

//// other shape

//Route::group(['prefix'=>'admins'],function (){
//    Route::get('admin',[AdminController::class,'index']);
//});

// folder controller -> folder admin ->url admins/show or admins/index

//Route::namespace('Admin')->group(function (){
//    Route::group(['prefix'=>'admins'],function (){
//
//        Route::get('admin',[AdminController::class,'index']);
//
//        Route::get('show',[AdminController::class,'show']);
//    });
//});

//Excellent shape in company
Route::group(['prefix'=>'admins'], function (){

        Route::get('admin',[AdminController::class,'index']);

        Route::get('show',[AdminController::class,'show']);

});












