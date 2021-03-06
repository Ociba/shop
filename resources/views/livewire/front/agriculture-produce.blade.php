<div>
    {{-- Success is as dangerous as failure. --}} 
    @livewireStyles
    <div id="content" class="col-sm-9">
      <h2 class="category-title">{{request()->route()->getName()}}</h2>
      <div class="row category-banner">
        <div class="col-sm-12 category-image"><img src="{{ asset('front/image/banners/5.png')}}" style="width:1000px;" alt="Joome Produce" title="Joome Produce" class="img-thumbnail" /></div>
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
      <div class="grid-list-wrapper" style="margin:2px 1px 5px 15px; border:10px solid #55ad37; width:98%">
        @foreach($get_all_produces as $produce)
        <div class="product-layout product-list col-xs-12">
          <div class="product-thumb">
            <div class="image product-imageblock"> <a href="/agricultureproduce/view-produce-details/{{$produce->id}}"> <img src="{{ asset('storage/produce_photos/'.$produce->image)}}" style="height:150px;" alt="{{$produce->produce_name}}" title="{{$produce->produce_name}}" class="img-responsive" /> </a>
              
            </div>
            <div class="caption product-detail text-center" style="text-align:center;">
              <h4 class="product-name"> <a href="/agricultureproduce/view-produce-details/{{$produce->id}}" title="{{$produce->produce_name}}"> {{$produce->produce_name}} </a> | {{$produce->produce_type}}</h4>
              
                <p class="price product-price"><span class="price-old">Ugx:0</span> ugx.{{ number_format($produce->price)}} <span class="price-tax">Ex Tax: $100.00</span> </p>
                
            </div>
          </div>
          <div class="m-2">
                      <div class="col-xs-12 mb-5 text-center">
                      <a href="/agricultureproduce/view-produce-details/{{$produce->id}}" type="button" class="view">View Details</a>
                      <button type="submit" class="addtocart-btn2 clicker" tabindex="1" title="{{$produce->phone_number}}"><i class="fa fa-eye"></i> View Contact</button>
                        <span class="hiddendiv" style="color:#ffffff;">{{$produce->phone_number}}</span>
                      </div>
            </div>
        </div>
        @endforeach
      </div>
      <div class="category-page-wrapper">
        <div class="result-inner"> {{--Showing {{$get_all_produces->firstItem()}} to {{$get_all_produces->lastItem()}} out of {{$get_all_produces->total()}} items--}}</div>
        <div class="pagination-inner">
          <ul class="pagination">
            {{--<button wire:click="load" class="addtocart-btn2">Load More</button>--}}
          </ul>
        </div>
      </div>
      <div class="row">
            <div class="col-sm-12" style="margin:2px 1px 5px 15px; border:10px solid #55ad37; width:98%">
                <div class="featured-carousel owl-carousel">
                    @foreach($get_available_produce_without_discount as $item)
                    <div class="item">
                        <div class="work">
                            <div class="img d-flex align-items-center justify-content-center rounded">
                                <a href="/agricultureproduce/view-produce-details/{{$item->id}}" title="view Item Details">
                                <img src="{{ asset('storage/produce_photos/'.$item->image)}}" style="height:100%;">
                                </a>
                            </div>
                            <div class="text pt-3 w-100 text-center mt-5">
                                <h3><a href="#">{{$item->produce_name}}</a> <span style="color:#ff6600;">Ugx: {{ number_format($item->price)}}</span></h3>
                                <button type="submit" class="addtocart-btn2 clicker" tabindex="1" title="{{$item->phone_number}}"><i class="fa fa-eye"></i> View Contact</button>
                                <span class="hiddendiv" style="color:#ffffff;">{{$item->phone_number}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@livewireScripts
