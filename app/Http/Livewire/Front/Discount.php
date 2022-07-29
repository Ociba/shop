<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Shop;

class Discount extends Component
{
    public function render()
    {
        $get_items_on_promotion =$this->getPromotionItem();
        return view('livewire.front.discount', compact('get_items_on_promotion'));
    }
        /*
    * this function gets the slier Details
    */
    private function getPromotionItem()
    {
        return Shop::where('classification','promotion')->orderBy('created_at','DESC')->get();
    }
}
