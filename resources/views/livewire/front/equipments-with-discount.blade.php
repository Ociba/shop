<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="row">
        <div class="col-sm-12">
            <h3 class="heading-section mb-5 pb-md-4 productblock-title">Equipments With Discount</h3>
        </div>
        <div class="col-sm-12">
            <div class="featured-carousel owl-carousel">
               @foreach($get_equipments_with_discount as $equip)
               @php 
                $equip_id=$equip->id;
                $discount_percentage =$equip->equipment_discount;
                $percentage =$discount_percentage * 0.01;
                $equipment_amount =DB::table('equipment')->where('id',$equip->id)->where('equipment_discount','!=',null)->value('price');
                $calculate_percentage_amount =$equipment_amount * $percentage;
                $new_discount_amount =$equipment_amount-$calculate_percentage_amount;
               @endphp
                <div class="item">
                    <div class="work">
                        <div class="img d-flex align-items-center justify-content-center rounded">
                            <a href="#" title="Joome Equipments With Discount">
                            <img src="{{ asset('storage/shop_items_photos/'.$equip->photo)}}" style="height:80%; width:80%">
                            </a>
                        </div>
                        <div class="text pt-3 w-100 text-center mt-5">
                            <h3><a href="#">{{$equip->equipment}} &nbsp; &nbsp; <span style="color:#ff6600;">{{$equip->equipment_discount}} %</span></a></h3>
                            <p class="price product-price"> <span class="price-old" style="text-decoration: line-through;">Ugx: {{ number_format($equip->price)}}</span> <span class="price-new" style="color:#ff6600;">Ugx: {{ number_format($new_discount_amount)}}</span></p>
                            <p>{{$equip->description}}</p>
                        </div>
                        <div class="m-2">
                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <input type="hidden" value="{{ $equip->id }}" name="id">
                                <input type="hidden" value="{{$equip->equipment }}" name="name">
                                <input type="hidden" value="{{$new_discount_amount }}" name="price">
                                <input type="hidden" value="{{ $equip->photo }}"  name="image">
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
