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

Route::prefix('advertise')->group(function () {
    Route::get('/advertise-with-us', 'AdvertiseController@index')->name('Advertise Your Produce OR Accomodation');
});
