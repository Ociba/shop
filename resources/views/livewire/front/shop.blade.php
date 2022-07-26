<div>
@livewireStyles
    {{-- Success is as dangerous as failure. --}}
    <div id="content" class="col-sm-9">
      <h2 class="category-title">{{request()->route()->getName()}}</h2>
      <div class="row category-banner" style="height:10px">
        <div class="col-sm-12 category-image"><img src="{{ asset('front/image/banners/3.png')}}" style="width:100%;;" alt="Joome Shop" title="Joome Shop" class="img-thumbnail" /></div>
        @include('frontlayouts.information')
      </div>
      <div class="category-page-wrapper">
        <div class="col-md-6 list-grid-wrapper">
          <div class="btn-group btn-list-grid">
            <button type="button" id="list-view" class="btn btn-default list" data-toggle="tooltip" title="List"><i class="fa fa-th-list"></i></button>
            <button type="button" id="grid-view" class="btn btn-default grid" data-toggle="tooltip" title="Grid"><i class="fa fa-th"></i></button>
          </div>
          <a href="#" id="compare-total">Product Compare (0)</a> </div>
        <div class="col-md-1 text-right page-wrapper">
          <label class="control-label" for="input-limit">Show:</label>
          <div class="limit">
            <select id="input-limit" class="form-control">
              <option value="8" selected="selected">8</option>
              <option value="25">25</option>
              <option value="50">50</option>
              <option value="75">75</option>
              <option value="100">100</option>
            </select>
          </div>
        </div>
        <div class="col-md-2 text-right sort-wrapper">
          <label class="control-label" for="input-sort">Sort By:</label>
          <div class="sort-inner">
            <select id="input-sort" class="form-control">
              <option value="ASC" selected="selected">Default</option>
              <option value="ASC">Name (A - Z)</option>
              <option value="DESC">Name (Z - A)</option>
              <option value="ASC">Price (Low &gt; High)</option>
              <option value="DESC">Price (High &gt; Low)</option>
              <option value="DESC">Rating (Highest)</option>
              <option value="ASC">Rating (Lowest)</option>
              <option value="ASC">Model (A - Z)</option>
              <option value="DESC">Model (Z - A)</option>
            </select>
          </div>
        </div>
      </div>
      <br />
      <div class="grid-list-wrapper" style="margin:2px 1px 5px 15px; border:10px solid #55ad37; width:98%">
        @foreach($get_all_shop_items as $shop)
        <div class="product-layout product-list col-xs-12">
          <div class="product-thumb">
            <div class="image product-imageblock"> <a href="/shop/view-details/{{$shop->id}}"> <img src="{{ asset('storage/shop_items_photos/'.$shop->photo)}}" style="height:150px;" alt="{{$shop->item_name}} " title="{{$shop->item_name}} " class="img-responsive" /> </a>
              
            </div>
            <div class="caption product-detail">
              <h4 class="product-name"> <a href="/shop/view-details/{{$shop->id}}" title="{{$shop->item_name}} "> {{$shop->item_name}} </a> </h4>
              
                <p class="price product-price"><span class="price-old">Ugx:0</span> ugx.{{ number_format($shop->price)}} <span class="price-tax">Ex Tax: $100.00</span> </p>
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
            </div>
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
        @endforeach
      </div>
      <div class="category-page-wrapper">
        <div class="result-inner"> {{--Showing {{$get_all_shop_items->firstItem()}} to {{$get_all_shop_items->lastItem()}} out of {{$get_all_shop_items->total()}} items--}}</div>
        <div class="pagination-inner">
          <ul class="pagination">
            {{--<button wire:click="load" class="addtocart-btn2">Load More</button>--}}
          </ul>
        </div>
      </div>
      @livewire('front.carousel')
    </div>
</div>
@livewireScripts
