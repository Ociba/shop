<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Equipment;

class Slider2 extends Component
{
    public function render()
    {
        $get_equipments =$this->getEquipment();
        return view('livewire.front.slider2',compact('get_equipments'));
    }
    /*
    * this function gets the Equipments
    */
   private function getEquipment(){
    return Equipment::get();
    }
}
