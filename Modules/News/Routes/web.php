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

Route::prefix('news')->group(function() {
    Route::get('/our-news', 'NewsController@index')->name('News Update');
});
Route::group(['prefix'=>'news', 'middleware'=>['auth']],function(){
    Route::get('/get-news', 'NewsController@getNews')->name('News');
 });
