<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Acomodation;

class CategorizedAccomodationAndProperty extends Component
{
    public $category_id;

    public function mount($category_id){
        $this->category_id = $category_id;
    }
    public function render()
    {
        $get_categorized_acomodation_and_property =$this->getCategorizedAccomodationAndProperty();
         return view('livewire.front.categorized-accomodation-and-property', compact('get_categorized_acomodation_and_property'));
    }
    /*
    * this function gets the accomodation Details
    */
   private function getCategorizedAccomodationAndProperty(){
    return Acomodation::join('categories','categories.id','acomodations.category_id')
     ->join('users','users.id','acomodations.user_id')
     ->where('acomodations.category_id',$this->category_id)
     ->where('acomodations.status','available')
    ->get(['acomodations.*','users.name','users.telephone','categories.category']);
    }
}
