<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\NewLikesAndUnlikes;

class NewsUnlikesForm extends Component
{
    protected $listeners =['NewsUnlikesForm' =>'$refresh'];

    public $news_id;
    public $likes_and_unlikes;

    public function render()
    {
        $newsunlikes =$this->countNewsUnlikes();
        return view('livewire.front.news-unlikes-form',compact('newsunlikes'));
    }
    public function createNewsUnlikes(){
        $this->emit('NewsUnlikesForm','refreshComponent');
        
        NewLikesAndUnlikes::create(array(
        'news_id'               =>1,
        'likes_and_unlikes'     =>0,
        ));
    }
    /**
     * This function counts unlikes for particular news
     */
    private function countNewsUnlikes(){
        return NewLikesAndUnlikes::where('likes_and_unlikes',0)->count();
     }
}
