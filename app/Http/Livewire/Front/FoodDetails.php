<?php

namespace App\Http\Livewire\Front;

use App\Models\Shop;
use Livewire\Component;

class FoodDetails extends Component
{
    public $food_id;

    //This function calls for food id
    public function mount($food_id)
    {
        $this->food_id = $food_id;
    }

    public function render()
    {
        $get_single_food_details = $this->getFood();

        return view('livewire.front.food-details', compact('get_single_food_details'));
    }

    /*
    * This function gets the Food details
    */
    private function getFood()
    {
        return Shop::where('item_category_id',11)->where('classification','unclassified')->where('id', $this->food_id)->where('discount',null)->get();
    }
}
