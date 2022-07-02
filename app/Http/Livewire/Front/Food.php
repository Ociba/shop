<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Food as Foods;

class Food extends Component
{
    public function render()
    {
        $get_food_data  =$this->getFood();
        return view('livewire.front.food',compact('get_food_data'));
    }
     /*
    * This function gets the Food data
    */
   private function getFood(){
    return Foods::get();
    }
}
