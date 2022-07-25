<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Promotion;
use LivewireUI\Modal\ModalComponent;
use App\Traits\SaveToFolder;
use Livewire\WithFileUploads;

class AddPromotionItems extends ModalComponent
{
    use SaveToFolder,WithFileUploads;

    public $image;
    protected $rules = [
        'image' => 'required'
    ];
    public function render()
    {
        return view('livewire.admin.add-promotion-items');
    }
      /**
     * This function add blog details
     */
    public function createPromotion()
    {
        $this->validate();
        $this->emit('PromotionItems', 'refreshComponent');

        Promotion::create([
            'image' => $this->saveItemToFolder('promotion', $this->image),
        ]);
        $this->closeModal();
        session()->flash('success', 'Operation successfully');
    }
}
