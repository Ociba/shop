<?php

namespace App\Http\Livewire\Front;

use App\Models\Acomodation;
use Livewire\Component;

class ProductDetails extends Component
{
    public $acomodations_id;

    public function mount($acomodations_id)
    {
        $this->acomodations_id = $acomodations_id;
    }

    public function render()
    {
        $accomoda = $this->getAvailableAccomodation();

        return view('livewire.front.product-details', compact('accomoda'));
    }

    /*
    * this function gets the accomodation Details
    */
    private function getAvailableAccomodation()
    {
        return Acomodation::join('categories', 'categories.id', 'acomodations.category_id')
     ->join('users', 'users.id', 'acomodations.user_id')
     ->where('acomodations.id', $this->acomodations_id)
    ->get(['acomodations.*', 'users.name', 'users.telephone', 'categories.category']);
    }
}
