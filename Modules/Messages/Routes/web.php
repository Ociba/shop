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

Route::prefix('messages')->group(function() {
    Route::get('/', 'MessagesController@index');
});
Route::group(['prefix' => 'messages','middleware' => ['auth']], function () {
    Route::get('/get-messages', 'MessagesController@getMessages')->name('Messages');
});
