<?php

namespace App\Http\Livewire\Clients;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use App\Models\Produce;
use Session;

class AddMyProduceDiscount extends ModalComponent
{
    public $produce_id;
    public $percentage_discount;
    public $created_by;

    protected $rules =['percentage_discount' =>'required'];
    
    public function render()
    {
        return view('livewire.clients.add-my-produce-discount');
    }
    public function mount($produce_id){
        $this->fill([
            'percentage_discount' => Produce::where('id',$produce_id)->value('percentage_discount'),
        ]);
    }
    public function addProduceDiscount(){
        $this->validate();
        $this->emit('MyProduce','refreshComponent');
        // Add Discount
        Produce::where('id',$this->produce_id)->update(array(
            'percentage_discount'  =>$this->percentage_discount,
            'created_by'          =>auth()->user()->id
        ));
        $this->closeModal();
        Session::flash('success','Discount Added Successfully!!');
    }
}
