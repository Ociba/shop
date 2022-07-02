<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Shop;

class Featured extends Component
{
    public function render()
    {
        $get_featured_online_shop =$this-> getAvailableShopItems();
        return view('livewire.front.featured',compact('get_featured_online_shop'));
    }
    /*
    * this function gets the accomodation Details
    */
   private function getAvailableShopItems(){
    return Shop::join('shop_items_categories','shop_items_categories.id','shops.item_category_id')
     ->join('users','users.id','shops.created_by')
     ->orderBy('shops.created_at','DESC')
    ->get(['shops.*','shop_items_categories.item']);
    }
}
