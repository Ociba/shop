<div>
    {{-- Stop trying to control. --}}
    <div class="blog-heading">
            <h3>Your Agriculture Eqipments</h3>
    </div>
        <div id="brand_carouse" class="owl-carousel brand-log" style="margin:2px 1px 5px 15px; border:10px solid #55ad37; width:97%">
            @foreach($get_equipment as $equipments)
            <div class="item text-center" style="margin:2px;"> 
                <a href="/agricultureequipments/view-equipment-details/{{$equipments->id}}"><img src="{{ asset('storage/shop_items_photos/'.$equipments->photo)}}" style="height:150px; width:100%;" alt="Equipments" class="img-responsive" /></a>
                <p class="text-center">{{$equipments->item_name}} | Ugx: {{ number_format($equipments->price)}}</p>
                <div class="">
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <input type="hidden" value="{{ $equipments->id }}" name="id">
                        <input type="hidden" value="{{$equipments->item_name }}" name="name">
                        <input type="hidden" value="{{ $equipments->price }}" name="price">
                        <input type="hidden" value="{{ $equipments->photo }}"  name="image">
                        <input type="hidden" value="1" name="quantity">
                        <div class="mt-5">
                        <a href="/agricultureequipments/view-equipment-details/{{$equipments->id}}" type="button" style="color:#ff6600">view details</a>
                        <button type="submit" style="color:#55ad37; border:none;background:#fff;">add to cart</button>
                        </div>
                    </form>
                </div> 
            </div>
            @endforeach
        </div>
    </div>
