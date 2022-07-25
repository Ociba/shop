<?php

namespace App\Http\Livewire\Admin;

use App\Models\Partner as Partners;
use App\Traits\WithSorting;
use Livewire\Component;
use Livewire\WithPagination;

class Partner extends Component
{
    use WithPagination, WithSorting;

    protected $paginationTheme = 'bootstrap';

    public $sortBy = 'district';

    public function render()
    {
        $get_partners_information = $this->getPartners();

        return view('livewire.admin.partner', compact('get_partners_information'));
    }

    /**
     * This function gets partners details
     */
    private function getPartners()
    {
        return Partners::orderBy($this->sortBy, $this->sortDirection)
        ->search($this->search)
       ->Paginate($this->perPage);
    }
}
