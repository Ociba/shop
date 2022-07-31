<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Shop;

class SpecialDaysOffers extends Component
{
    public function render()
    {
        $get_special_days_products =$this->getallSpecialDaysItems();
        return view('livewire.front.special-days-offers',compact('get_special_days_products'));
    }
    /*
    * this function gets the phones ,electronics and computers items
    */
    private function getallSpecialDaysItems()
    {
        return Shop::join('shop_items_categories', 'shop_items_categories.id', 'shops.item_category_id')
     ->join('users', 'users.id', 'shops.created_by')
     ->where('shops.status', 'active')
     ->where('shops.discount', null)
     ->where('shops.classification', 'special days')
     ->orderBy('shops.created_at', 'DESC')
    ->get(['shops.*', 'shop_items_categories.item']);
    }
}
