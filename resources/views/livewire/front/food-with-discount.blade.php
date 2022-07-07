<div>
    <div class="row">
        <div class="col-sm-12">
            <h3 class="heading-section mb-5 pb-md-4 productblock-title">Food With Discount</h3>
        </div>
        <div class="col-sm-12">
            <div class="featured-carousel owl-carousel">
               @foreach($get_food_with_discount as $food)
               @php 
                $food_id=$food->id;
                $discount_percentage =$food->discount_percentage;
                $percentage =$discount_percentage * 0.01;
                $food_amount =DB::table('food')->where('id',$food->id)->where('discount_percentage','!=',null)->value('amount');
                $calculate_percentage_amount =$food_amount * $percentage;
                $new_discount_amount =$food_amount-$calculate_percentage_amount;
               @endphp
                <div class="item">
                    <div class="work">
                        <div class="img d-flex align-items-center justify-content-center rounded">
                            <a href="#" title="Joome Food With Discount">
                            <img src="{{ asset('storage/shop_items_photos/'.$food->photo)}}" style="height:80%;">
                            </a>
                        </div>
                        <div class="text pt-3 w-100 text-center mt-5">
                            <h3><a href="#">{{$food->food_type}} &nbsp; &nbsp; <span style="color:#ff6600;">{{$food->discount_percentage}} %</span></a></h3>
                            <p class="price product-price"> <span class="price-old" style="text-decoration: line-through;">Ugx: {{ number_format($food->amount)}}</span> <span class="price-new" style="color:#ff6600;">Ugx: {{ number_format($new_discount_amount)}}</span></p>
                            <p>{{$food->ingredients}}</p>
                        </div>
                        <div class="m-2">
                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <input type="hidden" value="{{ $food->id }}" name="id">
                                <input type="hidden" value="{{$food->food_type }}" name="name">
                                <input type="hidden" value="{{$new_discount_amount }}" name="price">
                                <input type="hidden" value="{{ $food->photo }}"  name="image">
                                <input type="hidden" value="1" name="quantity">
                                <div class="col-xs-12 mb-5 text-center">
                                <button type="submit" class="addtocart-btn2">Add To Cart</button>
                                </div>
                            </form>
                    </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
