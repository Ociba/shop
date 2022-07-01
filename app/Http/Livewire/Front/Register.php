<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\User;
use Hash;
use Session;

class Register extends Component
{
    public $name;
    public $user_type;
    public $email;
    public $telephone;
    public $address;
    public $town; 
    public $newsletter;
    public $division;
    public $street;
    public $plot_number;
    public $password;
    public $confirm_password;

    protected $rules =[
        'name'              =>'required',
        'user_type'         =>'',
        'email'             =>'required|unique:users',
        'telephone'         =>'required|unique:users',
        'address'           =>'required',
        'town'              =>'required',
        'newsletter'        =>'required',
        'division'          =>'required',
        'street'            =>'',
        'plot_number'       =>'',
        'password'          =>'required',
        'confirm_password'  => 'required|same:password',
    ];

    public function render()
    {
        return view('livewire.front.register');
    }
    /**
     * This function creates user account for buying items online
     */
    public function saveClientInfo(){
        $this->validate();
        $this->password = Hash::make($this->password);
        User::create(array(
            'name'                     => $this->name,
            'user_type'                => 3,
            'telephone'                 => $this->telephone,
            'address'                   => $this->address,
            'town'                      => $this->town,
            'newsletter'                => $this->newsletter,
            'division'                  => $this->division,
            'plot_number'               =>$this->plot_number,
            'email'                     => $this->email,
            'password'                  => $this->password,
            'confirm_password'          => $this->confirm_password,
        ));
        Session::flash('success', 'Successfully created an Account');
        return redirect()->to('/my-order');
        
    }
}
