<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produce;
use App\Http\Resources\ProduceResource;

class ProduceApiController extends Controller
{
     //This function returns shop items
     public function getProduce(){
        $get_produce =ProduceResource::collection(Produce::where('status','available')->orderBy('created_at','DESC')->get());
        return response()->json(['data'=>$get_produce]);
    }
}
