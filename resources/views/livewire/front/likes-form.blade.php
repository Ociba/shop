<div>
    {{-- In work, do what you enjoy. --}}
    <form wire:submit.prevent="saveLikes">
        <input type="hidden" value="1" wire:model="likes_and_unlikes">
        <button type="submit" class="likes-and-unlikes" ><i class="fa fa-thumbs-up"></i> {{$likes}} Likes</button>
    </form>
</div>
