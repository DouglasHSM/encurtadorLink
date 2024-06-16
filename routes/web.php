<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\linkController;
use App\Http\Controllers\useController;

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

//   Route::get('/', function () {
//       return view('welcome');
//   });

Route::get('/',[indexController::class,'index']);
Route::get('/redirect',[indexController::class,'redirect']);
Route::get('/contact',[indexController::class,'contact']);

Route::get('/register',[userController::class,'register']);
Route::get('/recover',[userController::class,'recover']);
Route::get('/login',[userController::class,'login']);
Route::get('/logout',[userController::class,'logout']);

Route::prefix('app')->group(function(){
    Route::get('/generate',[linkController::class,'generate']);
    Route::get('/remove',[linkController::class,'remove']);
    Route::get('/list',[linkController::class,'list']);
});
