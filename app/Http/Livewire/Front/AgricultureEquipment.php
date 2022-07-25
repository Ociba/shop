<?php

namespace App\Http\Livewire\Front;

use App\Models\Equipment;
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
        return Equipment::where('equipment_discount', null)->orderBy('created_at', 'Desc')->limit(4)->get();
    }

    private function getAllEquipmentsWithOutDiscount()
    {
        return Equipment::where('equipment_discount', null)->orderBy('created_at', 'Desc')->get();
    }
}
