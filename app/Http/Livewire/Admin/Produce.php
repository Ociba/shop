<?php

namespace App\Http\Livewire\Admin;

use App\Models\Produce as Produces;
use App\Traits\WithSorting;
use Livewire\Component;
use Livewire\WithPagination;

class Produce extends Component
{
    use WithPagination, WithSorting;

    protected $listeners = ['Produce' => '$refresh'];

    protected $paginationTheme = 'bootstrap';

    public $sortBy = 'produce_name';

    public $search = '';

    public function render()
    {
        $produce = $this->getAvailableProduce();

        return view('livewire.admin.produce', compact('produce'));
    }

    /*
    * this function gets the produce Details
    */
    private function getAvailableProduce()
    {
        return Produces::join('produce_categories', 'produce_categories.id', 'produces.produce_category_id')
     ->join('users', 'users.id', 'produces.created_by')
     ->where('produces.status', 'available')
     ->orderBy($this->sortBy, $this->sortDirection)
     ->search($this->search)
    ->Paginate($this->perPage, ['produces.*', 'users.name', 'produce_categories.produce_category']);
    }
}
