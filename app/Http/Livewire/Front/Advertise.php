<?php

namespace App\Http\Livewire\Front;

use App\Models\User;
use Hash;
use Livewire\Component;
use Session;

class Advertise extends Component
{
    public $name;

    public $user_type;

    public $email;

    public $telephone;

    public $address;

    public $town;

    public $division;

    public $street;

    public $plot_number;

    public $password;

    public $confirm_password;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|unique:users',
        'telephone' => 'required|unique:users',
        'address' => 'required',
        'town' => 'required',
        'user_type' => 'required',
        'division' => 'required',
        'street' => 'required',
        'plot_number' => 'required',
        'password' => 'required',
        'confirm_password' => 'required|same:password',
    ];

    public function render()
    {
        return view('livewire.front.advertise');
    }

    /**
     * This function creates user
     */
    public function submitRegistration()
    {
        $this->validate();
        //$this->password = Hash::make($this->password);
        User::create([
            'name' => $this->name,
            'user_type' => 3,
            'telephone' => $this->telephone,
            'address' => $this->address,
            'town' => $this->town,
            'user_type' => $this->user_type,
            'division' => $this->division,
            'plot_number' => $this->plot_number,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'confirm_password' => $this->confirm_password,
        ]);
        Session::flash('success', 'Successfully created an Account');

        return redirect()->to('/my-order');
    }
}
