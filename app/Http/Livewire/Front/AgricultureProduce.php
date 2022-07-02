<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Produce;

class AgricultureProduce extends Component
{
  

    public function render()
    {
        $get_all_produces  =$this->getAvailableProduce();
        return view('livewire.front.agriculture-produce',compact('get_all_produces'));
    }
    /*
    * this function gets the produce Details
    */
   private function getAvailableProduce(){
    return Produce::join('produce_categories','produce_categories.id','produces.produce_category_id')
     ->join('users','users.id','produces.created_by')
     ->where('produces.status','available')
     ->orderBy('produces.created_at','Desc')
    ->get(['produces.*','users.name','produce_categories.produce_category']);
    }
}
