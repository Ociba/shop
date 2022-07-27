<div>
@livewireStyles
    {{-- Success is as dangerous as failure. --}}
    <div id="content" class="col-sm-9">
      <h2 class="category-title">{{request()->route()->getName()}}</h2>
      <div class="row category-banner">
        <div class="col-sm-12 category-image"><img src="{{ asset('front/image/banners/6.png')}}" style="width:100%;" alt="Joome Accomodation" title="Joome Accomodation" class="img-thumbnail" /></div>
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
        @foreach($available_accomodation as $accomodation)
        <div class="product-layout product-list col-xs-12 text-center">
          <div class="product-thumb">
            <div class="image product-imageblock"> <a href="/productdetails/view-details/{{$accomodation->id}}"> <img src="{{ asset('storage/accomodation_photos/'.$accomodation->photo)}}" style="height:150px; width:300px;" alt="{{$accomodation->category}} " title="{{$accomodation->category}} " class="img-responsive" /> </a>
              
            </div>
            <div class="caption product-detail text-center">
              <h4 class="product-name"> <a href="/productdetails/view-details/{{$accomodation->id}}" title="{{$accomodation->category}} "> {{$accomodation->category}} | ugx.{{ number_format($accomodation->price)}}</a> </h4>
            </div>
          </div>
           <div class="m-2">
                  <div class="col-xs-12 mb-5 text-center">
                  <a href="/productdetails/view-details/{{$accomodation->id}}" type="button" class="view">View Details</a>
                  <button type="button" class="addtocart-btn2 clicker" tabindex="1" title="{{$accomodation->telephone}}"><i class="fa fa-eye"></i> View Contact</button>
                  <span class="hiddendiv">{{$accomodation->telephone}}</span>
                  </div>
            </div>
        </div>
        @endforeach
      </div>
      <div class="category-page-wrapper">
        {{--<div class="result-inner"> Showing {{$available_accomodation->firstItem()}} to {{$available_accomodation->lastItem()}} out of {{$available_accomodation->total()}} items</div>--}}
        <div class="pagination-inner">
          <ul class="pagination">
            {{--<button wire:click="load" class="addtocart-btn2">Load More</button>--}}
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
            <div class="featured-carousel owl-carousel" style="margin:2px 1px 5px 15px; border:10px solid #55ad37; width:98%">
                @foreach($all_available_accomodation as $accomodation)
                <div class="item">
                    <div class="work">
                        <div class="img d-flex align-items-center justify-content-center rounded">
                            <a href="/productdetails/view-details/{{$accomodation->id}}" title="view Property Details">
                            <img src="{{ asset('storage/accomodation_photos/'.$accomodation->photo)}}" style="height:100%;">
                            </a>
                        </div>
                        <div class="text pt-3 w-100 text-center mt-5">
                            <h3><a href="#">{{$accomodation->category}}</a> <span style="color:#ff6600;"> Ugx: {{ number_format($accomodation->price)}}</span></h3>
                            <button type="button" class="addtocart-btn2 clicker" tabindex="1" title="{{$accomodation->telephone}}"><i class="fa fa-eye"></i> View Contact</button>
                            <span class="hiddendiv" style="color:#ffffff;">{{$accomodation->telephone}}</span>
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

