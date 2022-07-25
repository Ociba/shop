<?php

namespace App\Http\Livewire\Admin;

use App\Models\CustomerOrder;
use App\Traits\WithSorting;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class ViewCustomerOrdersDetails extends Component
{
    use WithPagination, WithSorting;

    public $user_id;

    protected $paginationTheme = 'bootstrap';

    public $sortBy = 'quantity';

    public function mount($user_id)
    {
        $this->user_id = $user_id;
    }

    public function render()
    {
        $get_customer_order = $this->getCustomerOrder();

        return view('livewire.admin.view-customer-orders-details', compact('get_customer_order'));
    }

    private function getCustomerOrder()
    {
        return CustomerOrder::join('users', 'users.id', 'customer_orders.user_id')
        ->join('shops', 'shops.id', 'customer_orders.item_id')
        ->where('customer_orders.status', 'active')
        ->whereDate('customer_orders.created_at', '=', Carbon::today())
        ->whereTime('customer_orders.created_at', '>', Carbon::now()->subHours(1))
        ->where('customer_orders.user_id', $this->user_id)
        ->orderBy($this->sortBy, $this->sortDirection)
        ->search($this->search)
        ->Paginate($this->perPage, ['customer_orders.*', 'users.name', 'shops.item_name']);
    }
}
