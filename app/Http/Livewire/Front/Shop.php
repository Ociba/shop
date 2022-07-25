<?php

namespace App\Http\Livewire\Front;

use App\Models\Shop as Shops;
use Livewire\Component;

class Shop extends Component
{
    public function render()
    {
        $get_all_shop_items = $this->getAvailableShopItems();

        return view('livewire.front.shop', compact('get_all_shop_items'));
    }

    /*
    * this function gets the accomodation Details
    */
    private function getAvailableShopItems()
    {
        return Shops::join('shop_items_categories', 'shop_items_categories.id', 'shops.item_category_id')
     ->join('users', 'users.id', 'shops.created_by')
     ->where('shops.status', 'active')
     ->where('shops.discount', null)
     ->where('shops.item_category_id', '!=', 11)
     ->where('shops.item_category_id', '!=', 12)
     ->orderBy('shops.created_at', 'DESC')->limit(4)
    ->get(['shops.*', 'shop_items_categories.item']);
    }
}
