<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="box">
        <div id="related-slidertab" class="row owl-carousel product-slider">     
            @foreach($related_accomodation as $accomodation)
            <div class="item text-center">
                <div class="product-thumb transition">
                    <div class="image product-imageblock"> <a href="/productdetails/view-details/{{$accomodation->id}}"> <img src="{{ asset('storage/accomodation_photos/'.$accomodation->photo)}}" style="height: 100px; width: 100%;" alt="{{$accomodation->category}}" title="{{$accomodation->category}}" class="img-responsive" /> </a>
                       
                    </div>
                    <div class="caption product-detail">
                        <h4 class="product-name"><a href="/productdetails/view-details/{{$accomodation->id}}" title="{{$accomodation->category}}">{{$accomodation->category}} | Ugx:{{ number_format($accomodation->price)}}</a></h4>
                        {{--<p class="price product-price"> <span class="price-new"></span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>--}}
                        <button type="button" class="addtocart-btn2 clicker" tabindex="1" title="{{$accomodation->telephone}}"><i class="fa fa-eye"></i> View Contact</button>
                        <span class="hiddendiv" style="color:#ffffff;">{{$accomodation->telephone}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
