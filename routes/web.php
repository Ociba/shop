<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogoutController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard',[DashboardController::Class,'getDashboard'])->name('Admin Dashboard')->middleware('auth');
Route::get('/my-order',[OrderController::Class,'getFrontOrder'])->name('My Order')->middleware('auth');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::get('/cart/my-cart', [CartController::class, 'cart']); 
Route::get('/logout',[LogoutController::Class, 'logoutUser']);
Route::get('/submit-order',[OrderController::Class,'submitOrder'])->middleware('auth');
Route::get('/information',function(){ return view('information');});
