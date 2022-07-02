<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Equipment;

class EquipmentDetails extends Component
{
    public $equipment_id;
    //This function adds id 
    public function mount($equipment_id){
        $this->equipment_id = $equipment_id;
    }
    public function render()
    {
        $get_single_equipmet_details =$this->getEquipment();
        return view('livewire.front.equipment-details',compact('get_single_equipmet_details'));
    }

      /*
    * this function gets the Equipments
    */
   private function getEquipment(){
    return Equipment::where('id',$this->equipment_id)->get();
    }
}
