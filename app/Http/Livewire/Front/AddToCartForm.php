<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Shop;

class AddToCartForm extends Component
{
    public $quantity;
    public function render()
    {
        $get_shop_items =$this->getAvailableShopItems();
        return view('livewire.front.add-to-cart-form',compact('get_shop_items'));
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
