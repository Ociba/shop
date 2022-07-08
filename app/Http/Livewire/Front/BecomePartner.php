<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Partner;

class BecomePartner extends Component
{
    public $district;
    public $nin;
    public $contact;
    public $business_type;
    public $type;
    

    protected $rules=[
        'district'      =>'required',
        'nin'           =>'required|unique:partners',
        'contact'       =>'required|unique:partners',
        'business_type' =>'required',
        'type'          =>'required',
    ];
    public function render()
    {
        return view('livewire.front.become-partner');
    }
    public function submitPartnerInfo(){
        Partner::create(array(
            'district'        =>$this->district,
            'nin'             =>$this->nin,
            'contact'         =>$this->contact,
            'business_type'   =>$this->business_type,
            'type'            =>$this->type,
        ));
        session()->flash('success','Request Sent Successflly');
    }
}
