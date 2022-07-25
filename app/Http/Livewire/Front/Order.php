<?php

namespace App\Http\Livewire\Front;

use App\Models\CustomerOrder;
use Livewire\Component;
use Session;

class Order extends Component
{
    public $cartItems = [];

    public $user_id;

    public $item_id;

    public $price;

    public $quantity;

    protected $rules = [
        'item_id' => 'required',
        'price' => 'required',
        'quantity' => 'required',
    ];

    public function mount()
    {
    }

    public function render()
    {
        $this->cartItems = \Cart::getContent();

        return view('livewire.front.order');
    }

    public function submitOrder()
    {
        $this->validate();
        CustomerOrder::create([
            'item_id' => $this->item_id,
            'price' => $this->price,
            'quantity' => $this->quantity,
            'user_id' => auth()->user()->id,
        ]);
        Session::flash('success', 'Successfully Submitted Your Order');
    }
}
