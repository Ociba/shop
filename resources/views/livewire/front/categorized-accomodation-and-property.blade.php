<div>
@livewireStyles
    {{-- Success is as dangerous as failure. --}}
    <div id="content" class="col-sm-9">
      <h2 class="category-title">{{request()->route()->getName()}}</h2>
      <div class="row category-banner">
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
      <div class="grid-list-wrapper">
        @foreach($get_categorized_acomodation_and_property as $accomodation)
        <div class="product-layout product-list col-xs-12">
          <div class="product-thumb">
            <div class="image product-imageblock"> <a href="/productdetails/view-details/{{$accomodation->id}}"> <img src="{{ asset('storage/accomodation_photos/'.$accomodation->photo)}}" style="height:150px; width:300px;" alt="{{$accomodation->category}} " title="{{$accomodation->category}} " class="img-responsive" /> </a>
              
            </div>
            <div class="caption product-detail text-center">
              <h4 class="product-name"> <a href="/productdetails/view-details/{{$accomodation->id}}" title="{{$accomodation->category}} "> {{$accomodation->category}} </a> </h4>
              
                <p class="price product-price"><span class="price-old">$272.00</span> ugx.{{ number_format($accomodation->price)}} <span class="price-tax">Ex Tax: $100.00</span> </p>
            </div>
          </div>
           <div class="m-2">
                  <div class="col-xs-12 mb-5">
                  <a href="/productdetails/view-details/{{$accomodation->id}}" type="button" class="view">View Details</a>
                  <button type="button" class="addtocart-btn2 clicker" tabindex="1" title="{{$accomodation->telephone}}"><i class="fa fa-eye"></i> View Contact</button>
                  <span class="hiddendiv" style="color:#ffffff;">{{$accomodation->telephone}}</span>
                  </div>
            </div>
        </div>
        @endforeach
      </div>
      <div class="row">
                <div class="col-sm-12">
                    <h3 class="heading-section mb-5 pb-md-4 productblock-title">You May Like This</h3>
                </div>
                @php
                $get_all_available_accomodation= \DB::table('acomodations')->join('categories','categories.id','acomodations.category_id')
                ->join('users','users.id','acomodations.user_id')
                ->where('acomodations.status','available')
                ->get(['acomodations.*','users.name','users.telephone','categories.category']);
                @endphp
                <div class="col-sm-12">
                    <div class="featured-carousel owl-carousel">
                        @foreach($get_all_available_accomodation as $accomodation)
                        <div class="item">
                            <div class="work">
                                <div class="img d-flex align-items-center justify-content-center rounded">
                                <a href="/productdetails/view-details/{{$accomodation->id}}">
                                    <img src="{{ asset('storage/accomodation_photos/'.$accomodation->photo)}}" style="height:100%">
                                    </a>
                                </div>
                                <div class="text pt-3 w-100 text-center mt-5">
                                    <h3><a href="#">{{$accomodation->category}}</a></h3>
                                    <p>{{$accomodation->location}}</p>
                                    <span style="color:#ff6600;">Ugx: {{ number_format($accomodation->price)}}</span>
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
