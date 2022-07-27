<div>
@livewireStyles
    {{-- Success is as dangerous as failure. --}}
    <div id="content" class="col-sm-9">
      <h2 class="category-title">{{request()->route()->getName()}}</h2>
      <div class="row category-banner">
        <div class="col-sm-12 category-image"><img src="{{ asset('front/image/banners/4.png')}}" style="width:100%;height:20%" alt="Joome Agricultural Equipments" title="Joome Agricultural Equipments" class="img-thumbnail" /></div>
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
        @foreach($get_equipments as $equipment)
        <div class="product-layout product-list col-xs-12">
          <div class="product-thumb">
            <div class="image product-imageblock"> <a href="/agricultureequipments/view-equipment-details/{{$equipment->id}}"> <img src="{{ asset('storage/shop_items_photos/'.$equipment->photo)}}" style="height:150px;" alt="{{$equipment->item_name}}" title="{{$equipment->item_name}}" class="img-responsive" /> </a>
              
            </div>
            <div class="caption product-detail text-center">
              <h4 class="product-name"> <a href="/agricultureequipments/view-equipment-details/{{$equipment->id}}" title="{{$equipment->equipment}}"> {{$equipment->item_name}} </a> </h4>
              
                <p class="price product-price"><span class="price-old">Ugx:0</span> ugx.{{ number_format($equipment->price)}} <span class="price-tax">Ex Tax: $100.00</span> </p>
                {{--<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>--}}
            </div>
          </div>
          <div class="m-2">
             
               <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data" class="text-center">
                    @csrf
                      <input type="hidden" value="{{ $equipment->id }}" name="id">
                      <input type="hidden" value="{{ $equipment->item_name }}" name="name">
                      <input type="hidden" value="{{ $equipment->price }}" name="price">
                      <input type="hidden" value="{{ $equipment->photo }}"  name="image">
                      <input type="hidden" value="1" name="quantity">
                      <div class="col-xs-12 mb-5">
                      <a href="/agricultureequipments/view-equipment-details/{{$equipment->id}}" type="button" class="view">View Details</a>
                      <button type="submit" class="addtocart-btn2">Add to Cart</button>
                      </div>
                  </form>
            </div>
        </div>
        @endforeach
      </div>
      <div class="category-page-wrapper">
        <div class="result-inner"> {{--Showing {{$get_equipments->firstItem()}} to {{$get_equipments->lastItem()}} out of {{$get_equipments->total()}} items--}}</div>
        <div class="pagination-inner">
          <ul class="pagination">
            {{--<button wire:click="load" class="addtocart-btn2">Load More</button>--}}
          </ul>
        </div>
      </div>
      <div class="row">
                <div class="col-sm-12" style="margin:2px 1px 5px 15px; border:10px solid #55ad37; width:98%">
                    <div class="featured-carousel owl-carousel">
                        @foreach($all_equipments as $item)
                        <div class="item text-center">
                            <div class="work">
                                <div class="img d-flex align-items-center justify-content-center rounded">
                                    <a href="/agricultureequipments/view-equipment-details/{{$item->id}}" title="view Item Details">
                                    <img src="{{ asset('storage/shop_items_photos/'.$item->photo)}}" style="height:100%;">
                                    </a>
                                </div>
                                <div class="text pt-3 w-100 text-center mt-5">
                                    <h3><a href="#">{{$item->item_name}}</a> <span style="color:#ff6600;">Ugx: {{ number_format($item->price)}}</span></h3>
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
