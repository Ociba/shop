<?php

namespace App\Http\Livewire\Admin;

use App\Models\Shop;
use App\Models\ShopItemsCategory;
use App\Traits\SaveToFolder;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;
use Session;

class AddShopItems extends ModalComponent
{
    use SaveToFolder,WithFileUploads;

    public $item_category_id;

    public $price;

    public $number;

    public $item_name;

    public $discount;

    public $new_price;

    public $description;

    public $photo;

    public $status;

    public $created_by;

    public $rules = [
        'item_name' => 'required',
        'price' => 'required',
        'number' => '',
        'description' => 'required',
        'photo' => 'required',
        'item_category_id' => '',
    ];

    public function render()
    {
        $items_category = $this->getShopItemCategory();

        return view('livewire.admin.add-shop-items', compact('items_category'));
    }

    public function createShopItem()
    {
        $this->validate();
        $this->emit('Shop', 'refreshComponent');

        Shop::create([
            'item_name' => $this->item_name,
            'item_category_id' => $this->item_category_id,
            'price' => $this->price,
            'number' => $this->number,
            'description' => $this->description,
            'photo' => $this->saveItemToFolder('shop_items_photos', $this->photo),
            'created_by' => auth()->user()->id,
        ]);
        $this->closeModal();
        Session::flash('success', 'Operation successfully');
    }

    /**
     * This function gets the  shop category
     */
    public function getShopItemCategory()
    {
        return ShopItemsCategory::get();
    }
}
