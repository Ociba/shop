<?php

namespace App\Http\Livewire\Front;

use App\Models\Shop;
use Livewire\Component;

class BlogLatest extends Component
{
    public function render()
    {
        $get_food_now = $this->getFood();

        return view('livewire.front.blog-latest', compact('get_food_now'));
    }

    /*
    * This function gets the Food data
    */
    private function getFood()
    {
        return Shop::where('item_category_id', '=', 11)->where('discount', null)->where('classification', 'unclassified')->get();
    }
}
