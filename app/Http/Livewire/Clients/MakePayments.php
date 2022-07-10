<?php

namespace App\Http\Livewire\Clients;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use App\Models\User;
use App\Models\Payment;
use Session;
use Carbon\Carbon;
use App\Traits\CreatePaymentInfo;

class MakePayments extends ModalComponent
{
    public $amount;
    public $user_id;
    public $payment_date;
    public $payment_status;

    protected $rules =['amount' =>'required'];

    public function render()
    {
        return view('livewire.clients.make-payments');
    }
     /**
     * This function allows user to make payments
     */
    public function makePayments(){
        $this->validate();
        $this->emit('MyPaymentSummary','refreshComponent');
        //$this->saveToPayments($this->id, $this->amount);
        // Add Payment
        User::where('id',auth()->user()->id)->update(array(
            'amount'           =>$this->amount,
            'payment_date'     =>Carbon::now(),
            'payment_status'   =>'successful',
        ));
        Payment::create(array(
            'amount'           =>$this->amount,
            'user_id'          =>auth()->user()->id,
        ));
        $this->closeModal();
        Session::flash('success','Discount Added Successfully!!');
  }
}
