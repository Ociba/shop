<div>
    {{-- Do your work, then step back. --}}
    <div class="row">
        <div class="col-sm-6">
            @foreach($single_shop_item as $shop)
            <ul class="thumbnails">
                <li><a class="thumbnail fancybox" href="{{ asset('storage/shop_items_photos/'.$shop->photo)}}" title="iPod Classic"><img src="{{ asset('storage/shop_items_photos/'.$shop->photo)}}" style="height:40%; width:40%" title="iPod Classic" alt="iPod Classic" /></a></li>
               
            </ul>
            @endforeach
        </div>
        <div class="col-sm-6">
            @foreach($single_shop_item as $details)
            <h1 class="productpage-title">{{$details->item_name}}</h1> 
            {{--<div class="rating product"> 
                <span class="fa fa-stack">
                    <i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i>
                </span> 
                <span class="fa fa-stack">
                    <i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i>
                </span> 
                <span class="fa fa-stack">
                    <i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i>
                </span> <span class="fa fa-stack">
                    <i class="fa fa-star-o fa-stack-1x"></i>
                </span> 
                <span class="fa fa-stack">
                    <i class="fa fa-star-o fa-stack-1x"></i>
                </span> 
                <span class="review-count"> 
                    <a href="#" onClick="$('a[href=\'#tab-review\']').trigger('click'); return false;">1 reviews</a> / 
                    <a href="#" onClick="$('a[href=\'#tab-review\']').trigger('click'); return false;">Write a review</a>
                </span>
                <hr>
                <!-- AddThis Button BEGIN -->
                <div class="addthis_toolbox addthis_default_style"><a class="addthis_button_facebook_like" ></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a> <a class="addthis_counter addthis_pill_style"></a></div>
                <script type="text/javascript" src="../s7.addthis.com/js/300/addthis_widget.html#pubid=ra-515eeaf54693130e"></script> 
                <!-- AddThis Button END --> 
            </div>--}}
            <ul class="list-unstyled productinfo-details-top">
                <li>
                    <h2 class="productpage-price">Ugx: {{ number_format($details->price)}}</h2>
                </li>
                {{--<li><span class="productinfo-tax">Ex Tax: $100.00</span></li>--}}
            </ul>
            <p class="product-desc">{{$details->description}} </p>
            <div id="product">
                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                     <input type="hidden" value="{{ $details->id }}" name="id">
                      <input type="hidden" value="{{ $details->item_name }}" name="name">
                      <input type="hidden" value="{{ $details->price }}" name="price">
                      <input type="hidden" value="{{ $details->photo }}"  name="image">
                    <div class="form-group">
                        <label class="control-label qty-label" for="input-quantity">Qty</label>
                        <input type="text" name="quantity" value="1"  size="2" id="input-quantity" class="form-control productpage-qty" />
                        <input type="hidden" name="product_id" value="48" />
                        <div class="btn-group">
                            <button type="button" data-toggle="tooltip" class="btn btn-default wishlist" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                            <button type="submit" id="button-cart" data-loading-text="Loading..." class="btn btn-primary btn-lg btn-block addtocart" title=""><i class="fa fa-shopping-cart"> Add To Cart</i></button>
                            <button type="button" data-toggle="tooltip" class="btn btn-default compare" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @endforeach
    </div>
    <div class="productinfo-tab">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab-description" data-toggle="tab">Description</a></li>
            <li><a href="#tab-review" data-toggle="tab">Reviews (1)</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab-description">
                <div class="cpt_product_description ">
                    <div>
                        <p> <strong>Information About This Property</strong></p>
                        @foreach($single_shop_item as $details)
                        <p>{{$details->description}}</p>
                        @endforeach
                    </div>
                </div>
                <!-- cpt_container_end --></div>
            <div class="tab-pane" id="tab-review">
                <form class="form-horizontal">
                    <div id="review"></div>
                    <h2>Write a review</h2>
                    <div class="form-group required">
                        <div class="col-sm-12">
                            <label class="control-label" for="input-name">Your Name</label>
                            <input type="text" name="name" value="" id="input-name" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group required">
                        <div class="col-sm-12">
                            <label class="control-label" for="input-review">Your Review</label>
                            <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                            <div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!</div>
                        </div>
                    </div>
                    <div class="form-group required">
                        <div class="col-sm-12">
                            <label class="control-label">Rating</label>
                            &nbsp;&nbsp;&nbsp; Bad&nbsp;
                            <input type="radio" name="rating" value="1" />
                            &nbsp;
                            <input type="radio" name="rating" value="2" />
                            &nbsp;
                            <input type="radio" name="rating" value="3" />
                            &nbsp;
                            <input type="radio" name="rating" value="4" />
                            &nbsp;
                            <input type="radio" name="rating" value="5" />
                            &nbsp;Good</div>
                    </div>
                    <div class="buttons clearfix">
                        <div class="pull-right">
                            <button type="button" id="button-review" data-loading-text="Loading..." class="btn btn-primary">Continue</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
