<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="row">
    <div class="col-sm-6">
            @foreach($get_single_produce_info as $produce)
            <ul class="thumbnails">
                <li><a class="thumbnail fancybox" target="_blank" href="{{ asset('storage/produce_photos/'.$produce->image)}}" style="width:100% height:100%" title="{{$produce->produce_name}}"><img src="{{ asset('storage/produce_photos/'.$produce->image)}}" style="height:40%; width:100%" title="{{$produce->produce_name}}" alt="{{$produce->produce_name}}" /></a></li>
               
            </ul>
            @endforeach
        </div>
        <div class="col-sm-6">
            @foreach($get_single_produce_info as $details)
            <h1 class="productpage-title">{{$details->produce_name}}</h1>
            <ul class="list-unstyled productinfo-details-top">
                <li>
                    <h2 class="productpage-price">Ugx: {{ number_format($details->price)}}</h2>
                </li>
                {{--<li><span class="productinfo-tax">Ex Tax: $100.00</span></li>--}}
            </ul>
            <hr>
            <ul class="list-unstyled product_info">
                <li>
                    <label>Type:</label>
                    <span> <a href="#">{{$details->produce_type}}</a></span></li>
                <li>
                    <label>Quantity:</label>
                    <span> {{$details->quantity}}</span></li>
                    <li>
                   <label>Location:</label>
                   <span> {{$details->town}}</span>
                </li>
                <li>
                   <label>Contact:</label>
                   <span> {{$details->phone_number}}</span>
                </li>
            </ul>
            <hr>
            <p class="product-desc">{{$details->description}} </p>
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
                        @foreach($get_single_produce_info as $details)
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
