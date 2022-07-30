<?php

namespace App\Http\Livewire\Front;

use App\Models\Shop;
use Livewire\Component;

class Food extends Component
{
    protected $listeners = ['Food' => '$refresh'];

    public function render()
    {
        $all_foods = $this->getAllFoods();
        $get_food_data = $this->getFood();

        return view('livewire.front.food', compact('get_food_data', 'all_foods'));
    }

    /*
    * This function gets the Food data
    */
    private function getFood()
    {
        return Shop::where('item_category_id',11)->where('classification','unclassified')->where('discount',null)->limit(4)
        ->get();
    }

    /*
    * This function gets all the  Foods without discount    */
    private function getAllFoods()
    {
        return Shop::where('item_category_id',11)->where('classification','unclassified')->where('discount',null)->get();
    }
}
