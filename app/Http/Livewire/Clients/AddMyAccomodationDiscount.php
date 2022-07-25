<?php

namespace App\Http\Livewire\Clients;

use App\Models\Acomodation;
use LivewireUI\Modal\ModalComponent;
use Session;

class AddMyAccomodationDiscount extends ModalComponent
{
    public $accomodation_id;

    public $discount;

    public $user_id;

    protected $rules = ['discount' => 'required'];

    public function render()
    {
        return view('livewire.clients.add-my-accomodation-discount');
    }

    public function mount($accomodation_id)
    {
        $this->fill([
            'discount' => Acomodation::where('id', $accomodation_id)->value('discount'),
        ]);
    }

    /**
     * This function adds discount to an accomodation
     */
    public function addAccomodationDiscount()
    {
        $this->validate();
        $this->emit('MyAccomodation', 'refreshComponent');
        // Add Discount
        Acomodation::where('id', $this->accomodation_id)->update([
            'discount' => $this->discount,
            'user_id' => auth()->user()->id,
        ]);
        $this->closeModal();
        Session::flash('success', 'Discount Added Successfully!!');
    }
}
