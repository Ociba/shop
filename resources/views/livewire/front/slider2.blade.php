<div>
    {{-- Stop trying to control. --}}
    <div id="brand_carouse" class="owl-carousel brand-logo">
         @foreach($get_equipments as $equipments)
        <div class="item text-center"> 
            <a href="/agricultureequipments/view-equipment-details/{{$equipments->id}}"><img src="{{ asset('storage/shop_items_photos/'.$equipments->photo)}}" style="height:150px;" alt="Equipments" class="img-responsive" /></a>
            <p>{{$equipments->equipment}} | Ugx: {{ number_format($equipments->price)}}</p>
            <div class="m-2">
                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <input type="hidden" value="{{ $equipments->id }}" name="id">
                        <input type="hidden" value="{{$equipments->equipment }}" name="name">
                        <input type="hidden" value="{{ $equipments->price }}" name="price">
                        <input type="hidden" value="{{ $equipments->photo }}"  name="image">
                        <input type="hidden" value="1" name="quantity">
                        <div class="col-xs-12 mt-5">
                        <a href="/agricultureequipments/view-equipment-details/{{$equipments->id}}" type="button" class="view">View Details</a>
                        <button type="submit" class="addtocart-btn2">Add to Cart</button>
                        </div>
                    </form>
            </div> 
    </div>
        @endforeach
    </div>
</div>
