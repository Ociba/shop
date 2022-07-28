<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\AccomodationAndPropertyResource;
use App\Http\Resources\ShopResource;
use App\Http\Resources\ProduceResource;
use App\Http\Resources\FarmEquipmentsResource;
use App\Http\Resources\FoodResource;
use App\Http\Resources\ItemsWithDiscountResource;

use App\Http\Controllers\AccomodationApiController;
use App\Http\Controllers\ShopApiController;
use App\Http\Controllers\ProduceApiController;
use App\Http\Controllers\FarmEquipmentsApiController;
use App\Http\Controllers\FoodApiController;
use App\Http\Controllers\ItemsWithDiscountApiController;
use App\Http\Controllers\addToCartApiController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middleware' => ['auth']], function () {});
Route::get('/get-accomodation-and-property',[AccomodationApiController::Class,'getAccomodationAndPropertyInformation']);
Route::get('/get-shop-items',[ShopApiController::Class,'getShopItems']);
Route::get('/get-produce',[ProduceApiController::Class,'getProduce']);
Route::get('/get-farm-equipments',[FarmEquipmentsApiController::Class,'getFarmEquipments']);
Route::get('/get-food',[FoodApiController::Class,'getFoodItems']); 
Route::get('/get-items-with-discount',[ItemsWithDiscountApiController::Class,'getItemsWithDiscount']);
Route::post('cart', [addToCartApiController::class, 'addToCart'])->name('cart.store');
