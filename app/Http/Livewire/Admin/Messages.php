<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Message;
use App\Traits\WithSorting;
use Livewire\WithPagination;

class Messages extends Component
{
    use WithPagination, WithSorting;

    protected $paginationTheme = 'bootstrap';

    public $sortBy = 'senders_name';

    public $search = '';

    public function render()
    {
        $get_messages =$this->getMessages();
        return view('livewire.admin.messages', compact('get_messages'));
    }

    /**
     * This function gets all messages from users
     */
    public function getMessages(){
        return Message::orderBy($this->sortBy, $this->sortDirection)
        ->search($this->search)
       ->Paginate($this->perPage);
    }
}
