<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

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
Route::get('/information', function () {
return view('information');
});
Route::get('/join-us-as-rider-or-partner', function () {
return view('rider_or_partner');
})->name('Become Rider OR Partner');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/accomodation-dashboard', [DashboardController::class, 'getAccomodationDashboard'])->name('My Accomodation Dashboard');
    Route::get('/produce-dashboard', [DashboardController::class, 'getProduceDashboard'])->name('My Produce Dashboard');
    Route::get('/logout', [LogoutController::class, 'logoutUser']);
    Route::get('/submit-order', [OrderController::class, 'submitOrder']);
    Route::get('/dashboard', [DashboardController::class, 'getDashboard'])->name('Admin Dashboard');
    Route::get('/my-order', [OrderController::class, 'getFrontOrder'])->name('My Order');
    Route::get('/pay-your-subscription', [DashboardController::class, 'getPaymentForm'])->name('Payments Form');
    Route::get('/pay-subscription', [DashboardController::class, 'getAccomodationPaymentForm'])->name('Accomodation Payments Form');
    Route::get('/my_payments', [DashboardController::class, 'getPaymentsInfo'])->name('My Payments');
    Route::get('/my_accomodation_subscriptions', [DashboardController::class, 'getMyAccomodationPaymentsInfo'])->name('My Subscriptions');
    Route::get('/change-password', [DashboardController::class, 'getChangePassword'])->name('Change Password');
    Route::get('/change-your-password', [DashboardController::class, 'changePassword'])->name('Change My Password');
});
