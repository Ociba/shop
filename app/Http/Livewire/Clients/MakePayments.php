<?php

namespace App\Http\Livewire\Clients;

use App\Models\Payment;
use App\Models\User;
use Carbon\Carbon;
use LivewireUI\Modal\ModalComponent;
use Session;

class MakePayments extends ModalComponent
{
    public $amount;

    public $user_id;

    public $payment_date;

    public $payment_status;

    protected $rules = ['amount' => 'required'];

    public function render()
    {
        return view('livewire.clients.make-payments');
    }

    /**
     * This function allows user to make payments
     */
    public function makePayments()
    {
        $this->validate();
        // Add Payment
        User::where('id', auth()->user()->id)->update([
            'amount' => $this->amount,
            'payment_date' => Carbon::now(),
            'payment_status' => 'successful',
        ]);
        Payment::create([
            'amount' => $this->amount,
            'user_id' => auth()->user()->id,
        ]);
        Session::flash('success', 'Payment done Successfully!!');

        return redirect()->to('/my_payments');
    }
}
