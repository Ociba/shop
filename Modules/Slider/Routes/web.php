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

Route::prefix('slider')->group(function() {
    Route::get('/', 'SliderController@index');
});
Route::group(['prefix' => 'slider', 'middleware' => ['auth']], function () {
    Route::get('/get-slider', 'SliderController@getSlider')->name('Slider');
});
