<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\LikesAndUnlikes;

class LikesForm extends Component
{
    protected $listeners =['LikesForm' =>'$refresh'];

    public $post_id;
    public $likes_and_unlikes;
    
    public function render()
    {
        
        $likes =$this->countLikes();
        return view('livewire.front.likes-form',compact('likes'));
    }

    public function saveLikes(){
        $this->emit('LikesForm','refreshComponent');
        
        LikesAndUnlikes::create(array(
        'post_id'               =>1,
        'likes_and_unlikes'     =>1,
        ));
        session()->flash('success','Committee has been Created successfully');
    }
    /**
     * This function counts likes for particular post
     */
    private function countLikes(){
        return LikesAndUnlikes::where('likes_and_unlikes',1)->count();
     }
}
