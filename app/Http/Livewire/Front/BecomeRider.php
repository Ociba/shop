<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Rider;

class BecomeRider extends Component
{
    public $name;
    public $nin;
    public $phone_number;
    

    protected $rules=[
        'name'         =>'required',
        'nin'          =>'required|unique:riders',
        'phone_number' =>'required|unique:riders',
    ];

    public function render()
    {
        return view('livewire.front.become-rider');
    }
    public function saveRiderDetails(){
        Rider::create(array(
            'name'           =>$this->name,
            'nin'            =>$this->nin,
            'phone_number'   =>$this->phone_number,
        ));
        session()->flash('success','Request Sent Successflly');
    }
}
