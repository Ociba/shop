<?php

namespace App\Http\Livewire\Front;

use App\Models\Shop;
use Livewire\Component;

class AgricultureEquipment extends Component
{
    public function render()
    {
        $all_equipments = $this->getAllEquipmentsWithOutDiscount();
        $get_equipments = $this->getEquipment();

        return view('livewire.front.agriculture-equipment', compact('get_equipments', 'all_equipments'));
    }

    /*
    * this function gets the Equipments
    */
    private function getEquipment()
    {
        return Shop::where('discount', null)->where('item_category_id',12)->orderBy('created_at', 'Desc')->limit(4)->get();
    }

    private function getAllEquipmentsWithOutDiscount()
    {
        return Shop::where('discount', null)->where('item_category_id',12)->orderBy('created_at', 'Desc')->get();
    }
}
