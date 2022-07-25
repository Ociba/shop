<?php

namespace App\Http\Livewire\Front;

use App\Models\Produce;
use Livewire\Component;

class Special extends Component
{
    public function render()
    {
        $get_produce = $this->getAvailableProduce();

        return view('livewire.front.special', compact('get_produce'));
    }

    /*
    * this function gets the produce Details
    */
    private function getAvailableProduce()
    {
        return Produce::join('produce_categories', 'produce_categories.id', 'produces.produce_category_id')
     ->join('users', 'users.id', 'produces.created_by')
     ->where('produces.status', 'available')
     ->orderBy('produces.created_at', 'Desc')
    ->get(['produces.*', 'users.name', 'users.town', 'produce_categories.produce_category']);
    }
}
