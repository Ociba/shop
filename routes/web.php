<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

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

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });getFrontOrder
Route::get('/dashboard',[DashboardController::Class,'getDashboard'])->name('Admin Dashboard')->middleware('auth');
Route::get('/my-order',[DashboardController::Class,'getFrontOrder'])->name('My Order')->middleware('auth');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::get('/cart/my-cart', [CartController::class, 'cart']);
