<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\CustomerOrder;
use Carbon\Carbon;

class PrintCustomerOrders extends Component
{
    public $user_id;

    public function mount($user_id){
        $this->user_id = $user_id;
    }

    public function render()
    {
        $print_customer_order  =$this->getCustomerOrder();
        return view('livewire.admin.print-customer-orders',compact('print_customer_order'));
    }
    private function getCustomerOrder(){
        return CustomerOrder::join('users','users.id','customer_orders.user_id')
        ->join('shops','shops.id','customer_orders.item_id')
        ->where('customer_orders.status','active')
        ->whereDate('customer_orders.created_at' , '=',Carbon::yesterday())
        ->whereTime('customer_orders.created_at' , '>',Carbon::now()->subHours(5))
        ->where('customer_orders.user_id',$this->user_id)->limit(1)
        ->get(['customer_orders.*','users.name','users.telephone','users.address','users.town',
        'users.division','users.street','users.plot_number','users.email','shops.item_name']);
    }
}
