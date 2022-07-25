<?php

namespace App\Http\Livewire\Admin;

use App\Models\ShopItemsCategory;
use App\Traits\SaveToFolder;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;

class AddShopItemsCategory extends ModalComponent
{
    use SaveToFolder,WithFileUploads;

    public $item;

    public $rules = [
        'item' => 'required',
    ];

    public function render()
    {
        return view('livewire.admin.add-shop-items-category');
    }

    /**
     * This function adds category Items
     */
    public function createShopItemCategory()
    {
        $this->validate();
        $this->emit('ShopItemCategory', 'refreshComponent');

        ShopItemsCategory::create([
            'item' => $this->item,
        ]);
        $this->closeModal();
        session()->flash('success', 'Operation successfully');
    }
}
