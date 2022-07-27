<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="box">
        <div id="latest-slidertab" class="row owl-carousel product-slider">
            @foreach($get_latest_accomodation as $accomodation)
            <div class="item text-center">
                <div class="product-thumb transition">
                    <div class="image product-imageblock"> <a href="/productdetails/view-details/{{$accomodation->id}}"><img src="{{ asset('storage/accomodation_photos/'.$accomodation->photo)}}" style="height:150px;" alt="View More" title="{{$accomodation->category}}" class="img-responsive" /> </a>
                        
                       
                    </div>
                    <div class="caption product-detail text-center">
                        <h4 class="product-name"><a href="#" title="{{$accomodation->category}}">{{$accomodation->category}}</a> | Location:{{$accomodation->location}} </h4>
                        <p class="price product-price"> Ugx:{{ number_format($accomodation->price)}}<span class="price-tax">Ex Tax: $100.00</span></p>
                        <a href="/productdetails/view-details/{{$accomodation->id}}" title="{{$accomodation->phone_number}}" style="color:green;"> View more</a>  
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
