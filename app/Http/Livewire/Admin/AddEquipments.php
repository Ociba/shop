<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Equipment;
use LivewireUI\Modal\ModalComponent;
use Session;
use App\Traits\SaveToFolder;
use Livewire\WithFileUploads; 

class AddEquipments extends ModalComponent
{
    use SaveToFolder,WithFileUploads;
     public $equipment;
     public $quantity;
     public $price;
     public $description;
     public $photo;
     public $created_by;

     protected $rules =[
        'equipment'     =>'required',
        'quantity'      =>'required',
        'price'         =>'required',
        'description'   =>'required',
        'photo'         =>'required|max:1024',
    ];

    public function render()
    {
        return view('livewire.admin.add-equipments');
    }
    public function createEquipment(){
        $this->validate();
        $this->emit('Equipment','refreshComponent');
        $this->emit('Clients/MyProduce','refreshComponent');
        
        Equipment::create(array(
        'equipment'           =>$this->equipment,
        'quantity'            =>$this->quantity,
        'price'               =>$this->price,
        'description'         =>$this->description,
        'photo'               =>$this->saveItemToFolder('shop_items_photos',$this->photo),
        'created_by'         =>auth()->user()->id,
        ));
        $this->closeModal();
        Session::flash('success','Operation successfully');
    }
}
