<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Promotion;  
use App\Traits\WithSorting;
use Livewire\WithPagination;

class PromotionItems extends Component
{
    use WithPagination, WithSorting;

    protected $listeners = ['PromotionItems' => '$refresh'];

    protected $paginationTheme = 'bootstrap';

    public $sortBy = 'created_at';

    public $search = '';


    public function render()
    {
        $get_promotion_items =$this->getPromotionItem();
        return view('livewire.admin.promotion-items',compact('get_promotion_items'));
    }
      /*
    * this function gets the slier Details
    */
    private function getPromotionItem()
    {
        return Promotion::orderBy($this->sortBy, $this->sortDirection)
     ->search($this->search)
    ->Paginate($this->perPage);
    }
}
