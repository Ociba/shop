<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ItemsWithDiscountResource;
use App\Models\Shop;
use DB;

class ItemsWithDiscountApiController extends Controller
{
 //This function returns shop items
 public function getItemsWithDiscount(){
    $get_items_with_discount =ItemsWithDiscountResource::collection(Shop::where('status','active')->whereNotNull('discount')
    ->orderBy('created_at','DESC')->get());
    return response()->json(['data'=>$get_items_with_discount]);
}

/**
 * This function gets discount calculations
 */
private function calculateDiscountAmount(){
    $percetage =DB::table('shops')->where('discount','!=',null)->value('discount');
    $percentage_discount =$percetage * 0.01;
    $product_amount =DB::table('shops')->where('discount','!=',null)->value('price');
    $calculate_percentage_mount =$product_amount * $percentage_discount;
    $new_discount_amount =$product_amount-$calculate_percentage_mount;
    return $new_discount_amount;
}
}
