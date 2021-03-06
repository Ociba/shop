<div>
    {{-- Do your work, then step back. --}}
    <div class="box">
        <div id="special-slidertab" class="row owl-carousel product-slider">
            @foreach($get_produce as $produce)
            <div class="item text-center">
                <div class="product-thumb transition">
                    <div class="image product-imageblock"> 
                        <a href="/agricultureproduce/view-produce-details/{{$produce->id}}"> <img src="{{asset('storage/produce_photos/'.$produce->image)}}" style="height:150px;" alt="View Details" title="{{$produce->produce_name}}" class="img-responsive" /> </a>
                    </div>
                    <div class="caption product-detail text-center">
                        <h4 class="product-name"><a href="/agricultureproduce/view-produce-details/{{$produce->id}}" title="View Produce">{{$produce->produce_name}}</a> Location: &nbsp; {{$produce->town}}</h4>
                        <p class="price product-price"> 
                            <span class="price-new">Ugx: {{ number_format($produce->price)}}</span> {{--<span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span>--}}
                            | <a href="/agricultureproduce/view-produce-details/{{$produce->id}}" title="{{$produce->phone_number}}" style="color:green;"> View more</a>
                         </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
