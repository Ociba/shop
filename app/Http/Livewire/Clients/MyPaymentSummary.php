<?php

namespace App\Http\Livewire\Clients;

use Livewire\Component;
use App\Models\Payment;
use App\Traits\WithSorting;
use Livewire\WithPagination;

class MyPaymentSummary extends Component
{
    use WithPagination, WithSorting;

    protected $listeners =['MyPaymentSummary' =>'$refresh'];

    protected $paginationTheme = 'bootstrap';

    public $sortBy = 'amount';
    public $search = '';
    public function render()
    {
        $get_my_payments_info =$this->getMyPayment();
        return view('livewire.clients.my-payment-summary',compact('get_my_payments_info'));
    }
        /*
    * this function gets the produce Details for loggedin user
    */
   private function getMyPayment(){
    return Payment::join('users','users.id','payments.user_id')
     ->where('users.id',auth()->user()->id)
     ->orderBy($this->sortBy, $this->sortDirection)
     ->search($this->search)
    ->Paginate($this->perPage,['payments.amount','payments.created_at','users.payment_status']);
    }
}
