<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ItemsWithDiscountResource;
use App\Models\Shop;

class ItemsWithDiscountApiController extends Controller
{
 //This function returns shop items
 public function getItemsWithDiscount(){
    $get_items_with_discount =ItemsWithDiscountResource::collection(Shop::where('status','active')->whereNotNull('discount')
    ->orderBy('created_at','DESC')->get());
    return response()->json(['data'=>$get_items_with_discount]);
}
}
