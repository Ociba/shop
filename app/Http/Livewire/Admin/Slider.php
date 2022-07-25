<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Slider as Slide;  
use App\Traits\WithSorting;
use Livewire\WithPagination;

class Slider extends Component
{
    use WithPagination, WithSorting;

    protected $listeners = ['Slider' => '$refresh'];

    protected $paginationTheme = 'bootstrap';

    public $sortBy = 'created_at';

    public $search = '';


    public function render()
    {
       $get_slider = $this->getSlider();
        return view('livewire.admin.slider', compact('get_slider'));
    }

     /*
    * this function gets the slier Details
    */
    private function getSlider()
    {
        return Slide::orderBy($this->sortBy, $this->sortDirection)
     ->search($this->search)
    ->Paginate($this->perPage);
    }
}
