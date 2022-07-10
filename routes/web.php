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

Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::get('/cart/my-cart', [CartController::class, 'cart']); 
Route::get('/information',function(){ return view('information');});
Route::get('/join-us-as-rider-or-partner',function(){ return view('rider_or_partner');})->name('Become Rider OR Partner');


Route::group(['middleware' => ['auth']], function () {
Route::get('/accomodation-dashboard',[DashboardController::Class,'getAccomodationDashboard'])->name('My Accomodation Dashboard');
Route::get('/produce-dashboard',[DashboardController::Class,'getProduceDashboard'])->name('My Produce Dashboard');
Route::get('/logout',[LogoutController::Class, 'logoutUser']);
Route::get('/submit-order',[OrderController::Class,'submitOrder']);
Route::get('/dashboard',[DashboardController::Class,'getDashboard'])->name('Admin Dashboard');
Route::get('/my-order',[OrderController::Class,'getFrontOrder'])->name('My Order');
Route::get('/pay-your-subscription',[DashboardController::Class,'getPaymentForm'])->name('Payments Form');
Route::get('/pay-subscription',[DashboardController::Class,'getAccomodationPaymentForm'])->name('Accomodation Payments Form');
});
