<?php

namespace App\Http\Livewire\Clients;

use App\Models\Payment;
use App\Models\User;
use Carbon\Carbon;
use LivewireUI\Modal\ModalComponent;
use Session;

class MakeAccomodationPayments extends ModalComponent
{
    public $amount;

    public $user_id;

    public $payment_date;

    public $payment_status;

    protected $rules = ['amount' => 'required'];

    public function render()
    {
        return view('livewire.clients.make-accomodation-payments');
    }

    /**
     * This function allows user to make payments
     */
    public function makeAccomodationPayments()
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

        return redirect()->to('/my_accomodation_subscriptions');
    }
    /**
     * This function pays with mtn mobile money
     */
    protected function payWithMobileMoney(){
        $now = Carbon::now();
        $days_from_now = $now->addYear(1);
        User::where('id',auth()->user()->id)->update(array(
          'amount'        =>request()->amount,
          'payment_date' =>$days_from_now
        ));
        return redirect('/property/my-property')->with('msg','Operation successful,Wait pop up to Confirm Payment');
    }
    
}
