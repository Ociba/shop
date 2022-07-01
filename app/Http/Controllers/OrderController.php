<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerOrder;

class OrderController extends Controller
{
    public function getFrontOrder(){
        return view('send_order');
    }
      /**
     * This function creates checkout order
     */
    public function submitOrder(){
        $cartItems = \Cart::getContent();
        foreach($cartItems as $item){
            $price =$item->price *$item->quantity;
            CustomerOrder::create([
                'user_id'      =>auth()->user()->id,
                'item_id'      =>$item->id,
                'item_name'	   =>$item->name,
                'quantity'     =>$item->quantity,
                'price'        =>$price,
            ]);
        }
    return redirect()->back()->with('msg', 'You have successfully submitted Your Order,Our deleivery Person will call you soon');
    }
}
