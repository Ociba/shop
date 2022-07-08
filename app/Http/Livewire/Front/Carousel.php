<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Shop;

class Carousel extends Component
{
    public function render()
    {
        $get_shop_items  =$this->getShopItems();
        return view('livewire.front.carousel',compact('get_shop_items'));
    }
   /*
    * this function gets the all Shop items without Discount
    */
    private function getShopItems(){
      return Shop::join('shop_items_categories','shop_items_categories.id','shops.item_category_id')
       ->join('users','users.id','shops.created_by')
       ->where('shops.status','active')
       ->where('shops.discount',null)
       ->orderBy('shops.created_at','DESC')
      ->get(['shops.*','shop_items_categories.item']);
      }
}
