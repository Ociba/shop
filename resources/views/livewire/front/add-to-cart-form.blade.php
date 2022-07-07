<div>
    {{-- Be like water. --}}
    @livewireStyles
    @foreach($get_shop_items as $shop)
    @php 
            $product_id=$shop->id;
            $product_amount =DB::table('shops')->where('id',$shop->id)->value('price');
            $calculate_percentage_mount =$product_amount * 0.01;
            $new_discount_amount =$product_amount-$calculate_percentage_mount;
            @endphp
    <form action="#" method="POST" enctype="multipart/form-data">
        @csrf
        @php
            $quantity = 1;
            $id = 6;
            $name = $shop->item;
        @endphp
            <input type="hidden" wire:model="id">
            <input type="hidden" wire:model="name">
            <input type="hidden" value="{{$new_discount_amount }}" wire:model="price">
            <input type="hidden" value="{{ $shop->photo }}"  wire:model="image">
            <input type="text" wire:model="quantity">
            
            @endforeach 
            <div class="col-xs-12 mb-5">
            <a href="/shop/discount-product-details/{{$shop->id}}" type="button" class="view">View Details</a>
            <button type="submit" wire:click="submit" class="addtocart-btn2">Add to Cart</button>
            <div wire:loading>
                Processing Payment...
            </div>
            </div>
    </form>
</div>
@livewireScripts
