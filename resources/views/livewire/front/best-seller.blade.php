<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="box">
        <div id="bestseller-slidertab" class="row owl-carousel product-slider">
            @foreach($get_equipments as $equipments)
            <div class="item">
                <div class="product-thumb transition">
                    <div class="image product-imageblock"> <a href="/agricultureequipments/view-equipment-details/{{$equipments->id}}"> <img src="{{ asset('storage/shop_items_photos/'.$equipments->photo)}}" style="height:150px;" alt="Equipments" title="Equipments" class="img-responsive" /> </a>
                        
                    </div>
                    <div class="caption product-detail">
                        <h4 class="product-name"><a href="/agricultureequipments/view-equipment-details/{{$equipments->id}}" title="Equipments">{{$equipments->equipment}}</a></h4>
                        <p class="price product-price"> <span class="price-new">Ugx: {{ number_format($equipments->price)}}</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                    </div>
                    <div class="m-2">
                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <input type="hidden" value="{{ $equipments->id }}" name="id">
                                <input type="hidden" value="{{$equipments->equipment }}" name="name">
                                <input type="hidden" value="{{ $equipments->price }}" name="price">
                                <input type="hidden" value="{{ $equipments->photo }}"  name="image">
                                <input type="hidden" value="1" name="quantity">
                                <div class="col-xs-12 mb-5">
                                <a href="/agricultureequipments/view-equipment-details/{{$equipments->id}}" type="button" class="view">View Details</a>
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
