<?php

namespace App\Http\Livewire\Front;

use App\Models\Shop;
use Cart;
use Livewire\Component;

class WithDiscount extends Component
{
    public $name;

    public $price;

    public $quantity;

    public $image;

    public function render()
    {
        $get_shop_items = $this->getShopItemsWithDiscount();

        return view('livewire.front.with-discount', compact('get_shop_items'));
    }

    public function getShopItemsWithDiscount()
    {
        return Shop::where('discount', '!=', null)->orderBy('created_at', 'DESC')->get();
    }

    public function mount()
    {
        $this->id = 'id';
        $this->name = 'name';
        $this->price = 'price';
        $this->quantity = 'quantity';
        $this->image = 'photo';
    }

    public function addToCart()
    {
        Cart::add([
            'id' => $this->id, // inique row ID
            'name' => $this->name,
            'price' => $this->price,
            'quantity' => 1,
            'attributes' => [],
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');

        //return redirect()->to('cart/my-cart');
    }

    public function createCategory()
    {
        \Cart::add([
            'category' => $this->category,
            'created_by' => auth()->user()->id,
        ]);
        Session::flash('success', 'Operation successfully');
    }
}
