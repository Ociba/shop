<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\LikesAndUnlikes;

class UnlikesForm extends Component
{
    public $post_id;
    public $likes_and_unlikes;

    public function render()
    {
        
        $unlikes =$this->countUnLikes();
        return view('livewire.front.unlikes-form',compact('unlikes'));
    }
    public function saveUnLikes(){
        $this->emit('UnlikesForm','refreshComponent');
        
        LikesAndUnlikes::create(array(
        'post_id'               =>1,
        'likes_and_unlikes'     =>0,
        ));
        session()->flash('success','Committee has been Created successfully');
    }
     /**
     * This function counts unlikes for particular post
     */
    private function countUnLikes(){
        return LikesAndUnlikes::where('likes_and_unlikes',0)->count();
     }
}
