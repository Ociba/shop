<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Shop as Shops;
use App\Traits\WithSorting;
use Livewire\WithPagination;

class Shop extends Component
{
    use WithPagination, WithSorting;

    protected $listeners =['Shop' =>'$refresh'];

    protected $paginationTheme = 'bootstrap';

    public $sortBy = 'item_name';
    public $search = '';


    public function render()
    { 
        $shop_items =$this->getAvailableShopItems();
        return view('livewire.admin.shop',compact('shop_items'));
    }
     /*
    * this function gets the accomodation Details
    */
   private function getAvailableShopItems(){
    return Shops::join('shop_items_categories','shop_items_categories.id','shops.item_category_id')
     ->join('users','users.id','shops.created_by')
     ->orderBy($this->sortBy, $this->sortDirection)
     ->search($this->search)
    ->Paginate($this->perPage,['shops.*','users.name','shop_items_categories.item']);
    }
}
