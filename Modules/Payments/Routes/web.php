<?php

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

Route::group(['prefix' => 'payments', 'middleware' => ['auth']], function () {
    Route::get('/pay-your-subscription', 'PaymentsController@index')->name('Payments');
    Route::get('/registration-payments', 'PaymentsController@allRegistrationPayments')->name('All Registration Payments');
    Route::get('/sales-payments', 'PaymentsController@allSalesPayments')->name('All Sales Payments');
});
