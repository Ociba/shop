<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Promotion;

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
        return Promotion::orderBy('created_at','DESC')->limit(3)->get();
    }
}
