<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Acomodation;

class GetYourProperty extends Component
{
    public function render()
    {
        $get_accomodation  =$this->getPropertyAndAccomodation();
        return view('livewire.front.get-your-property',compact('get_accomodation'));
    }
    public function getPropertyAndAccomodation(){
        return Acomodation::join('categories','categories.id','acomodations.category_id')
        ->distinct('category')
        ->where('acomodations.status','available')
        ->limit(6)
        ->get(['acomodations.category_id','categories.category']);
    }
}
