<div>
    {{-- Do your work, then step back. --}}
    <div class="row">
        <div class="col-sm-6">
            @foreach($accomoda as $accomodation)
            <ul class="thumbnails">
                <li><a class="thumbnail fancybox" target="_blank"  href="{{ asset('storage/accomodation_photos/'.$accomodation->photo)}}" title="{{$accomodation->category}}"><img src="{{ asset('storage/accomodation_photos/'.$accomodation->photo)}}" style="height:100%; width:100%" title="{{$accomodation->category}}" alt="{{$accomodation->category}}" /></a></li>
                <div id="product-thumbnail" class="owl-carousel">
                    @php
                    $accomodation_id=$this->acomodations_id;
                    $get_all_accomodation =\DB::table('acomodations')->join('categories','categories.id','acomodations.category_id')->where('acomodations.category_id',$accomodation_id)->get('acomodations.*');
                    @endphp
                    @foreach($get_all_accomodation as $cat)
                    <div class="item">
                        <li class="image-additional"><a class="thumbnail fancybox" rel="gallery1"  href="{{ asset('storage/accomodation_photos/'.$cat->photo)}}" title="iPod Classic"> <img src="{{ asset('storage/accomodation_photos/'.$cat->photo)}}" title="iPod Classic" alt="iPod Classic" /></a></li>
                    </div>
                    @endforeach
                </div>
            </ul>
            @endforeach
        </div>
        <div class="col-sm-6">
            @foreach($accomoda as $details)
            <h1 class="productpage-title">{{$details->category}}</h1>
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
            <hr>
            <ul class="list-unstyled product_info">
                <li>
                    <label>Size:</label>
                    <span> <a href="#">{{$details->property_size}}</a></span></li>
                <li>
                    <label>Bedrooms:</label>
                    <span> {{$details->bedroom}}</span></li>
                <li>
                <label>Bedrooms:</label>
                <span> {{$details->bedroom}}</span></li>
                <li>
                <label>Batherooms:</label>
                <span> {{$details->bathroom}}</span></li>
                <li>
                <label>Garage:</label>
                <span> {{$details->garage}}</span></li>
                <li>
                <label>Status:</label>
                <span style="text-transform:capitalize;"> {{$details->property_status}}</span></li>
                <li>
                    <label>Location:</label>
                    <span> {{$details->location}}</span></li>
            </ul>
            <hr>
            <p class="product-desc">{{$details->description}} </p>
            <div id="product">
                <div class="form-group">
                    <div class="btn-group">
                        <button type="button" id="button-cart" data-loading-text="Loading..." class="btn btn-primary btn-lg btn-block addtocart clicker" tabindex="1" title="{{$details->telephone}}"><i class="fa fa-eye"> View Contact</i></button>
                            <span class="hiddendiv" style="color:#ffffff;">{{$details->telephone}}</span>
                    </div>
                </div>
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
                        @foreach($accomoda as $details)
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
    <h3 class="productblock-title">Related Products</h3>
     @livewire('front.related-accomodation')
</div>
