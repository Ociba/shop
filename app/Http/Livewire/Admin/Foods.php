<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Food;
use App\Traits\WithSorting;
use Livewire\WithPagination;

class Foods extends Component
{
    use WithPagination, WithSorting;

    protected $listeners =['Foods' =>'$refresh'];

    protected $paginationTheme = 'bootstrap';

    public $sortBy = 'food_type';
    public $search = '';


    public function render()
    {
        $get_food  =$this->getFood();
        return view('livewire.admin.foods',compact('get_food'));
    }
     /*
    * this function gets the Food Details
    */
   private function getFood(){
    return Food::join('users','users.id','food.user_id')
     ->orderBy($this->sortBy, $this->sortDirection)
     ->search($this->search)
    ->Paginate($this->perPage,['food.*','users.name']);
    }
}
