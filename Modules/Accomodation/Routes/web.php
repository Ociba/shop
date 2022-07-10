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
Route::prefix('accomodation')->group(function() { 
    Route::get('/all-accomodation', 'AccomodationController@index')->name('Accomodations');
    Route::get('/get-categorized-accomodation-and-property/{category_id}', 'AccomodationController@getCategorizedAccomodationAndProperty')->name('Categorized Accomodation & Property');
});
 
Route::group(['prefix'=>'accomodation', 'middleware'=>['auth']],function(){  
    Route::get('/adnin-available-accomodation', 'AdminController@getAdminAccomodation')->name('Available Accomodations');
    Route::get('/adnin-accomodation-categories', 'AdminController@getAccomodationCategories')->name('Accomodation Categories');
    Route::get('/my-accomodation', 'AdminController@getLoggedinClientsAccomodation')->name('My Accomodation');
});
