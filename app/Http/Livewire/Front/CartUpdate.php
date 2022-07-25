<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

class CartUpdate extends Component
{
    public $cartItems = [];

    public $quantity = 1;

    public function mount($item)
    {
        $this->cartItems = $item;

        $this->quantity = $item['quantity'];
    }

    public function updateCart()
    {
        \Cart::update($this->cartItems['id'], [
            'quantity' => [
                'relative' => false,
                'value' => $this->quantity,
            ],
        ]);

        $this->emit('cartUpdated');
        $this->emit('Cart');
        $this->emit('MiddleMenu');
    }

    public function render()
    {
        return view('livewire.front.cart-update');
    }
}
