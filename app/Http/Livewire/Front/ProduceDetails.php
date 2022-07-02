<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Produce;

class ProduceDetails extends Component
{
    public $produces_id;

    public function mount($produces_id){
        $this->produces_id = $produces_id;
    }

    public function render()
    {
        $get_single_produce_info  =$this->getAvailableProduce();
        return view('livewire.front.produce-details',compact('get_single_produce_info'));
    }
      /*
    * this function gets the produce Details
    */
   private function getAvailableProduce(){
    return Produce::join('produce_categories','produce_categories.id','produces.produce_category_id')
     ->join('users','users.id','produces.created_by')
     ->where('produces.status','available')
     ->where('produces.id',$this->produces_id)
     ->orderBy('produces.created_at','Desc')
    ->get(['produces.*','users.name','users.town','produce_categories.produce_category']);
    }
}
