<?php

namespace App\Http\Livewire\Front;

use App\Models\Shop;
use Livewire\Component;

class Slider2 extends Component
{
    public function render()
    {
        $get_equipment = $this->getEquipment();

        return view('livewire.front.slider2', compact('get_equipment'));
    }

    /*
    * this function gets the Equipments
    */
    private function getEquipment()
    {
        return Shop::where('item_category_id', '=', 12)->where('discount', null)->get();
    }
}
