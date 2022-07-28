<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="box">
        <div id="feature-slider" class="row owl-carousel product-slider">
            @foreach($get_featured_online_shop as $shop)
            <div class="item product-slider-item text-center">
                <div class="product-thumb transition">
                    <div class="image product-imageblock"> <a href="/shop/view-details/{{$shop->id}}"> <img src="{{ asset('storage/shop_items_photos/'.$shop->photo)}}" style="height:150px;" alt="Joome Shop" title="Joome Shop" class="img-responsive" /> </a>
                        
                    </div>
                    <div class="caption product-detail">
                        <h4 class="product-name"><a href="/shop/view-details/{{$shop->id}}" title="Joome Shop">{{$shop->item_name}} </a></h4>
                        <p class="price product-price"> <span class="price-new"> ugx.{{ number_format($shop->price)}}</span> {{--<span class="price-old">$272.00</span>--}} <span class="price-tax">Ex Tax: $210.00</span> </p>
                    </div>
                       <div class="m-2">
                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                    <input type="hidden" value="{{ $shop->id }}" name="id">
                                    <input type="hidden" value="{{ $shop->item_name }}" name="name">
                                    <input type="hidden" value="{{ $shop->price }}" name="price">
                                    <input type="hidden" value="{{ $shop->photo }}"  name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <div class="col-xs-12 mb-5">
                                    <a href="/shop/view-details/{{$shop->id}}" type="button" class="view">View Details</a>
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
