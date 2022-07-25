<?php

namespace App\Http\Livewire\Admin;

use App\Models\Blog as Blogs;
use App\Traits\WithSorting;
use Livewire\Component;
use Livewire\WithPagination;

class Blog extends Component
{
    use WithPagination, WithSorting;

    protected $listeners = ['Blog' => '$refresh'];

    protected $paginationTheme = 'bootstrap';

    public $sortBy = 'title';

    public $search = '';

    public function render()
    {
        $get_blog = $this->getBlog();

        return view('livewire.admin.blog', compact('get_blog'));
    }

    /*
    * this function gets the aBlog
    */
    private function getBlog()
    {
        return Blogs::orderBy($this->sortBy, $this->sortDirection)
     ->search($this->search)
    ->Paginate($this->perPage);
    }
}
