<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

class WishList extends Component
{
    public $item_id;

    public function render()
    {
        return view('livewire.front.wish-list');
    }
}
