<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Http\Resources\FoodResource;

class FoodApiController extends Controller
{
     //This function returns food items available
     public function getFoodItems(){
        $get_food_items =FoodResource::collection(Shop::where('status','active')->where('discount',null)
        ->where('item_category_id',11)->orderBy('created_at','DESC')->get());
        return response()->json(['data'=>$get_food_items]);
    }
}
