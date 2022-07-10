<?php

namespace App\Http\Livewire\Clients;

use Livewire\Component;
use App\Models\Produce;
use App\Traits\WithSorting;
use Livewire\WithPagination;

class MyProduce extends Component
{
    use WithPagination, WithSorting;

    protected $listeners =['MyProduce' =>'$refresh'];

    protected $paginationTheme = 'bootstrap';

    public $sortBy = 'produce_name';
    public $search = '';

    public function render()
    {
        $get_my_produce =$this->getMyProduce();
        return view('livewire.clients.my-produce',compact('get_my_produce'));
    }
       /*
    * this function gets the produce Details for loggedin user
    */
   private function getMyProduce(){
    return Produce::join('produce_categories','produce_categories.id','produces.produce_category_id')
     ->join('users','users.id','produces.created_by')
     ->where('produces.created_by',auth()->user()->id)
     ->orderBy($this->sortBy, $this->sortDirection)
     ->search($this->search)
    ->Paginate($this->perPage,['produces.*','users.name','produce_categories.produce_category']);
    }
}
