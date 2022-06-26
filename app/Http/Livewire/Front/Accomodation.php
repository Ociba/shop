<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Cart;
use App\Models\Acomodation;

class Accomodation extends Component
{
    use WithPagination;

    public $search;

    protected $updatesQueryString = ['search'];

    public function mount(): void
    {
        $this->search = request()->query('search', $this->search);
    }

    public function render(): View
    {
        return view('livewire.front.accomodation', [
            'products' => $this->search === null ?
            Acomodation::paginate(12) :
            Acomodation::where('name', 'like', '%' . $this->search . '%')->paginate(12)
        ]);
    }

    public function addToCart(int $acomodationId): void
    {
        Cart::add(Acomodation::where('id', $acomodationId)->first());
    }
}
