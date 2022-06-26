<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <form wire:submit.prevent="createNewsLikes">
        <input type="hidden" value="1" wire:model="likes_and_unlikes">
        <button type="submit" class="likes-and-unlikes" ><i class="fa fa-thumbs-up"></i> {{$newslikes}} Likes</button>
    </form>
</div>
