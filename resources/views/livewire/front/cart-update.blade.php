<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <input wire:model="quantity"
        type="number" min="1" max="5"
        wire:change="updateCart" class="form-control quantity">
</div>
