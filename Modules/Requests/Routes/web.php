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

Route::prefix('requests')->group(function () {
    Route::get('/', 'RequestsController@index');
});
Route::group(['prefix' => 'requests', 'middleware' => ['auth']], function () {
    Route::get('/get-riders-request', 'RequestsController@riderRequests')->name('Riders Request');
    Route::get('/get-patners-request', 'RequestsController@partnersRequests')->name('Partners Request');
});
