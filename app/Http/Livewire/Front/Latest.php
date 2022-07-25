<?php

namespace App\Http\Livewire\Front;

use App\Models\Acomodation;
use Livewire\Component;

class Latest extends Component
{
    public function render()
    {
        $get_latest_accomodation = $this->getAvailableAccomodation();

        return view('livewire.front.latest', compact('get_latest_accomodation'));
    }

    /*
    * this function gets the accomodation Details
    */
    private function getAvailableAccomodation()
    {
        return Acomodation::join('categories', 'categories.id', 'acomodations.category_id')
     ->join('users', 'users.id', 'acomodations.user_id')
     ->orderBy('acomodations.created_at', 'Desc')
    ->get(['acomodations.*', 'users.name', 'users.telephone', 'categories.category']);
    }
}
