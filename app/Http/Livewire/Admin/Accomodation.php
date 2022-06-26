<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Acomodation;
use App\Traits\WithSorting;
use Livewire\WithPagination;

class Accomodation extends Component
{
    use WithPagination, WithSorting;
    protected $paginationTheme = 'bootstrap';

    public $sortBy = 'location';
    public $search = '';
    public function render()
    {
        $available_accomodation=$this->getAvailableAccomodation();
        return view('livewire.admin.accomodation',compact('available_accomodation'));
    }
       /*
    * this function gets the accomodation Details
    */
   private function getAvailableAccomodation(){
    return Acomodation::join('categories','categories.id','acomodations.category_id')
     ->join('users','users.id','acomodations.user_id')
     ->orderBy($this->sortBy, $this->sortDirection)
     ->search($this->search)
    ->Paginate($this->perPage,['acomodations.*','users.name','categories.category']);
    }
}
