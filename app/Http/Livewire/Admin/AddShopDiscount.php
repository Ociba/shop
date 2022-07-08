<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Shop;
use Session;
use LivewireUI\Modal\ModalComponent;

class AddShopDiscount extends ModalComponent
{
    public $discount;
    public $created_by;
    public $shop_id;

    protected $rules =['discount' =>'required'];

    public function render()
    {
        return view('livewire.admin.add-shop-discount');
    }
    public function mount($shop_id){
        $this->fill([
            'discount' => Shop::where('id',$shop_id)->value('discount'),
        ]);
    }
    public function addShopDiscount(){
        $this->validate();
        $this->emit('Shop','refreshComponent');
          // Add Discount
          Shop::where('id',$this->shop_id)->update(array(
              'discount'     =>$this->discount,
              'created_by'   =>auth()->user()->id
          ));
          $this->closeModal();
          Session::flash('success','Discount Added Successfully!!');
    }
}
