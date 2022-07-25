<?php

namespace App\Http\Livewire\Admin;

use App\Models\Acomodation;
use App\Models\Category;
use App\Traits\SaveToFolder;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;
use Session;

class AddAccomodation extends ModalComponent
{
    use SaveToFolder,WithFileUploads;

    public $category_id;

    public $user_id;

    public $property_size;

    public $bedroom;

    public $bathroom;

    public $garage;

    public $location;

    public $property_status;

    public $photo;

    public $price;

    public $description;

    public $status;

    protected $rules = [
        'category_id' => 'required',
        'property_size' => '',
        'bedroom' => '',
        'bathroom' => '',
        'garage' => '',
        'location' => 'required',
        'property_status' => '',
        'photo' => 'required',
        'price' => 'required',
        'description' => 'required',
    ];

    public function createAccomodation()
    {
        $this->validate();
        $this->emit('Accomodation', 'refreshComponent');
        $this->emit('Front/Accomodation', 'refreshComponent');
        $this->emit('Clients/MyAccomodation', 'refreshComponent');

        Acomodation::create([
            'category_id' => $this->category_id,
            'property_size' => $this->property_size,
            'bedroom' => $this->bedroom,
            'bathroom' => $this->bathroom,
            'garage' => $this->garage,
            'location' => $this->location,
            'property_status' => $this->property_status,
            'photo' => $this->saveItemToFolder('accomodation_photos', $this->photo),
            'price' => $this->price,
            'description' => $this->description,
            'user_id' => auth()->user()->id,
        ]);
        $this->closeModal();
        Session::flash('success', 'Operation successfully');
    }

    public function render()
    {
        $categories = $this->getCategories();

        return view('livewire.admin.add-accomodation', compact('categories'));
    }

    /**
     * This function gets categories
     */
    private function getCategories()
    {
        return Category::get();
    }
}
