<div>
    {{-- The whole world belongs to you. --}}
    
    <div class="row" style="margin-bottom:25px;">

<div class="col-md-12">
<div class="section-title">
<h3 class="title">Products With Discount</h3>
</div>
</div>


<div class="col-md-12">
<div class="row">
<div class="products-tabs" style="border:none;">

<div id="tab2" class="tab-pane fade in active">
<div class="products-slick" data-nav="#slick-nav-2">
@foreach($get_shop_items as $shop)
@php 
$product_id=$shop->id;
$percetage =$shop->discount * 0.01;
$product_amount =DB::table('shops')->where('id',$shop->id)->where('discount','!=',null)->value('price');
$calculate_percentage_mount =$product_amount * $percetage;
$new_discount_amount =$product_amount-$calculate_percentage_mount;
@endphp
<div class="product">
<div class="product-img">
<img src="{{asset('storage/shop_items_photos/'.$shop->photo)}}" style="height:200px;" alt="">
<div class="product-label">
<span class="sale">-{{$shop->discount}}%</span>
<span class="new">NEW</span>
</div>
</div>
<div class="product-body">
<h3 class="product-name"><a href="/shop/discount-product-details/{{$shop->id}}">{{$shop->item_name}}</a></h3>
<h4 class="product-price">Ugx : {{ number_format($new_discount_amount)}} <del class="product-old-price">Ugx : {{ number_format($shop->price)}}</del></h4>
</div>
<div class="add-to-cart">
    <form wire:submit.prevent="addToCart" action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data" class="text-center">
    @csrf
        <input type="hidden" value="{{ $shop->id }}" name="id">
        <input type="hidden" value="{{$shop->item_name }}" name="name">
        <input type="hidden" value="{{$new_discount_amount }}" name="price">
        <input type="hidden" value="{{ $shop->photo }}"  name="image">
        <input type="hidden" value="1" name="quantity">
        <div class="col-xs-12 mb-5">
        <a href="/shop/discount-product-details/{{$shop->id}}" type="button" class="view">View Details</a>
        <button type="submit" class="addtocart-btn2">Add to Cart</button>
        </div>
    </form>
</div>
</div>
@endforeach

</div>
{{--<div id="slick-nav-2" class="products-slick-nav"></div>--}}
</div>

</div>
</div>
</div>

</div>
</div>
