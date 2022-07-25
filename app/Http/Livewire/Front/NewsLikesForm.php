<?php

namespace App\Http\Livewire\Front;

use App\Models\NewLikesAndUnlikes;
use Livewire\Component;

class NewsLikesForm extends Component
{
    protected $listeners = ['NewsLikesForm' => '$refresh'];

    public $news_id;

    public $likes_and_unlikes;

    public function render()
    {
        $newslikes = $this->countNewsLikes();

        return view('livewire.front.news-likes-form', compact('newslikes'));
    }

    public function createNewsLikes()
    {
        $this->emit('NewsLikesForm', 'refreshComponent');

        NewLikesAndUnlikes::create([
            'news_id' => 1,
            'likes_and_unlikes' => 1,
        ]);
    }

    /**
     * This function counts likes for particular news
     */
    private function countNewsLikes()
    {
        return NewLikesAndUnlikes::where('likes_and_unlikes', 1)->count();
    }
}
