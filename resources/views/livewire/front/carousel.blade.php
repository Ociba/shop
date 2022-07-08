<div>
    {{-- Stop trying to control. --}}
    <div class="row">
        <div class="col-sm-12">
            <h3 class="heading-section mb-5 pb-md-4 productblock-title">Get More Products</h3>
        </div>
        <div class="col-sm-12">
            <div class="featured-carousel owl-carousel">
                @foreach($get_shop_items as $item)
                <div class="item">
                    <div class="work">
                        <div class="img d-flex align-items-center justify-content-center rounded">
                            <a href="/shop/view-details/{{$item->id}}" title="view Item Details">
                            <img src="{{ asset('storage/shop_items_photos/'.$item->photo)}}" style="height:100%;">
                            </a>
                        </div>
                        <div class="text pt-3 w-100 text-center mt-5">
                            <h3><a href="#">{{$item->item_name}}</a></h3>
                            <span style="color:#ff6600;">Ugx: {{ number_format($item->price)}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

