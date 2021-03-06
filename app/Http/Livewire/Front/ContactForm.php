<?php

namespace App\Http\Livewire\Front;

use App\Models\Message;
use Livewire\Component;

class ContactForm extends Component
{
    public $senders_name;

    public $contact;

    public $enquiry;

    protected $rules = [
        'senders_name' => 'required',
        'contact' => 'required',
        'enquiry' => 'required',
    ];

    public function render()
    {
        return view('livewire.front.contact-form');
    }

    public function sendMessage()
    {
        $this->validate();
        Message::create([
            'senders_name' => $this->senders_name,
            'contact' => $this->contact,
            'enquiry' => $this->enquiry,
        ]);
        session()->flash('success', 'Enquiry Sent Successfully, We shall give you feedback soon');
    }
}
