<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Shop;
use Cart;

class WithDiscount extends Component
{
    public $name;
    public $price;
    public $quantity;
    public $image;
    
    
    public function render()
    {
        $get_shop_items =$this->getShopItemsWithDiscount();
        return view('livewire.front.with-discount',compact('get_shop_items'));
    }
    public function getShopItemsWithDiscount(){
        return Shop::where('discount','!=', null)->orderBy('created_at','DESC')->get();
    }

    public function mount(){
        $this->id ='id';
        $this->name ='name';
        $this->price='price';
        $this->quantity ='quantity';
        $this->image ='photo';
    }
    public function addToCart()
    {
        
        Cart::add(array(
            'id' => $this->id, // inique row ID
            'name' =>$this->name,
            'price' =>$this->price,
            'quantity' => 1,
            'attributes' => array()
        ));
        session()->flash('success', 'Product is Added to Cart Successfully !');
        
        //return redirect()->to('cart/my-cart');
    }
    public function createCategory(){
        
        \Cart::add(array(
        'category'     =>$this->category,
        'created_by'   =>auth()->user()->id,
        ));
        Session::flash('success','Operation successfully');
    }
}
