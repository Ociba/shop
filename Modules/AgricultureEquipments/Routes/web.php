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

Route::prefix('agricultureequipments')->group(function() {
    Route::get('/all-agriculture-equipments', 'AgricultureEquipmentsController@index')->name('Agriculture Equipments');
});
