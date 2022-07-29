<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Shop;

class ClassifiedItems extends Component
{
    public function render()
    {
        $classified_food =$this->getclassfiedFood();
        $classified_clothes_bags_saloon =$this->getclassfiedSalooClothesBags();
        $classified_items =$this->getclassfiedItems();
        return view('livewire.front.classified-items',compact('classified_items','classified_clothes_bags_saloon','classified_food'));
    }
      /*
    * this function gets the phones ,electronics and computers items
    */
    private function getclassfiedItems()
    {
        return Shop::join('shop_items_categories', 'shop_items_categories.id', 'shops.item_category_id')
     ->join('users', 'users.id', 'shops.created_by')
     ->where('shops.status', 'active')
     ->where('shops.discount', null)
     ->where('shops.item_category_id', 3)
     ->Orwhere('shops.item_category_id', 6)
     ->Orwhere('shops.item_category_id', 4)
     ->where('shops.classification', 'classified')
     ->orderBy('shops.created_at', 'DESC')->limit(4)
    ->get(['shops.*', 'shop_items_categories.item']);
    }
    /**
    * this function gets the saloon, Clothes and bags items
    */
    private function getclassfiedSalooClothesBags()
    {
        return Shop::join('shop_items_categories', 'shop_items_categories.id', 'shops.item_category_id')
     ->join('users', 'users.id', 'shops.created_by')
     ->where('shops.status', 'active')
     ->where('shops.discount', null)
     ->where('shops.item_category_id', 5)
     ->Orwhere('shops.item_category_id', 13)
     ->Orwhere('shops.item_category_id', 1)
     ->where('shops.classification', 'classified')
     ->orderBy('shops.created_at', 'DESC')->limit(4)
    ->get(['shops.*', 'shop_items_categories.item']);
    }
     /**
    * this function gets the food items
    */
    private function getclassfiedFood()
    {
        return Shop::join('shop_items_categories', 'shop_items_categories.id', 'shops.item_category_id')
     ->join('users', 'users.id', 'shops.created_by')
     ->where('shops.status', 'active')
     ->where('shops.discount', null)
     ->where('shops.item_category_id', 11)
     ->where('shops.classification', 'classified')
     ->orderBy('shops.created_at', 'DESC')->limit(4)
    ->get(['shops.*', 'shop_items_categories.item']);
    }
}
