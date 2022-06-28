<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Cart;
use Illuminate\View\View;
use App\Models\Acomodation;
use Session;

class Accomodation extends Component
{
    use WithPagination;
    
    public $name;
    public $price;
    public $quantity;
    public $image;
    public $search;

    protected $rules =[
        'name'     =>'required',
        'price'    =>'required',
        'quantity' =>'required',
        'image'    =>'required',
    ];

    public function render()
    {
        $available_accomodation=$this->getAvailableAccomodation();
        return view('livewire.front.accomodation',compact('available_accomodation'));
    }
    /*
    * this function gets the accomodation Details
    */
   private function getAvailableAccomodation(){
    return Acomodation::join('categories','categories.id','acomodations.category_id')
     ->join('users','users.id','acomodations.user_id')
     //->orderBy($this->sortBy, $this->sortDirection)
     //->search($this->search)
    ->get(['acomodations.*','users.name','categories.category']);
    }
}
