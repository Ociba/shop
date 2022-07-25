<?php

namespace App\Http\Livewire\Front;

use App\Models\Shop;
use  Livewire\Component;

class DiscountProductDetails extends Component
{
    public $shop_id;

    public function mount($shop_id)
    {
        $this->shop_id = $shop_id;
    }

    public function render()
    {
        $get_shop_item_details = $this->getAvailableShopItems();

        return view('livewire.front.discount-product-details', compact('get_shop_item_details'));
    }

    /*
    * this function gets the Shop Details
    */
    private function getAvailableShopItems()
    {
        return Shop::join('shop_items_categories', 'shop_items_categories.id', 'shops.item_category_id')
     ->join('users', 'users.id', 'shops.created_by')
     ->where('shops.id', $this->shop_id)
    ->get(['shops.*', 'shop_items_categories.item']);
    }
}
