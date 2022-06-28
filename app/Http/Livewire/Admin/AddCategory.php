<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use LivewireUI\Modal\ModalComponent;
use Session;

class AddCategory extends ModalComponent
{
    public $category;
    public $created_by;


    protected $rules =[
        'category'   =>'required|unique:categories',
    ];
    public function createCategory(){
        $this->validate();
        $this->emit('Categories','refreshComponent');
        
        Category::create(array(
        'category'     =>$this->category,
        'created_by'   =>auth()->user()->id,
        ));
        Session::flash('success','Operation successfully');
    }

    public function render()
    {
        return view('livewire.admin.add-category');
    }
}
