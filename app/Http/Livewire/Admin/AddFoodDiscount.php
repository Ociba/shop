<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use App\Models\Food;
use Session;

class AddFoodDiscount extends ModalComponent
{
    public $discount_percentage;
    public $user_id;
    public $food_id;

    protected $rules=['discount_percentage' =>'required'];

    public function render()
    {
        return view('livewire.admin.add-food-discount');
    }
    public function mount($food_id){
        $this->fill([
            'discount_percentage' => Food::where('id',$food_id)->value('discount_percentage'),
        ]);
    }
    public function addFoodDiscount(){
        $this->validate();
        $this->emit('Foods','refreshComponent');
          // Add Discount
          Food::where('id',$this->food_id)->update(array(
              'discount_percentage'  =>$this->discount_percentage,
              'user_id'          =>auth()->user()->id
          ));
          $this->closeModal();
          Session::flash('success','Discount Added Successfully!!');
    }
}
