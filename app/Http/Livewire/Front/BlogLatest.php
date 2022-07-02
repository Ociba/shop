<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Food;

class BlogLatest extends Component
{
    public function render()
    {
        $get_food_now   =$this->getFood();
        return view('livewire.front.blog-latest',compact('get_food_now'));
    }
     /*
    * This function gets the Food data
    */
    private function getFood(){
        return Food::get();
        }
}
