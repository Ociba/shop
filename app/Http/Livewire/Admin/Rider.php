<?php

namespace App\Http\Livewire\Admin;

use App\Models\Rider as Ride;
use App\Traits\WithSorting;
use Livewire\Component;
use Livewire\WithPagination;

class Rider extends Component
{
    use WithPagination, WithSorting;

    protected $paginationTheme = 'bootstrap';

    public $sortBy = 'name';

    public function render()
    {
        $get_all_riders_requests = $this->getRiders();

        return view('livewire.admin.rider', compact('get_all_riders_requests'));
    }

    /**
     * This function gets riders details
     */
    private function getRiders()
    {
        return Ride::orderBy($this->sortBy, $this->sortDirection)
        ->search($this->search)
       ->Paginate($this->perPage);
    }
}
