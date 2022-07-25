<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

class MiddleMenu extends Component
{
    protected $listeners = ['MiddleMenu' => '$refresh'];

    public $cartItems = [];

    public function removeCart($id)
    {
        \Cart::remove($id);

        session()->flash('success', 'Item has removed !');

        $this->emit('Cart');
        $this->emit('MiddleMenu');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        $this->emit('Cart');
        $this->emit('MiddleMenu');
    }

    public function render()
    {
        $this->cartItems = \Cart::getContent();

        return view('livewire.front.middle-menu');
    }
}
