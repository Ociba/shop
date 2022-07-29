<!DOCTYPE html>
<html lang="en">
    <head>
        @include('frontlayouts.title')
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="e-commerce site well design with responsive view." />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="{{asset('front/image/logo1.jpg')}}" rel="icon" />
        <link href="{{ asset('front/css/bootstrap.min.css')}}" rel="stylesheet" media="screen" />
        <link href="{{ asset('front/javascript/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
        <link href="{{ asset('front/css/stylesheet.css')}}" rel="stylesheet">
        <link href="{{ asset('front/css/responsive.css')}}" rel="stylesheet">
        <link href="{{ asset('front/javascript/owl-carousel/owl.carousel.css')}}" type="text/css" rel="stylesheet" media="screen" />
        <link href="{{ asset('front/javascript/owl-carousel/owl.transitions.css')}}" type="text/css" rel="stylesheet" media="screen" />
    </head>
    <body>
        {{--@include('frontlayouts.preloader')--}}
        <header>
            @include('frontlayouts.topheader')
            @include('frontlayouts.middle-topheader')
        </header>
        @include('frontlayouts.menu')
        <div class="container col-2">
            <h3 class="productblock-title">Products With Discount</h3>
            @livewire('front.with-discount') 
            @include('frontlayouts.slider')
            @livewire('front.discount')
            <div class="row">
                <div id="column-left" class="col-sm-3  hidden-xs column-left">
                    <h3 class="productblock-title">Latest  Top Shopping </h3>
                    <div class="row latest-grid product-grid">
                        @php
                        $get_shop_items=\DB::table('shops')->join('shop_items_categories','shop_items_categories.id','shops.item_category_id')
                        ->join('users','users.id','shops.created_by')
                        ->orderBy('shops.created_at','DESC')->where('shops.item_category_id','!=',11)
                        ->where('shops.item_category_id','!=',12)->where('shops.classification', 'unclassified')->limit(3)
                        ->get(['shops.*','shop_items_categories.item']);
                        @endphp
                        @foreach($get_shop_items as $shop)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 product-grid-item text-center">
                            <div class="product-thumb transition">
                                <div class="image product-imageblock"><a href="/shop/view-details/{{$shop->id}}"><img src="{{ asset('storage/shop_items_photos/'.$shop->photo)}}" style="width:65px;height:40px" alt="Joome Shop" title="Joome Shop" class="img-responsive" /></a>
                                </div>
                                <div class="caption product-detail">
                                    <h4 class="product-name"><a href="/shop/view-details/{{$shop->id}}" title="View Details">{{$shop->item_name}}</a></h4>
                                    <p class="price product-price">Ugx: {{ number_format($shop->price)}}<span class="price-tax">Ex Tax: $100.00</span></p>
                                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{ $shop->id }}" name="id">
                                        <input type="hidden" value="{{ $shop->item_name }}" name="name">
                                        <input type="hidden" value="{{ $shop->price }}" name="price">
                                        <input type="hidden" value="{{ $shop->photo }}"  name="image">
                                        <input type="hidden" value="1" name="quantity">
                                        <div class="col-xs-12 mb-5">
                                            <button type="submit" class="addtocart-btn" style="border:none;">Add to Cart</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <h3 class="productblock-title">Specials</h3>
                    <div class="row special-grid product-grid">
                        @php
                        $get_food_items=\DB::table('shops')->orderBy('shops.created_at','DESC')->where('shops.item_category_id','=',11)->where('shops.classification', 'unclassified')->limit(3)->get();
                        @endphp
                        @foreach($get_food_items as $food)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 product-grid-item">
                            <div class="product-thumb transition">
                                <div class="image product-imageblock"> <a href="/food/view-food-details/{{$food->id}}"><img src="{{ asset('storage/shop_items_photos/'.$food->photo)}}" style="width:65px;height:40px" alt="Joome Food" title="Joome Food" class="img-responsive" /></a>
                                </div>
                                <div class="caption product-detail">
                                    <h4 class="product-name"> <a href="/food/view-food-details/{{$food->id}}" title="Joome Food">{{$food->item_name}}</a> </h4>
                                    <p class="price product-price"> <span class="price-new">Ugx:{{ number_format($food->price)}}</span> <span class="price-old">{{--$272.00--}}</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                                </div>
                                <div class="button-group">
                                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{ $food->id }}" name="id">
                                        <input type="hidden" value="{{ $food->item_name }}" name="name">
                                        <input type="hidden" value="{{ $food->price }}" name="price">
                                        <input type="hidden" value="{{ $food->photo }}"  name="image">
                                        <input type="hidden" value="1" name="quantity">
                                        <div class="col-xs-12 mb-5">
                                            <button type="submit" class="addtocart-btn" style="border:none; hover:green;">Add to Cart</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="column-block">
                        <div class="columnblock-title">Categories</div>
                        <div class="category_block">
                            <ul class="box-category treeview-list treeview">
                                <li>
                                    <a href="/accomodation/all-accomodation" class="activSub">Accomodation</a>
                                    {{--
                                    <ul>
                                        <li><a href="#">PC</a></li>
                                        <li><a href="#">MAC</a></li>
                                    </ul>
                                    --}}
                                </li>
                                <li><a href="/shop/all-shop-items" class="activSub">Shop</a>
                                </li>
                                <li><a href="/agricultureproduce/all-produce" class="activSub">Agriculture Produce</a>
                                </li>
                                <li><a href="/agricultureequipments/all-agriculture-equipments">Agriculture Equipments</a></li>
                                <li><a href="/food/all-food">Food</a></li>
                                <li><a href="/about/about-joome">About Us</a></li>
                                <li><a href="/blog/our-blog">Blog</a></li>
                                <li><a href="/news/our-news">News</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog">
                        <div class="blog-heading">
                            <h3>Latest Agric Produce</h3>
                        </div>
                        <div class="blog-inner">
                            <ul id="Latest-blog" class="list-unstyled blog-wrapper">
                                @php
                                $get_produce=\DB::table('produces')->join('produce_categories','produce_categories.id','produces.produce_category_id')
                                ->join('users','users.id','produces.created_by')
                                ->where('produces.status','available')
                                ->orderBy('produces.created_at','Desc')->limit('5')
                                ->get(['produces.*','users.name','produce_categories.produce_category']);
                                @endphp
                                @foreach($get_produce as $produce)
                                <li class="item blog-slider-item">
                                    <div class="panel-default">
                                        <div class="blog-image"> <a class="blog-imagelink" href="/agricultureproduce/view-produce-details/{{$produce->id}}"><img src="{{asset('storage/produce_photos/'.$produce->image)}}" style="width:65px;height:40px" alt="#"></a> </div>
                                        <div class="blog-content">
                                            <a class="blog-name" href="/agricultureproduce/view-produce-details/{{$produce->id}}">
                                                <h2>{{$produce->produce_name}}</h2>
                                            </a>
                                            <span class="blog-date">Ugx: {{ number_format($produce->price)}}</span> 
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="item" style="margin-bottom:20px;" > <a href="#"><img src="{{ asset('front/image/banners/LeftBanner.jpg')}}" alt="Left Banner" class="img-responsive" /></a> </div>
                </div>
                <div id="content" class="col-sm-9">
                    <div class="customtab">
                        <div id="tabs" class="customtab-wrapper">
                            <ul class='customtab-inner'>
                                <li class='tab'><a href="#tab-latest">Accomodation</a></li>
                                <li class='tab'><a href="#tab-special">Agriculture Produce</a></li>
                                {{--<li class='tab'><a href="#tab-bestseller">Agriculture Equipments</a></li>--}}
                            </ul>
                        </div>
                            <div id="tab-latest" class="tab-content">
                                @livewire('front.latest')
                            </div>
                            <!-- tab-latest-->
                            <div id="tab-special" class="tab-content">
                                @livewire('front.special')
                            </div>
                            <!-- tab-special-->
                            {{--<div id="tab-bestseller" class="tab-content">
                                @livewire('front.best-seller')
                            </div>--}}
                     </div>
                        <h3 class="productblock-title">Your Shop</h3>
                        @livewire('front.featured')
                        @livewire('front.blog-latest')
                    <div class="row">
                        @livewire('front.slider2')
                    </div>
                    @livewire('front.classified-items')
                </div>
            </div>
        </div>
        @include('frontlayouts.footer')
        <script src="{{ asset('front/javascript/jquery-2.1.1.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('front/javascript/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script type="text/javascript" src="{{ asset('front/javascript/template_js/jstree.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('front/javascript/template_js/template.js')}}"></script>
        <script src="{{ asset('front/javascript/common.js')}}" type="text/javascript"></script>
        <script src="{{ asset('front/javascript/global.js')}}" type="text/javascript"></script>
        <script src="{{ asset('front/javascript/owl-carousel/owl.carousel.min.js')}}" type="text/javascript"></script>
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/624d754ec72df874911d523c/1fvv94fh7';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
        </script>
        <!--End of Tawk.to Script-->
    </body>
</html>