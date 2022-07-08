<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use App\Models\Blog;

use App\Traits\SaveToFolder;
use Livewire\WithFileUploads; 

class AddBlogInformation extends ModalComponent
{
    use SaveToFolder,WithFileUploads;
    public $title;
    public $content;
    public $image;

    protected $rules =[
        'title' =>'required',
        'content' =>'required',
        'image' =>'required',
    ];
    public function render()
    {
        return view('livewire.admin.add-blog-information');
    }

    /**
     * This function add blog details
     */
    public function createBlog(){
        
        $this->validate();
        $this->emit('Blog','refreshComponent');

        Blog::create(array(
            'title'       =>$this->title,
            'content'     =>$this->content,
            'image'       =>$this->saveItemToFolder('blog_photos',$this->image)
            //'created_by'   =>auth()->user()->id,
            ));
            $this->closeModel();
            session()->flash('success','Operation successfully');
    }
}
