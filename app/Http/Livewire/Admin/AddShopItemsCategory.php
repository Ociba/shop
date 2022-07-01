<?php

namespace App\Http\Livewire\Admin;
use LivewireUI\Modal\ModalComponent;
use Livewire\Component;
use App\Models\ShopItemsCategory;
use Session;
use App\Traits\SaveToFolder;
use Livewire\WithFileUploads;

class AddShopItemsCategory extends ModalComponent
{
    use SaveToFolder,WithFileUploads;
    public $item;

    public $rules =[
        'item'  =>'required',
    ];

    public function render()
    {
        return view('livewire.admin.add-shop-items-category');
    }
    /**
     * This function adds category Items
     */
    public function createShopItemCategory(){
        $this->validate();
        $this->emit('ShopItemCategory','refreshComponent');
        
        ShopItemsCategory::create(array(
        'item'       =>$this->item,
        ));
        $this->closeModal();
        session()->flash('success','Operation successfully');
    }
}
