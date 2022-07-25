<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

class Checkout extends Component
{
    public function render()
    {
        $this->cartItems = \Cart::getContent();

        return view('livewire.front.checkout');
    }
}
