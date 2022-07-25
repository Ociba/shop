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

Route::prefix('users')->group(function() {
    Route::get('/', 'UsersController@index');
});
Route::group(['prefix' => 'users', 'middleware' => ['auth']], function () {
    Route::get('/get-all-users', 'UsersController@getUsers')->name('All Users');
});
