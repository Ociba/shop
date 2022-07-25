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

Route::prefix('shop')->group(function () {
    Route::get('/all-shop-items', 'ShopController@index')->name('Shop');
    Route::get('/view-details/{shop_id}', 'ShopController@getShopItemDetails')->name('Shop Item Detais');
    Route::get('/discount-product-details/{shop_id}', 'ShopController@getShopItemDiscountDetails')->name('Shop Discount Item');
});
Route::group(['prefix' => 'shop', 'middleware' => ['auth']], function () {
    Route::get('/shop-items', 'ShopController@getShopItems')->name('Available Items');
    Route::get('/shop-items-categories', 'ShopController@getShopItemsCategories')->name('Shop Item Categories');
    Route::get('/out-of-stock-shop-items', 'ShopController@getOutofStockItems')->name('Out of Stock');
});
