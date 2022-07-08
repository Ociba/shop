<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use App\Models\Equipment;
use Session;

class AddEquipmentDiscount extends ModalComponent
{
    public $equipment_id;
    public $equipment_discount;
    public $created_by;
    
    protected $rules =['equipment_discount' =>'required'];

    public function render()
    {
        return view('livewire.admin.add-equipment-discount');
    }
    public function mount($equipment_id){
        $this->fill([
            'equipment_discount' => Equipment::where('id',$equipment_id)->value('equipment_discount'),
        ]);
    }
    /**
     * This function adds discount to an equipment
     */
    public function addEquipmentDiscount(){
          $this->validate();
          $this->emit('Equipment','refreshComponent');
          // Add Discount
          Equipment::where('id',$this->equipment_id)->update(array(
              'equipment_discount'  =>$this->equipment_discount,
              'created_by'          =>auth()->user()->id
          ));
          $this->closeModal();
          Session::flash('success','Discount Added Successfully!!');
    }
}
