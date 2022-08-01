<div>
    <div class="row" style="margin-bottom:25px;">
        <div class="col-md-12">
            <div class="section-title">
                <h3 class="title">Independence Day Celebration Offers</h3>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="products-tabs">
                    <div id="tab2" class="tab-pane fade in active">
                        <div class="products-slick" data-nav="#slick-nav-2">
                           @foreach($get_special_days_products as $shop)
                            <div class="product">
                                <div class="product-img">
                                    <img src="{{asset('storage/shop_items_photos/'.$shop->photo)}}">
                                    <div class="product-label">
                                        <span class="new" style="background:#ffffff; border:#ffffff; color:black;">{{$shop->item_name}}</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <h4 class="product-price" style="color:black;">Ugx : {{ number_format($shop->price)}} </h4>
                                </div>
                                <div class="add-to-cart">
                                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data" class="text-center">
                                        @csrf
                                        <input type="hidden" value="{{ $shop->id }}" name="id">
                                        <input type="hidden" value="{{ $shop->item_name }}" name="name">
                                        <input type="hidden" value="{{ $shop->price }}" name="price">
                                        <input type="hidden" value="{{ $shop->photo }}"  name="image">
                                        <input type="hidden" value="1" name="quantity">
                                        <div class="col-xs-12 mb-5">
                                            <a href="/shop/view-details/{{$shop->id}}" type="button" style="color:#ff6600">View Details</a>
                                            <button type="submit" style="color:#55ad37; border:none;background:#fff;">Add to Cart</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div id="slick-nav-2" class="products-slick-nav"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
