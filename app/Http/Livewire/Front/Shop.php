<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Shop as Shops;

class Shop extends Component
{
    public function render()
    {
        $get_all_shop_items =$this->getAvailableShopItems();
        return view('livewire.front.shop',compact('get_all_shop_items'));
    }
      /*
    * this function gets the accomodation Details
    */
   private function getAvailableShopItems(){
    return Shops::join('shop_items_categories','shop_items_categories.id','shops.item_category_id')
     ->join('users','users.id','shops.created_by')
     ->orderBy('shops.created_at','DESC')
    ->get(['shops.*','shop_items_categories.item']);
    }
}
