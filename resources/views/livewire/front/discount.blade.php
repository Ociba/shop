<div>
<div class="row" style="margin-bottom:25px;">

<div class="col-md-12">
<div class="section-title">
<h3 class="title">Top Promotion selling</h3>
</div>
</div>


<div class="col-md-12">
<div class="row">
<div class="products-tabs">

<div id="tab2" class="tab-pane fade in active">
<div class="products-slick" data-nav="#slick-nav-2">
@foreach($get_items_on_promotion as $discount)
<div class="product">
<div class="product-img">
<img src="{{asset('storage/shop_items_photos/'.$discount->photo)}}" style="height:300px;" alt="">
<div class="product-label">
<span class="sale">-30%</span>
<span class="new">NEW</span>
</div>
</div>
<div class="product-body">
<h3 class="product-name"><a href="/shop/view-details/{{$discount->id}}">{{$discount->item_name}}</a></h3>
<h4 class="product-price">Ugx : {{ number_format($discount->price)}} </h4>
</div>
<div class="add-to-cart">
    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data" class="text-center">
    @csrf
        <input type="hidden" value="{{ $discount->id }}" name="id">
        <input type="hidden" value="{{ $discount->item_name }}" name="name">
        <input type="hidden" value="{{ $discount->price }}" name="price">
        <input type="hidden" value="{{ $discount->photo }}"  name="image">
        <input type="hidden" value="1" name="quantity">
        <div class="col-xs-12 mb-5">
        <a href="/shop/view-details/{{$discount->id}}" type="button" class="view">View Details</a>
        <button type="submit" class="add-to-cart-btn addtocart-btn2">Add to Cart</button>
        </div>
    </form>
</div>
</div>
@endforeach

</div>
<div id="slick-nav-2" class="products-slick-nav"></div>
</div>

</div>
</div>
</div>

</div>
</div>
