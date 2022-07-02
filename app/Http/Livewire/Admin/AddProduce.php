<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Produce;
use LivewireUI\Modal\ModalComponent;
use App\Models\ProduceCategory;
use Session;
use App\Traits\SaveToFolder;
use Livewire\WithFileUploads; 

class AddProduce extends ModalComponent
{
    use SaveToFolder,WithFileUploads;
     public $produce_category_id;
     public $produce_name;
     public $quantity;
     public $price;
     public $phone_number;
     public $description;
     public $image;
     public $produce_type;

     protected $rules =[
        'produce_category_id'  =>'required',
        'produce_name'         =>'required',
        'produce_type'         =>'required',
        'quantity'             =>'required',
        'price'                =>'required',
        'phone_number'         =>'required|unique:produces',
        'description'          =>'required',
        'image'                =>'required|max:1024',
    ];

    public function render()
    {
        $get_produce_category =$this->getCategory();
        return view('livewire.admin.add-produce',compact('get_produce_category'));
    }
    public function createProduce(){
        $this->validate();
        $this->emit('Produce','refreshComponent');
        
        Produce::create(array(
        'produce_category_id' =>$this->produce_category_id,
        'produce_name'        =>$this->produce_name,
        'produce_type'        =>$this->produce_type,
        'quantity'            =>$this->quantity,
        'price'               =>$this->price,
        'phone_number'        =>$this->phone_number,
        'image'               =>$this->saveItemToFolder('produce_photos',$this->image),
        'description'         =>$this->description,
         'created_by'         =>auth()->user()->id,
        ));
        $this->closeModal();
        Session::flash('success','Operation successfully');
    }
    /**
     * This function gets produce category
     */
    public function getCategory(){
        return ProduceCategory::get();
    }
}
