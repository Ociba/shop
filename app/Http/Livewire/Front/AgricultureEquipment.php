<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Equipment;

class AgricultureEquipment extends Component
{
    public function render()
    {
        $get_equipments  =$this->getEquipment();
        return view('livewire.front.agriculture-equipment', compact('get_equipments'));
    }
      /*
    * this function gets the Equipments
    */
   private function getEquipment(){
    return Equipment::get();
    }
}
