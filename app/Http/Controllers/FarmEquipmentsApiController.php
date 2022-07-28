<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Http\Resources\FarmEquipmentsResource;

class FarmEquipmentsApiController extends Controller
{
      //This function returns Farm Equipments
      public function getFarmEquipments(){
        $get_farm_equipments =FarmEquipmentsResource::collection(Shop::where('status','active')->where('discount',null)
        ->where('item_category_id',12)->orderBy('created_at','DESC')->get());
        return response()->json(['data'=>$get_farm_equipments]);
    }
}
