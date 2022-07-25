<?php

namespace App\Http\Livewire\Admin;

use App\Models\CustomerOrder;
use App\Traits\WithSorting;
use Livewire\Component;
use Livewire\WithPagination;

class SalesPayments extends Component
{
    use WithPagination, WithSorting;

    protected $paginationTheme = 'bootstrap';

    public $sortBy = 'name';

    public function render()
    {
        $get_all_sales_payments = $this->getAllSales();

        return view('livewire.admin.sales-payments', compact('get_all_sales_payments'));
    }

    /**
     * This function returns all payments details for items ordered and delivered
     */
    public function getAllSales()
    {
        return CustomerOrder::join('users', 'users.id', 'customer_orders.user_id')
        ->join('shops', 'shops.id', 'customer_orders.item_id')
        ->orderBy($this->sortBy, $this->sortDirection)
        ->search($this->search)
       ->Paginate($this->perPage, ['customer_orders.*', 'users.name', 'shops.item_name']);
    }
}
