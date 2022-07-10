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

Route::group(['prefix'=>'customershoppingorders', 'middleware'=>['auth']],function(){
    Route::get('/received-orders', 'CustomerShoppingOrdersController@index')->name('Customers Order'); 
    Route::get('/view-order-details/{user_id}', 'CustomerShoppingOrdersController@getOrderDetails')->name('Customers Order Details');
    Route::get('/print-order/{user_id}', 'CustomerShoppingOrdersController@getOrderPrintView')->name('Print Customers Order');
    Route::get('/print-order-now/{user_id}', 'CustomerShoppingOrdersController@getPrintOrderNow');
});
