<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Food;
use LivewireUI\Modal\ModalComponent;
use Session;
use App\Traits\SaveToFolder;
use Livewire\WithFileUploads; 

class AddFood extends ModalComponent
{
    use SaveToFolder,WithFileUploads;
     public $user_id;
     public $food_type;
     public $ingredients;
     public $amount;
     public $photo;

     protected $rules =[
        'food_type'    =>'required',
        'ingredients'  =>'required',
        'amount'       =>'required',
        'photo'        =>'required|max:1024',
    ];

    public function render()
    {
        return view('livewire.admin.add-food');
    }
    public function addFoodDetails(){
        $this->validate();
        $this->emit('Foods','refreshComponent');
        
        Food::create(array(
        'food_type'     =>$this->food_type,
        'ingredients'   =>$this->ingredients,
        'amount'        =>$this->amount,
        'photo'         =>$this->saveItemToFolder('shop_items_photos',$this->photo),
         'user_id'      =>auth()->user()->id,
        ));
        $this->closeModal();
        Session::flash('success','Operation successfully');
    }
}
