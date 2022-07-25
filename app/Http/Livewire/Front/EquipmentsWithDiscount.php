<?php

namespace App\Http\Livewire\Front;

use App\Models\Equipment;
use Livewire\Component;

class EquipmentsWithDiscount extends Component
{
    public function render()
    {
        $get_equipments_with_discount = $this->getEquipmentsWithDiscount();

        return view('livewire.front.equipments-with-discount', compact('get_equipments_with_discount'));
    }

    public function getEquipmentsWithDiscount()
    {
        return Equipment::where('equipment_discount', '!=', null)->orderBy('created_at', 'DESC')->get();
    }
}
