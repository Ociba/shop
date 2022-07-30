<div>
    {{-- In work, do what you enjoy. --}}
   
    <div class="box">
    <div class="blog-heading">
            <h3>Your Favourate Kitchen</h3>
        </div>
        <div id="bestseller-slidertab" class="row owl-carousel product-slider">
        @foreach($get_food_now as $food)
            <div class="item">
                <div class="product-thumb transition">
                    <div class="image product-imageblock"> <a href="/food/view-food-details/{{$food->id}}"> <img src="{{ asset('storage/shop_items_photos/'.$food->photo)}}" style="height:180px;" alt="food" title="food" class="img-responsive" /> </a>
                    </div>
                    <div class="caption product-detail text-center">
                        <h4 class="product-name"><a href="/food/view-food-details/{{$food->id}}" title="Your Food">{{$food->item_name}}</a></h4>
                        <p class="price product-price"> <span class="price-new">Ugx: {{ number_format($food->price)}}</span> </p>
                    </div>
                    <div class="m-2">
                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data" class="text-center">
                            @csrf
                            <input type="hidden" value="{{ $food->id }}" name="id">
                            <input type="hidden" value="{{$food->item_name }}" name="name">
                            <input type="hidden" value="{{ $food->price }}" name="price">
                            <input type="hidden" value="{{ $food->photo }}"  name="image">
                            <input type="hidden" value="1" name="quantity">
                            <div class="col-xs-12 mb-5">
                                <a href="/food/view-food-details/{{$food->id}}" type="button" class="view">View Details</a>
                                <button type="submit" class="addtocart-btn2">Add to Cart</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
