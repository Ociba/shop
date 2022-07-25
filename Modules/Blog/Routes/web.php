<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|getBlog
*/

Route::prefix('blog')->group(function () {
    Route::get('/our-blog', 'BlogController@index')->name('Blog');
});

Route::group(['prefix' => 'blog', 'middleware' => ['auth']], function () {
    Route::get('/blog', 'BlogController@getBlog')->name('Admin Blog');
});
