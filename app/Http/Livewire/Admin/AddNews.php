<?php

namespace App\Http\Livewire\Admin;

use App\Models\JoomeNews;
use App\Traits\SaveToFolder;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;

class AddNews extends ModalComponent
{
    use SaveToFolder,WithFileUploads;

    public $heading;

    public $body;

    public $photo;

    protected $rules = [
        'heading' => 'required',
        'body' => 'required',
        'photo' => 'required',
    ];

    public function render()
    {
        return view('livewire.admin.add-news');
    }

    /**
     * This function add blog details
     */
    public function createNews()
    {
        $this->validate();
        $this->emit('News', 'refreshComponent');

        JoomeNews::create([
            'heading' => $this->heading,
            'body' => $this->body,
            'photo' => $this->saveItemToFolder('news_photos', $this->photo),
            //'created_by'   =>auth()->user()->id,
        ]);
        $this->closeModel();
        session()->flash('success', 'Operation successfully');
    }
}
