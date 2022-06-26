<div>
    {{-- Stop trying to control. --}}
    <form wire:submit.prevent="createNewsUnlikes">
         <input type="hidden" value="0" wire:model="likes_and_unlikes">
        <button type="submit" class="likes-and-unlikes"><i class="fa fa-thumbs-down"></i><span>{{$newsunlikes}} UnLikes</button>
    </form>
</div>
