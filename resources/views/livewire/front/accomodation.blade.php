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
      <div class="grid-list-wrapper">
        @foreach($available_accomodation as $accomodation)
        <div class="product-layout product-list col-xs-12">
          <div class="product-thumb">
            <div class="image product-imageblock"> <a href="/productdetails/view-details/{{$accomodation->id}}"> <img src="{{ asset('storage/accomodation_photos/'.$accomodation->photo)}}" style="height:150px; width:300px;" alt="{{$accomodation->category}} " title="{{$accomodation->category}} " class="img-responsive" /> </a>
              
            </div>
            <div class="caption product-detail">
              <h4 class="product-name"> <a href="/productdetails/view-details/{{$accomodation->id}}" title="{{$accomodation->category}} "> {{$accomodation->category}} </a> </h4>
              
                <p class="price product-price"><span class="price-old">$272.00</span> ugx.{{ number_format($accomodation->price)}} <span class="price-tax">Ex Tax: $100.00</span> </p>
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
            </div>
          </div>
           <div class="m-2">
                  <div class="col-xs-12 mb-5">
                  <a href="/productdetails/view-details/{{$accomodation->id}}" type="button" class="view">View Details</a>
                  <button type="button" class="addtocart-btn2" title="{{$accomodation->telephone}}"><i class="fa fa-eye"></i> View Contact</button>
                  </div>
            </div>
        </div>
        @endforeach
      </div>
      <div class="category-page-wrapper">
        <div class="result-inner"> Showing {{$available_accomodation->firstItem()}} to {{$available_accomodation->lastItem()}} out of {{$available_accomodation->total()}} items</div>
        <div class="pagination-inner">
          <ul class="pagination">
            <button wire:click="load" class="addtocart-btn2">Load More</button>
          </ul>
        </div>
      </div>
      @livewire('front.carousel')
    </div>
</div>
@livewireScripts
