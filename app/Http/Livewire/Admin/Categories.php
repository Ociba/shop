<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Traits\WithSorting;
use Livewire\WithPagination;

class Categories extends Component
{
    use WithPagination, WithSorting;

    protected $listeners =['Categories' =>'$refresh'];

    protected $paginationTheme = 'bootstrap';

    public $sortBy = 'category';
    public $search = '';


    public function render()
    {
        $all_categories =$this->getCategory();
        return view('livewire.admin.categories',compact('all_categories'));
    }
    /*
    * this function gets the accomodation Details
    */
   private function getCategory(){
    return Category::join('users','users.id','categories.created_by')
     ->orderBy($this->sortBy, $this->sortDirection)
     ->search($this->search)
    ->Paginate($this->perPage,['categories.*','users.name']);
    }
}
