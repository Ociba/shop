<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Shop;

class ShopItemsDetails extends Component
{
    public $shop_id;

    public function mount($shop_id){
        $this->shop_id = $shop_id;
    }
    public function render()
    {
        $single_shop_item =$this->getAvailableShopItems();
        return view('livewire.front.shop-items-details',compact('single_shop_item'));
    }
      /*
    * this function gets the accomodation Details
    */
   private function getAvailableShopItems(){
    return Shop::join('shop_items_categories','shop_items_categories.id','shops.item_category_id')
     ->join('users','users.id','shops.created_by')
     ->where('shops.id',$this->shop_id)
    ->get(['shops.*','shop_items_categories.item']);
    }
}
