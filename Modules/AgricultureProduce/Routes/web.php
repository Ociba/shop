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

Route::prefix('agricultureproduce')->group(function() {
    Route::get('/all-produce', 'AgricultureProduceController@index')->name('Agriculture Produce');
});
