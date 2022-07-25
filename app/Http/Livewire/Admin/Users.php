<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;  
use App\Traits\WithSorting;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination, WithSorting;


    protected $paginationTheme = 'bootstrap';

    public $sortBy = 'name';

    public $search = '';


    public function render()
    {
        $get_all_users =$this->getUsers();
        return view('livewire.admin.users',compact('get_all_users'));
    }

     /*
    * this function gets the slier Details
    */
    private function getUsers()
    {
        return User::join('user_types','user_types.id','users.user_type')->orderBy($this->sortBy, $this->sortDirection)
     ->search($this->search)
    ->Paginate($this->perPage,['user_types.type','users.*']);
    }
}
