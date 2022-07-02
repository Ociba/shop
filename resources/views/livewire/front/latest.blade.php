<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="box">
        <div id="latest-slidertab" class="row owl-carousel product-slider">
            @foreach($get_latest_accomodation as $accomodation)
            <div class="item">
                <div class="product-thumb transition">
                    <div class="image product-imageblock"> <a href="/productdetails/view-details/{{$accomodation->id}}"><img src="{{ asset('storage/accomodation_photos/'.$accomodation->photo)}}" style="height:150px;" alt="View More" title="Accomodation" class="img-responsive" /> </a>
                        
                       
                    </div>
                    <div class="caption product-detail">
                        <h4 class="product-name"><a href="#" title="Accomodation">{{$accomodation->category}}</a> | Location:{{$accomodation->location}} </h4>
                        <p class="price product-price"> Ugx:{{ number_format($accomodation->price)}}<span class="price-tax">Ex Tax: $100.00</span></p>
                        <div class="rating"><button type="button" class="addtocart-btn2" title="{{$accomodation->telephone}}">View Contact</button> </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
