<?php

namespace App\Http\Livewire\Admin;

use App\Models\CustomerOrder;
use App\Traits\WithSorting;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class CustomerOrders extends Component
{
    use WithPagination, WithSorting;

    protected $paginationTheme = 'bootstrap';

    public $sortBy = 'name';

    public function render()
    {
        $get_customer_orders = $this->getCustomerOrder();

        return view('livewire.admin.customer-orders', compact('get_customer_orders'));
    }

    private function getCustomerOrder()
    {
        return CustomerOrder::join('users', 'users.id', 'customer_orders.user_id')
        ->join('shops', 'shops.id', 'customer_orders.item_id')
        ->where('customer_orders.status', 'active')
        ->whereDate('customer_orders.created_at', '=', Carbon::today())
        ->whereTime('customer_orders.created_at', '>', Carbon::now()->subHours(1))
        ->distinct('name')
        ->orderBy($this->sortBy, $this->sortDirection)
        ->search($this->search)
        ->Paginate($this->perPage, ['customer_orders.created_at', 'customer_orders.user_id', 'users.name']);
    }
}
