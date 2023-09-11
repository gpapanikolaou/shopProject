<?php

use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Shop;
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

Route::get('/', [ShopController::class,'index']);



//Create Form
Route::get('/shops/create', [ShopController::class,'create'])->middleware('auth');

//Store the shop data
Route::post('/shops',[ShopController::class,'store'])->middleware('auth');


//Show edit form
Route::get('/shops/{shop}/edit',[ShopController::class,'edit'])->middleware('auth');

//Update Shop
Route::put('/shops/{shop}',[ShopController::class,'update'])->middleware('auth');

//Delete shop
Route::delete('/shops/{shop}',[ShopController::class,'destroy'])->middleware('auth');

//Manage Listings
Route::get('shops/manage',[ShopController::class,'manage'])->middleware('auth');

//SIngle Shop
Route::get('shops/{shop}',[ShopController::class,'show'])->middleware('guest');

//Show Register Form
Route::get('/register',[UserController::class,'create'])->middleware('guest');

//Create New User
Route::post('/users',[UserController::class,'store']);

//Logout User
Route::post('/logout',[UserController::class,'logout'])->middleware('auth');

//Show login Form
Route::get('/login',[UserController::class,'login'])->name('login')->middleware('guest');

//Log In User
Route::post('/users/authenticate',[UserController::class,'authenticate']);




