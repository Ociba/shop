<?php

namespace App\Http\Livewire\Clients;

use Livewire\Component;
use App\Models\Acomodation;
use App\Traits\WithSorting;
use Livewire\WithPagination;

class MyAccomodation extends Component
{
    use WithPagination, WithSorting;

    protected $listeners =['MyAccomodation' =>'$refresh'];
    protected $paginationTheme = 'bootstrap';

    public $sortBy = 'location';
    public $search = '';

    public function render()
    {
        $get_my_accomodation=$this->getMyAvailableAccomodation();
        return view('livewire.clients.my-accomodation',compact('get_my_accomodation'));
    }
      /*
    * this function gets the accomodation Details for logged user
    */
   private function getMyAvailableAccomodation(){
    return Acomodation::join('categories','categories.id','acomodations.category_id')
     ->join('users','users.id','acomodations.user_id')
     ->where('acomodations.user_id',auth()->user()->id)
     ->orderBy($this->sortBy, $this->sortDirection)
     ->search($this->search)
    ->Paginate($this->perPage,['acomodations.*','users.name','categories.category']);
    }
}
