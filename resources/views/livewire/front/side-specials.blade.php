<div>
    {{-- The whole world belongs to you. --}}
    <h3 class="productblock-title">Specials</h3>
      <div class="row special-grid product-grid">
      @php
              $get_food_items=\DB::table('shops')->where('discount',null)->orderBy('shops.created_at','DESC')->where('item_category_id',11)->where('classification', 'unclassified')->limit(4)->get();
          @endphp
          @foreach($get_food_items as $food)
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 product-grid-item">
              <div class="product-thumb transition">
                  <div class="image product-imageblock"> <a href="/food/view-food-details/{{$food->id}}"><img src="{{ asset('storage/shop_items_photos/'.$food->photo)}}" style="width:65px;height:40px" alt="Joome Food" title="Joome Food" class="img-responsive" /></a>
                      
                  </div>
                  <div class="caption product-detail">
                      <h4 class="product-name"> <a href="/food/view-food-details/{{$food->id}}" title="Joome Food">{{$food->item_name}}</a> </h4>
                      <p class="price product-price"> <span class="price-new">Ugx:{{ number_format($food->price)}}</span> {{--<span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span>--}} </p>
                  </div>
                  <div class="button-group">
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          <input type="hidden" value="{{ $food->id }}" name="id">
                          <input type="hidden" value="{{ $food->item_name }}" name="name">
                          <input type="hidden" value="{{ $food->price }}" name="price">
                          <input type="hidden" value="{{ $food->photo }}"  name="image">
                          <input type="hidden" value="1" name="quantity">
                          <div class="col-xs-12 mb-5">
                          <button type="submit" class="addtocart-btn" style="border:none; hover:green; margin-left:-10px">Add to Cart</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
          @endforeach
      </div>
</div>
