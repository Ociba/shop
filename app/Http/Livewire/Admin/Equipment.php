<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Equipment as Equipments;
use App\Traits\WithSorting;
use Livewire\WithPagination;

class Equipment extends Component
{
    use WithPagination, WithSorting;

    protected $listeners =['Equipment' =>'$refresh'];

    protected $paginationTheme = 'bootstrap';

    public $sortBy = 'equipment';
    public $search = '';
    
    public function render()
    {
        $get_all_equipments  =$this->getEquipment();
        return view('livewire.admin.equipment',compact('get_all_equipments'));
    }
     /*
    * this function gets the produce Details
    */
   private function getEquipment(){
    return Equipments::join('users','users.id','equipment.created_by')
     ->orderBy($this->sortBy, $this->sortDirection)
     ->search($this->search)
    ->Paginate($this->perPage,['equipment.*','users.name']);
    }
    
}
