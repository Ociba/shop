<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\JoomeNews;
use App\Traits\WithSorting;
use Livewire\WithPagination;

class News extends Component
{
    use WithPagination, WithSorting;

    protected $listeners =['News' =>'$refresh'];

    protected $paginationTheme = 'bootstrap';

    public $sortBy = 'heading';
    public $search = '';

    public function render()
    {
        $get_news =$this->getNews();
        return view('livewire.admin.news',compact('get_news'));
    }

    /*
    * this function gets the news
    */
   private function getNews(){
    return JoomeNews::orderBy($this->sortBy, $this->sortDirection)
     ->search($this->search)
    ->Paginate($this->perPage);
    }
}
