<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\ProduceCategory;
use LivewireUI\Modal\ModalComponent;
use Session;

class AddProduceCategory extends ModalComponent
{
    public $produce_category;
    public $created_by;

    protected $rules =[
        'produce_category'   =>'required|unique:produce_categories',
    ];
    public function createProduceCategory(){
        $this->validate();
        $this->emit('ProduceCategory','refreshComponent');
        
        ProduceCategory::create(array(
        'produce_category'     =>$this->produce_category,
        'created_by'           =>auth()->user()->id,
        ));
        $this->closeModal();
        Session::flash('success','Operation successfully');
    }

    public function render()
    {
        return view('livewire.admin.add-produce-category');
    }
}
