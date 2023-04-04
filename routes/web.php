<?php

use App\Http\Controllers\SecondController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/test1', function () {
//    return 'Hello';
//});
//
//// route parameters
//
//Route::get('/test2/{id}', function ($id) {
//    return 'Hello'. $id;
//});
//
//// send id or not
//Route::get('/test3/{id?}', function () {
//    return 'Hello';
//});
//
//// route names
//
//Route::get('/show/{id}', function ($id) {
//    return 'Hello'. $id;
//})->name('show');
//
//// send id or not
//Route::get('/showAll/{id?}', function () {
//    return 'Hello';
//})->name('showAll');
//
//Route::group(['middleware'=>'auth'],function (){
//
//});
//
//
//Route::get('second',[SecondController::class,'index']);
//
//Route::get('show',[SecondController::class,'show']);
//
//
//
//
//
//
//
//
//
//
//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home')
    ->middleware('verified');

Route::get('/', function () {
    return 'Home';
});
