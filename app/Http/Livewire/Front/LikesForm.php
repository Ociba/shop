<?php

namespace App\Http\Livewire\Front;

use App\Models\LikesAndUnlikes;
use Livewire\Component;

class LikesForm extends Component
{
    protected $listeners = ['LikesForm' => '$refresh'];

    public $post_id;

    public $likes_and_unlikes;

    public function render()
    {
        $likes = $this->countLikes();

        return view('livewire.front.likes-form', compact('likes'));
    }

    public function saveLikes()
    {
        $this->emit('LikesForm', 'refreshComponent');

        LikesAndUnlikes::create([
            'post_id' => 1,
            'likes_and_unlikes' => 1,
        ]);
        session()->flash('success', 'Committee has been Created successfully');
    }

    /**
     * This function counts likes for particular post
     */
    private function countLikes()
    {
        return LikesAndUnlikes::where('likes_and_unlikes', 1)->count();
    }
}
