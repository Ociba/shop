<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Acomodation;

class RelatedAccomodation extends Component
{
    public function render()
    {  
        $related_accomodation =$this->relatedAccomodation();
        return view('livewire.front.related-accomodation',compact('related_accomodation'));
    }
     /*
    * this function gets the accomodation Details
    */
   private function relatedAccomodation(){
    return Acomodation::join('categories','categories.id','acomodations.category_id')
     ->join('users','users.id','acomodations.user_id')
    ->get(['acomodations.*','users.name','users.telephone','categories.category']);
    }
}
