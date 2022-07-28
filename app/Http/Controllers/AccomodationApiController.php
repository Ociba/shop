<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acomodation;
use App\Http\Resources\AccomodationAndPropertyResource;

class AccomodationApiController extends Controller
{
    //This function returns accomodation property type
    public function getAccomodationAndPropertyInformation(){
        $get_accommodation_and_property_info =AccomodationAndPropertyResource::collection(Acomodation:: join('users','acomodations.user_id','users.id')
        ->join('categories','acomodations.category_id','categories.id')
        ->select('acomodations.*','users.name','users.telephone','categories.category')
        ->where('acomodations.status','available')->orderBy('acomodations.created_at','DESC')->get());
        return response()->json(['data'=>$get_accommodation_and_property_info]);
        }
}
