<div class="row">
    <div class="col-md-12">
    <div class="col-md-3">
        <div id="column-left" class="column-left" style="width:100%; height:80%">
            <h3 class="productblock-title text-center">Top Sells Corner</h3>
            <div class="row latest-grid product-grid">
                   @php
                        $get_shop_items=\DB::table('shops')->join('shop_items_categories','shop_items_categories.id','shops.item_category_id')
                        ->join('users','users.id','shops.created_by')
                        ->where('shops.item_category_id','!=',11)
                        ->where('shops.item_category_id','!=',12)
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
      <div class="col-md-6">
        <div id="main-banner" class="owl-carousel home-slider">
            @php 
            $get_slider_images =\DB::table('sliders')->get();
            @endphp
            @foreach($get_slider_images as $slider)
        <div class="item"> <a href="#"><img src="{{ asset('storage/slider/'.$slider->image)}}" style="width:100%;height:350px;" alt="main-banner2" class="img-responsive" /></a> </div>
            @endforeach
        </div>
        </div>
        <div class="col-md-3">
        <div id="column-left" class="column-left" style="width:100%; height:80%">
            <h3 class="productblock-title text-center">Get Your Property</h3>
            @livewire('front.get-your-property')
        </div>
        </div>
    </div>
</div>