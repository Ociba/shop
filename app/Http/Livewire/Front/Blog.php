<?php

namespace App\Http\Livewire\Front;

use App\Models\Blog as Blogs;
use Livewire\Component;

class Blog extends Component
{
    public function render()
    {
        $get_blog = $this->getBlog();

        return view('livewire.front.blog', compact('get_blog'));
    }

    private function getBlog()
    {
        return Blogs::orderBy('created_at', 'Desc')->limit(1)->get();
    }
}
