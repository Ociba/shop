<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    @livewireStyles
    <div id="content" class="col-sm-9">
      <h2 class="category-title">{{request()->route()->getName()}}</h2>
      <div class="row category-banner">
        <div class="col-sm-12 category-image"><img src="{{ asset('front/image/banners/2.png')}}" style="width:100%" alt="Joome Food" title="Joome Food" class="img-thumbnail" /></div>
        @include('frontlayouts.information')
      </div>
      <div class="category-page-wrapper">
        <div class="col-md-6 list-grid-wrapper">
          <div class="btn-group btn-list-grid">
            <button type="button" id="list-view" class="btn btn-default list" data-toggle="tooltip" title="List"><i class="fa fa-th-list"></i></button>
            <button type="button" id="grid-view" class="btn btn-default grid" data-toggle="tooltip" title="Grid"><i class="fa fa-th"></i></button>
          </div>
          <a href="#" id="compare-total">Product Compare (0)</a> </div>
      </div>
      <br />
      <div class="grid-list-wrapper" style="margin:2px 1px 5px 15px; border:10px solid #55ad37; width:99%">
        @foreach($get_food_data as $food)
        <div class="product-layout product-list col-xs-12 text-center">
          <div class="product-thumb">
            <div class="image product-imageblock"> <a href="/food/view-food-details/{{$food->id}}"> <img src="{{ asset('storage/shop_items_photos/'.$food->photo)}}" style="height:150px;" alt="shop" title="{{$food->food_type}}" class="img-responsive" /> </a>
              
            </div>
            <div class="caption product-detail text-center">
              <h4 class="product-name"> <a href="/food/view-food-details/{{$food->id}}" title="{{$food->food_type}}"> {{$food->food_type}} </a> </h4>
              
                <p class="price product-price"><span class="price-old">Ugx:0</span> ugx.{{ number_format($food->amount)}} <span class="price-tax">Ex Tax: $100.00</span> </p>
            </div>
          </div>
          <div class="m-2">
             
               <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data" class="text-center">
                    @csrf
                      <input type="hidden" value="{{ $food->id }}" name="id">
                      <input type="hidden" value="{{ $food->food_type }}" name="name">
                      <input type="hidden" value="{{ $food->amount }}" name="price">
                      <input type="hidden" value="{{ $food->photo }}"  name="image">
                      <input type="hidden" value="1" name="quantity">
                      <div class="col-xs-12 mb-5">
                      <a href="/food/view-food-details/{{$food->id}}" type="button" class="view">View Details</a>
                      <button type="submit" class="addtocart-btn2">Add to Cart</button>
                      </div>
                  </form>
            </div>
        </div>
        @endforeach
      </div>
      <div class="category-page-wrapper">
        <div class="result-inner"> {{--Showing {{$get_food_data->firstItem()}} to {{$get_food_data->lastItem()}} out of {{$get_food_data->total()}} items--}}</div>
        <div class="pagination-inner">
          <ul class="pagination">
            {{--<button wire:click="load" class="addtocart-btn2">Load More</button>--}}
          </ul>
        </div>
      </div>
      <div class="row">
                <div class="col-sm-12" style="margin:2px 1px 5px 15px; border:10px solid #55ad37; width:98%">
                    <div class="featured-carousel owl-carousel">
                        @foreach($all_foods as $foods)
                        <div class="item">
                            <div class="work">
                                <div class="img d-flex align-items-center justify-content-center rounded">
                                    <a href="/food/view-food-details/{{$food->id}}" title="view Item Details">
                                    <img src="{{ asset('storage/shop_items_photos/'.$foods->photo)}}" style="height:100%;">
                                    </a>
                                </div>
                                <div class="text pt-3 w-100 text-center mt-5">
                                    <h3><a href="#">{{$foods->food_type}}</a>  <span style="color:#ff6600;">Ugx: {{ number_format($foods->amount)}}</span></h3>
                                   
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
    </div>
    </div>
</div>
@livewireScripts
</div>
