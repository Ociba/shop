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
    Route::get('/view-produce-details/{produces_id}', 'AgricultureProduceController@getProduceDetails')->name('Agriculture Produce Information');
});
Route::group(['prefix'=>'agricultureproduce', 'middleware'=>['auth']],function(){
    Route::get('/produce-category', 'AgricultureProduceController@getProduceCategory')->name('Agriculture Produce Category');
    Route::get('/produce', 'AgricultureProduceController@getProduce')->name('Produce');
    Route::get('/my-produce', 'AgricultureProduceController@getMyProduce')->name('My Produce');
});
