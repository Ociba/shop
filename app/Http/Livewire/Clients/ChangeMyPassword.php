<?php

namespace App\Http\Livewire\Clients;

use App\Models\User;
use Hash;
use Livewire\Component;
use Session;

class ChangeMyPassword extends Component
{
    public $name;

    public $telephone;

    public $email;

    public $password;

    public $confirm_password;

    public $address;

    public $state = [];

    protected $rules = [
        'password' => 'required',
        'confirm_password' => 'required|same:password',
    ];

    protected $listeners = ['ChangeMyPassword' => '$refresh'];

    public function render()
    {
        $get_user_information = $this->getauthenticatedUserInfo();

        return view('livewire.clients.change-my-password', compact('get_user_information'));
    }

    public function getauthenticatedUserInfo()
    {
        return User::where('id', auth()->user()->id)->get();
    }

    /**
     * This function updates logged in user details
     */
    public function updateClientInfo()
    {
        $this->emit('ChangeMyPassword', 'refreshComponent');
        User::where('id', auth()->user()->id)->update([
            // 'name'                     => $this->name,
            // 'address'                  =>$this->address,
            // 'telephone'                => $this->telephone,
            // 'email'                    => $this->email,
            'password' => Hash::make($this->password),
            //'confirm_password'          => $this->confirm_password,
        ]);
        Session::flash('success', 'Successfully Updated an Account');
    }
}
