<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Http\Resources\ShopResource;

class ShopApiController extends Controller
{
         //This function returns shop items
         public function getShopItems(){
            $get_shop_items =ShopResource::collection(Shop::where('status','active')->where('discount',null)
            ->where('item_category_id','!=',11)->where('item_category_id','!=',12)->orderBy('created_at','DESC')->get());
            return response()->json(['data'=>$get_shop_items]);
        }
}
