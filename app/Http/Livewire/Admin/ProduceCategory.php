<?php

namespace App\Http\Livewire\Admin;

use App\Models\ProduceCategory as Category;
use App\Traits\WithSorting;
use Livewire\Component;
use Livewire\WithPagination;

class ProduceCategory extends Component
{
    use WithPagination, WithSorting;

    protected $listeners = ['ProduceCategory' => '$refresh'];

    protected $paginationTheme = 'bootstrap';

    public $sortBy = 'produce_category';

    public $search = '';

    public function render()
    {
        $all_produce_categories = $this->getProduceCategory();

        return view('livewire.admin.produce-category', compact('all_produce_categories'));
    }

    /*
    * this function gets the accomodation Details
    */
    private function getProduceCategory()
    {
        return Category::join('users', 'users.id', 'produce_categories.created_by')
     ->orderBy($this->sortBy, $this->sortDirection)
     ->search($this->search)
    ->Paginate($this->perPage, ['produce_categories.*', 'users.name']);
    }
}
