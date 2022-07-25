<?php

namespace App\Http\Livewire\Front;

use App\Models\Produce;
use Livewire\Component;

class AgricultureProduce extends Component
{
    public function render()
    {
        $get_available_produce_without_discount = $this->getAvailableProduceWithDiscount();
        $get_all_produces = $this->getAvailableProduce();

        return view('livewire.front.agriculture-produce', compact('get_all_produces', 'get_available_produce_without_discount'));
    }

    /*
    * this function gets the produce Details
    */
    private function getAvailableProduce()
    {
        return Produce::join('produce_categories', 'produce_categories.id', 'produces.produce_category_id')
     ->join('users', 'users.id', 'produces.created_by')
     ->where('produces.status', 'available')
     ->where('produces.percentage_discount', null)
     ->orderBy('produces.created_at', 'Desc')->limit(4)
    ->get(['produces.*', 'users.name', 'produce_categories.produce_category']);
    }

    /*
    * this function gets all the produce Details
    */
    private function getAvailableProduceWithDiscount()
    {
        return Produce::join('produce_categories', 'produce_categories.id', 'produces.produce_category_id')
     ->join('users', 'users.id', 'produces.created_by')
     ->where('produces.status', 'available')
     ->where('produces.percentage_discount', null)
     ->orderBy('produces.created_at', 'Desc')
    ->get(['produces.*', 'users.name', 'produce_categories.produce_category']);
    }
}
