<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\JoomeNews;

class News extends Component
{
    public function render()
    {
        $get_news =$this->getNews();
        return view('livewire.front.news',compact('get_news'));
    }

    private function getNews(){
        return JoomeNews::orderBy('created_at','DESC')->limit(1)->get();
    }
}
