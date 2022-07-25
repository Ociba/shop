<?php

namespace App\Http\Livewire\Front;

use App\Models\Shop;
use Livewire\Component;

class BestSeller extends Component
{
    public function render()
    {
        $get_equipments = $this->getEquipments();

        return view('livewire.front.best-seller', compact('get_equipments'));
    }

    /*
    * this function gets the Equipments
    */
    private function getEquipments()
    {
        return Shop::where('shops.item_category_id', '=', 12)->get();
    }
}
