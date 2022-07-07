<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Food;

class FoodWithDiscount extends Component
{
    public function render()
    {
        $get_food_with_discount =$this-> getFoodWithDiscount();
        return view('livewire.front.food-with-discount',compact('get_food_with_discount'));
    }
    public function getFoodWithDiscount(){
        return Food::where('discount_percentage','!=',null)->orderBy('created_at','DESC')->get();
    }
}
