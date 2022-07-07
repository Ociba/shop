<div>
    {{-- Stop trying to control. --}}
        @if(session()->has('success'))
        <div class="card-header bg-success">
            <h4 class="mb-0 text-white" style="color:#ffffff">{{session('success')}}</h4>
        </div>
        @endif
    <div id="cart" class="btn-group btn-block">
        <button type="button" class="btn btn-inverse btn-block btn-lg dropdown-toggle cart-dropdown-button"><span id="cart-total">{{Cart::getTotalQuantity()}} item(s) - ugx:{{ number_format(Cart::getTotal()) }}</span><i class="fa fa-caret-down"></i></button>
        <ul class="dropdown-menu pull-right cart-dropdown-menu">
            <li>
                <table class="table table-striped">
                    <tbody>
                    @foreach ($cartItems as $item)
                        <tr>
                            <td class="text-center"><a href="#"><img class="img-thumbnail" title="iPhone" alt="iPhone" src="/storage/shop_items_photos/{{ $item->attributes->image }}" style="height:40px; width:50px;"></a></td>
                            <td class="text-left"><a href="#">{{ $item['name'] }}</a></td>
                            <td class="text-right"><livewire:front.cart-update :item="$item" :key="$item['id']"/></td>
                            <td class="text-right">ugx:{{ number_format($item['price'] * $item['quantity']  ) }}</td>
                            <td class="text-center"><button class="btn btn-danger btn-xs" title="Remove" type="button" wire:click.prevent="removeCart('{{$item['id']}}')"><i class="fa fa-times"></i></button></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </li>
            <li>
                <div>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td class="text-right"><strong>Sub-Total</strong></td>
                                <td class="text-right">ugx:{{ number_format(Cart::getTotal()) }}</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>Transport</strong></td>
                                <td class="text-right">ugx:4,000</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>Total</strong></td>
                                <td class="text-right">ugx:{{ number_format(Cart::getTotal() + 4000) }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="text-right"> <span class="btn-viewcart"><a href="/cart/my-cart"><strong><i class="fa fa-shopping-cart"></i> View Cart</strong></a></span> <span class="btn-checkout"><a href="/checkout/my-checkout"><strong><i class="fa fa-share"></i> Checkout</strong></a></span> </p>
                </div>
            </li>
        </ul>
    </div>
</div>
