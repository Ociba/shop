<?php

namespace App\Http\Livewire\Front;

use App\Models\Acomodation;
use Livewire\Component;
use Livewire\WithPagination;

class Accomodation extends Component
{
    use WithPagination;

    protected $listeners = ['Front/Accomodation' => '$refresh'];

    public $name;

    public $price;

    public $quantity;

    public $image;

    public $search;

    public $perPage = 4;

    protected $rules = [
        'name' => 'required',
        'price' => 'required',
        'quantity' => 'required',
        'image' => 'required',
    ];

    public function render()
    {
        $available_accomodation = $this->getAvailableAccomodation();

        return view('livewire.front.accomodation', compact('available_accomodation'));
    }

    /*
    * this function gets the accomodation Details
    */
    private function getAvailableAccomodation()
    {
        return Acomodation::join('categories', 'categories.id', 'acomodations.category_id')
     ->join('users', 'users.id', 'acomodations.user_id')
     ->orderBy('acomodations.created_at', 'Desc')
    ->Paginate($this->perPage, ['acomodations.*', 'users.name', 'users.telephone', 'categories.category']);
    }

    /**
     * This functions enables loading more
     */
    public function load()
    {
        $this->perPage += 4;
    }
}
