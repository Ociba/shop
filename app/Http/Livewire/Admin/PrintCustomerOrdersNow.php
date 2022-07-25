<?php

namespace App\Http\Livewire\Admin;

use App\Models\CustomerOrder;
use Carbon\Carbon;
use Livewire\Component;

class PrintCustomerOrdersNow extends Component
{
    public $user_id;

    public function mount($user_id)
    {
        $this->user_id = $user_id;
    }

    public function render()
    {
        $print_customer_order = $this->getCustomerOrderNow();

        return view('livewire.admin.print-customer-orders-now', compact('print_customer_order'));
    }

    private function getCustomerOrderNow()
    {
        return CustomerOrder::join('users', 'users.id', 'customer_orders.user_id')
        ->join('shops', 'shops.id', 'customer_orders.item_id')
        ->where('customer_orders.status', 'active')
        ->whereDate('customer_orders.created_at', '=', Carbon::today())
        ->whereTime('customer_orders.created_at', '>', Carbon::now()->subHours(1))
        ->where('customer_orders.user_id', $this->user_id)
        ->get(['customer_orders.*', 'users.name', 'users.telephone', 'users.address', 'users.town',
            'users.division', 'users.street', 'users.plot_number', 'users.email', 'shops.item_name', ]);
    }
}
