<div>
    {{-- In work, do what you enjoy. --}}
    <div class="blog">
        <div class="blog-heading">
            <h3>Your Favourate Kitchen</h3>
        </div>
        <div class="blog-inner box">
            <ul class="list-unstyled blog-wrapper" id="latest-blog">
                @foreach($get_food_now as $food)
                <li class="item blog-slider-item">
                    <div class="panel-default">
                        <div class="blog-image"> <a href="/food/view-food-details/{{$food->id}}" class="blog-imagelink"><img src="{{ asset('storage/shop_items_photos/'.$food->photo)}}" style="height:300px;" alt="#"></a> <span class="blog-hover"></span> <span class="blog-date">{{$food->food_type}}</span> <span class="blog-readmore-outer"><a href="/food/view-food-details/{{$food->id}}" class="blog-readmore">View More Details</a></span> </div>
                        <div class="blog-content"> <a href="/food/view-food-details/{{$food->id}}" class="blog-name">
                            <h2 style="color:green;">{{$food->ingredients}}</h2>
                            </a>
                            <div class="m-2">
                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                    <input type="hidden" value="{{ $food->id }}" name="id">
                                    <input type="hidden" value="{{ $food->food_type }}" name="name">
                                    <input type="hidden" value="{{ $food->amount }}" name="price">
                                    <input type="hidden" value="{{ $food->photo }}"  name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <div class="col-xs-12 mb-5 text-center">
                                    <a href="#" type="button" class="view">Ugx: {{ number_format($food->amount)}}</a>
                                    <button type="submit" class="addtocart-btn2">Add to Cart</button>
                                    </div>
                                </form>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
