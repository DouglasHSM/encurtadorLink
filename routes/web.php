<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[\App\Http\Controller\indexController::class,'index']);
Route::get('/redirect',[\App\Http\Controller\indexController::class,'redirect']);
Route::get('/contact',[\App\Http\Controller\indexController::class,'contact']);

Route::get('/register',[\App\Http\Controller\indexController::class,'register']);
Route::get('/recover',[\App\Http\Controller\indexController::class,'recover']);
Route::get('/login',[\App\Http\Controller\indexController::class,'login']);
Route::get('/logout',[\App\Http\Controller\indexController::class,'logout']);

