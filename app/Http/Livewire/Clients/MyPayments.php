<?php

namespace App\Http\Livewire\Clients;

use App\Models\Payment;
use App\Traits\WithSorting;
use Livewire\Component;
use Livewire\WithPagination;

class MyPayments extends Component
{
    use WithPagination, WithSorting;

    protected $paginationTheme = 'bootstrap';

    public $sortBy = 'amount';

    public $search = '';

    public function render()
    {
        $get_my_payments_info = $this->getMyPaymentInfo();

        return view('livewire.clients.my-payments', compact('get_my_payments_info'));
    }

    /*
    * this function gets the produce Details for loggedin user
    */
    private function getMyPaymentInfo()
    {
        return Payment::join('users', 'users.id', 'payments.user_id')
     ->where('users.id', auth()->user()->id)
     ->orderBy($this->sortBy, $this->sortDirection)
     ->search($this->search)
    ->Paginate($this->perPage, ['payments.amount', 'payments.created_at', 'users.payment_status']);
    }
}
