<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\WishList as WishedList;

class WishList extends Component
{
    public $item_id;
    public function render()
    {
        return view('livewire.front.wish-list');
    }
}
