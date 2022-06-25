<div>
    {{-- Do your work, then step back. --}}
    <form wire:submit.prevent="saveUnLikes">
         <input type="hidden" value="0" wire:model="likes_and_unlikes">
        <button type="submit" class="likes-and-unlikes"><i class="fa fa-thumbs-down"></i><span class="mr-3">{{$unlikes}} UnLikes</button>
    </form>
</div>
