<div>
    {{-- The Master doesn't talk, he acts. --}}
    <link type="text/css" rel="stylesheet" href="{{ asset('new/css/bootstrap.min.css%2bslick.css%2bslick-theme.css%2bnouislider.min.css%2bfont-awesome.min.css%2bstyle.css.pagespeed.cc.tL4EfFTy2N.css')}}" />
    <div class="row">
        <div class="col-md-4 col-xs-6">
            <div class="section-title">
                <h4 class="title">Top selling</h4>
                <div class="section-nav">
                    <div id="slick-nav-3" class="products-slick-nav"></div>
                </div>
            </div>
            <div class="products-widget-slick" data-nav="#slick-nav-3">
                <div>
                @foreach($classified_items as $classified)
                    <div class="product-widget">
                        <div class="product-img">
                            <img src="{{ asset('storage/shop_items_photos/'.$classified->photo)}}" alt="">
                        </div>
                        <div class="product-body">
                            <p class="product-category">{{$classified->item}}</p>
                            <h3 class="product-name"><a href="#">{{$classified->item_name}}</a></h3>
                            <h4 class="product-price">Ugx: {{ number_format($classified->price)}}  <span><a href="shop/view-details/{{$classified->id}}"  class="product-cart">Buy Now</a></span></h4>
                        </div>
                    </div>
                @endforeach
                </div>
                <div>
                @foreach($get_classified_computers as $classified_computers)
                    <div class="product-widget">
                        <div class="product-img">
                            <img src="{{ asset('storage/shop_items_photos/'.$classified_computers->photo)}}" alt="">
                        </div>
                        <div class="product-body">
                            <p class="product-category">{{$classified_computers->item}}</p>
                            <h3 class="product-name"><a href="#">{{$classified_computers->item_name}}</a></h3>
                            <h4 class="product-price">Ugx: {{ number_format($classified_computers->price)}}  <span><a href="shop/view-details/{{$classified_computers->id}}"  class="product-cart">Buy Now</a></span></h4>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xs-6">
            <div class="section-title">
                <h4 class="title">Top selling</h4>
                <div class="section-nav">
                    <div id="slick-nav-4" class="products-slick-nav"></div>
                </div>
            </div>
            <div class="products-widget-slick" data-nav="#slick-nav-4">
                <div>
                @foreach($classified_clothes_bags_saloon as $clothesbagsaloonitems)
                    <div class="product-widget">
                        <div class="product-img">
                            <img src="{{ asset('storage/shop_items_photos/'.$clothesbagsaloonitems->photo)}}" alt="">
                        </div>
                        <div class="product-body">
                            <p class="product-category">{{$clothesbagsaloonitems->item}}</p>
                            <h3 class="product-name"><a href="#">{{$clothesbagsaloonitems->item_name}}</a></h3>
                            <h4 class="product-price">Ugx: {{ number_format($clothesbagsaloonitems->price)}}  <span><a href="shop/view-details/{{$clothesbagsaloonitems->id}}"  class="product-cart">Buy Now</a></span></h4>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div>
                @foreach($get_classified_bags as $bags)
                    <div class="product-widget">
                        <div class="product-img">
                            <img src="{{ asset('storage/shop_items_photos/'.$bags->photo)}}" alt="">
                        </div>
                        <div class="product-body">
                            <p class="product-category">{{$bags->item}}</p>
                            <h3 class="product-name"><a href="#">{{$bags->item_name}}</a></h3>
                            <h4 class="product-price">Ugx: {{ number_format($bags->price)}}  <span><a href="shop/view-details/{{$bags->id}}"  class="product-cart">Buy Now</a></span></h4>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="clearfix visible-sm visible-xs"></div>
        <div class="col-md-4 col-xs-6">
            <div class="section-title">
                <h4 class="title">Top Selling</h4>
                <div class="section-nav">
                    <div id="slick-nav-5" class="products-slick-nav"></div>
                </div>
            </div>
            <div class="products-widget-slick" data-nav="#slick-nav-5">
                <div>
                  @foreach($classified_food as $fooditems)
                    <div class="product-widget">
                        <div class="product-img">
                             <img src="{{ asset('storage/shop_items_photos/'.$fooditems->photo)}}" alt="">
                        </div>
                        <div class="product-body">
                            <p class="product-category">{{$fooditems->item}}</p>
                            <h3 class="product-name"><a href="#">{{$fooditems->item_name}}</a></h3>
                               <h4 class="product-price">Ugx: {{ number_format($fooditems->price)}}  <span><a href="shop/view-details/{{$fooditems->id}}"  class="product-cart">Buy Now</a></span></h4>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div>
                   @foreach($get_more_classified_food as $morefooditems)
                    <div class="product-widget">
                        <div class="product-img">
                           <img src="{{ asset('storage/shop_items_photos/'.$morefooditems->photo)}}" alt="">
                        </div>
                        <div class="product-body">
                            <p class="product-category">{{$morefooditems->item}}</p>
                            <h3 class="product-name"><a href="#">{{$morefooditems->item_name}}</a></h3>
                               <h4 class="product-price">Ugx: {{ number_format($morefooditems->price)}}  <span><a href="shop/view-details/{{$morefooditems->id}}"  class="product-cart">Buy Now</a></span></h4>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('new/js/jquery.min.js')}}"></script>
    <script src="{{ asset('new/js/bootstrap.min.js%2bslick.min.js.pagespeed.jc.3oMYTFFUTv.js')}}"></script><script>eval(mod_pagespeed_nePFsnc3nV);</script>
    <script>eval(mod_pagespeed_wHSoBauwut);</script>
    <script src="{{ asset('new/js/nouislider.min.js%2bjquery.zoom.min.js%2bmain.js.pagespeed.jc.UI7AC5_B6N.js')}}"></script><script>eval(mod_pagespeed_WlmYdmNQnI);</script>
    <script>eval(mod_pagespeed_HxeDIjvTXK);</script>
    <script>eval(mod_pagespeed_m624O2n4N4);</script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        
        gtag('config', 'UA-23581568-13');
    </script>
</div>