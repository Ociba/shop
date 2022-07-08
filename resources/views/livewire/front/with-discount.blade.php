<div>
    {{-- The whole world belongs to you. --}}
    <div class="box">
        <div id="bestseller-slidertab" class="row owl-carousel product-slider" style="margin-top:50px;">
            @foreach($get_shop_items as $shop)
            @php 
            $product_id=$shop->id;
            $percetage =$shop->discount * 0.01;
            $product_amount =DB::table('shops')->where('id',$shop->id)->where('discount','!=',null)->value('price');
            $calculate_percentage_mount =$product_amount * $percetage;
            $new_discount_amount =$product_amount-$calculate_percentage_mount;
            @endphp
            <div class="item text-center">
                <div class="product-thumb transition">
                <span style="border-radius:50%; background-color:green; color:#ffffff; padding:10px;">{{$shop->discount}} %</span>
                    <div class="image product-imageblock" style="margin-left:60px;"> <a href="/shop/discount-product-details/{{$shop->id}}"> <img src="{{ asset('storage/shop_items_photos/'.$shop->photo)}}" style="height:150px;" alt="shop" title="shop" class="img-responsive" /> </a>
                        
                    </div>
                    <div class="caption product-detail">
                        <h4 class="product-name"><a href="/shop/discount-product-details/{{$shop->id}}" title="shop">{{$shop->item_name}}</a></h4>
                        <p class="price product-price"> <span class="price-new">Ugx: {{ number_format($new_discount_amount)}}</span> <span class="price-old">Ugx: {{ number_format($shop->price)}}</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                    </div>
                    <div class="m-2">
                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <input type="hidden" value="{{ $shop->id }}" name="id">
                                <input type="hidden" value="{{$shop->item_name }}" name="name">
                                <input type="hidden" value="{{$new_discount_amount }}" name="price">
                                <input type="hidden" value="{{ $shop->photo }}"  name="image">
                                <input type="hidden" value="1" name="quantity">
                                <div class="col-xs-12 mb-5">
                                <a href="/shop/discount-product-details/{{$shop->id}}" type="button" class="view">View Details</a>
                                <button type="submit" class="addtocart-btn2">Add to Cart</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div> 
</div>
