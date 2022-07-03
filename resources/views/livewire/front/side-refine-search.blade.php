<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="panel panel-default filter mb-5">
    <h3 class="productblock-title">Latest</h3>
            <div class="row latest-grid product-grid">
                   @php
                        $get_shop_items=\DB::table('shops')->join('shop_items_categories','shop_items_categories.id','shops.item_category_id')
                        ->join('users','users.id','shops.created_by')
                        ->orderBy('shops.created_at','DESC')->limit(3)
                        ->get(['shops.*','shop_items_categories.item']);
                    @endphp
                    @foreach($get_shop_items as $shop)
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 product-grid-item text-center">
                    
                    <div class="product-thumb transition">
                        <div class="image product-imageblock"><a href="/shop/view-details/{{$shop->id}}"><img src="{{ asset('storage/shop_items_photos/'.$shop->photo)}}" style="width:65px;height:40px" alt="Joome Shop" title="Joome Shop" class="img-responsive" /></a>
                           
                        </div>
                        <div class="caption product-detail">
                            <h4 class="product-name"><a href="/shop/view-details/{{$shop->id}}" title="View Details">{{$shop->item_name}}</a></h4>
                            <p class="price product-price">Ugx: {{ number_format($shop->price)}}<span class="price-tax">Ex Tax: $100.00</span></p>
                            
                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{ $shop->id }}" name="id">
                                <input type="hidden" value="{{ $shop->item_name }}" name="name">
                                <input type="hidden" value="{{ $shop->price }}" name="price">
                                <input type="hidden" value="{{ $shop->photo }}"  name="image">
                                <input type="hidden" value="1" name="quantity">
                                <div class="col-xs-12 mb-5">
                                <button type="submit" class="addtocart-btn" style="border:none;">Add to Cart</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
      </div>
</div>
