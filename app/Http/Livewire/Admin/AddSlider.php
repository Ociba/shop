<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Slider;
use LivewireUI\Modal\ModalComponent;
use App\Traits\SaveToFolder;
use Livewire\WithFileUploads;

class AddSlider extends ModalComponent
{
    use SaveToFolder,WithFileUploads;

    public $image;
    protected $rules = [
        'image' => 'required'
    ];

    public function render()
    {
        return view('livewire.admin.add-slider');
    }
    /**
     * This function add blog details
     */
    public function createSlider()
    {
        $this->validate();
        $this->emit('Slider', 'refreshComponent');

        Slider::create([
            'image' => $this->saveItemToFolder('slider', $this->image),
        ]);
        $this->closeModal();
        session()->flash('success', 'Operation successfully');
    }
}
