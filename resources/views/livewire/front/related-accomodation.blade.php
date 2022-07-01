<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="box">
        <div id="related-slidertab" class="row owl-carousel product-slider">     
            {{--<div class="item">
                <div class="product-thumb transition">
                    <div class="image product-imageblock"> <a href="#"> <img src="{{ asset('storage/accomodation_photos/'.$category->photo)}}" alt="iPhone" title="iPhone" class="img-responsive" /> </a>
                        <div class="button-group">
                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                            <button type="button" class="addtocart-btn">Add to Cart</button>
                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                        </div>
                    </div>
                    <div class="caption product-detail">
                        <h4 class="product-name"><a href="product.html" title="iPhone">iPhone</a></h4>
                        <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                    </div>
                    <div class="button-group">
                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                        <button type="button" class="addtocart-btn">Add to Cart</button>
                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                    </div>
                </div>
            </div>--}}
            @foreach($related_accomodation as $accomodation)
            <div class="item">
                <div class="product-thumb transition">
                    <div class="image product-imageblock"> <a href="#"> <img src="{{ asset('storage/accomodation_photos/'.$accomodation->photo)}}" style="height: 100px; width: 150px;" alt="iPhone" title="iPhone" class="img-responsive" /> </a>
                       
                    </div>
                    <div class="caption product-detail">
                        <h4 class="product-name"><a href="product.html" title="iPhone">{{$accomodation->category}}</a></h4>
                        <p class="price product-price"> <span class="price-new">Ugx:{{ number_format($accomodation->price)}}</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                    </div>
                    <div class="button-group">
                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                        <button type="button" class="addtocart-btn">Add to Cart</button>
                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
