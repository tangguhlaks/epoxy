<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
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

Route::get('/',[UserController::class,'index']);
Route::get('/harga',[UserController::class,'harga']);

Route::get('/admin/dashboard',[AdminController::class,'index']);
Route::get('/admin/profile',[AdminController::class,'profile']);
Route::get('/admin/header',[AdminController::class,'index']);
Route::get('/admin/menu',[AdminController::class,'index']);