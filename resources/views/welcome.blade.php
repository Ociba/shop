<!DOCTYPE html>
<html lang="en">
<head>
@include('frontlayouts.title')
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="e-commerce site well design with responsive view." />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="front/image/catalog/cart.html" rel="icon" />
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
@include('frontlayouts.preloader')
<header>
    @include('frontlayouts.topheader')
    @include('frontlayouts.middle-topheader')
</header>
@include('frontlayouts.menu')
<div class="container col-2">
    @include('frontlayouts.slider')
    @livewire('front.discount')
    <div class="row">
        <div id="column-left" class="col-sm-3 hidden-xs column-left">
            <div class="column-block">
                <div class="columnblock-title">Categories</div>
                <div class="category_block">
                    <ul class="box-category treeview-list treeview">
                        <li><a href="#" class="activSub">Desktops</a>
                            <ul>
                                <li><a href="#">PC</a></li>
                                <li><a href="#">MAC</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="activSub">Laptops &amp; Notebooks</a>
                            <ul>
                                <li><a href="#">Macs</a></li>
                                <li><a href="#">Windows</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="activSub">Components</a>
                            <ul>
                                <li><a href="#">Mice and Trackballs</a></li>
                                <li><a href="#" class="activSub" >Monitors</a>
                                    <ul>
                                        <li><a href="#"  >test 1</a></li>
                                        <li><a href="#"  >test 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Windows</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Tablets</a></li>
                        <li><a href="#">Software</a></li>
                        <li><a href="#">Phones & PDAs</a></li>
                        <li><a href="#">Cameras</a></li>
                        <li><a href="#">MP3 Players</a></li>
                    </ul>
                </div>
            </div>
            <div class="blog">
                <div class="blog-heading">
                    <h3>Latest Blogs</h3>
                </div>
                <div class="blog-inner">
                    <ul id="Latest-blog" class="list-unstyled blog-wrapper">
                        <li class="item blog-slider-item">
                            <div class="panel-default">
                                <div class="blog-image"> <a class="blog-imagelink" href="#"><img src="{{asset('front/image/blog/blog_1.jpg')}}" alt="#"></a> </div>
                                <div class="blog-content"> <a class="blog-name" href="#">
                                    <h2>Nunc rutrum scel potent</h2>
                                    </a> <span class="blog-date">06/07/2015</span> </div>
                            </div>
                        </li>
                        <li class="item blog-slider-item">
                            <div class="panel-default">
                                <div class="blog-image"> <a class="blog-imagelink" href="#"><img src="{{asset('front/image/blog/blog_2.jpg')}}" alt="#"></a> </div>
                                <div class="blog-content"> <a class="blog-name" href="#">
                                    <h2>Nunc rutrum scel potent</h2>
                                    </a> <span class="blog-date">06/07/2015</span> </div>
                            </div>
                        </li>
                        <li class="item blog-slider-item">
                            <div class="panel-default">
                                <div class="blog-image"> <a class="blog-imagelink" href="#"><img src="{{asset('front/image/blog/blog_5.jpg')}}" alt="#"></a> </div>
                                <div class="blog-content"> <a class="blog-name" href="#">
                                    <h2>Nunc rutrum scel potent</h2>
                                    </a> <span class="blog-date">06/07/2015</span> </div>
                            </div>
                        </li>
                        <li class="item blog-slider-item">
                            <div class="panel-default">
                                <div class="blog-image"> <a class="blog-imagelink" href="#"><img src="{{asset('front/image/blog/blog_4.jpg')}}" alt="#"></a> </div>
                                <div class="blog-content"> <a class="blog-name" href="#">
                                    <h2>Nunc rutrum scel potent</h2>
                                    </a> <span class="blog-date">06/07/2015</span> </div>
                            </div>
                        </li>
                    </ul>
                    <div class="buttons text-right seeall">
                        <button type="button" onClick="location='blog.html';" class="btn btn-primary">See all Blogs</button>
                    </div>
                </div>
            </div>
            <h3 class="productblock-title">Latest</h3>
            <div class="row latest-grid product-grid">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 product-grid-item">
                    <div class="product-thumb transition">
                        <div class="image product-imageblock"><a href="product.html"><img src="{{asset('front/image/product/1product50x59.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /></a>
                            <div class="button-group">
                                <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                <button type="button" class="addtocart-btn">Add to Carts</button>
                                <a href="/productdetails/view-details" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></a>
                            </div>
                        </div>
                        <div class="caption product-detail">
                            <h4 class="product-name"><a href="#" title="iPod Classic">iPod Classic</a></h4>
                            <p class="price product-price">$123.00<span class="price-tax">Ex Tax: $100.00</span></p>
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        </div>
                        <div class="button-group">
                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                            <button type="button" class="addtocart-btn" >Add to Cart</button>
                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 product-grid-item">
                    <div class="product-thumb transition">
                        <div class="image product-imageblock"><a href="#"><img src="{{asset('front/image/product/2product50x59.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /></a>
                            <div class="button-group">
                                <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                <button type="button" class="addtocart-btn">Add to Cart</button>
                                <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                        <div class="caption product-detail">
                            <h4 class="product-name"><a href="#" title="iPod Classic">iPod Classic</a></h4>
                            <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        </div>
                        <div class="button-group">
                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                            <button type="button" class="addtocart-btn" >Add to Cart</button>
                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 product-grid-item">
                    <div class="product-thumb transition">
                        <div class="image product-imageblock"><a href="#"><img src="{{asset('front/image/product/3product50x59.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /></a>
                            <div class="button-group">
                                <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                <button type="button" class="addtocart-btn">Add to Cart</button>
                                <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                        <div class="caption product-detail">
                            <h4 class="product-name"><a href="#" title="iPod Classic">iPod Classic</a></h4>
                            <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        </div>
                        <div class="button-group">
                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                            <button type="button" class="addtocart-btn">Add to Cart</button>
                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <h3 class="productblock-title">Specials</h3>
            <div class="row special-grid product-grid">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 product-grid-item">
                    <div class="product-thumb transition">
                        <div class="image product-imageblock"> <a href="#"><img src="{{asset('front/image/product/4product50x59.jpg')}}" alt="iPhone" title="iPhone" class="img-responsive" /></a>
                            <div class="button-group">
                                <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                <button type="button" class="addtocart-btn" >Add to Cart</button>
                                <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                        <div class="caption product-detail">
                            <h4 class="product-name"> <a href="product.html" title="iPhone">iPhone</a> </h4>
                            <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                        </div>
                        <div class="button-group">
                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                            <button type="button" class="addtocart-btn" >Add to Cart</button>
                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 product-grid-item">
                    <div class="product-thumb transition">
                        <div class="image product-imageblock"> <a href="#"><img src="{{asset('front/image/product/5product50x59.jpg')}}" alt="iPhone" title="iPhone" class="img-responsive" /></a>
                            <div class="button-group">
                                <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                <button type="button" class="addtocart-btn" >Add to Cart</button>
                                <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                        <div class="caption product-detail">
                            <h4 class="product-name"> <a href="product.html" title="iPhone">iPhone</a> </h4>
                            <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                        </div>
                        <div class="button-group">
                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                            <button type="button" class="addtocart-btn" >Add to Cart</button>
                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 product-grid-item">
                    <div class="product-thumb transition">
                        <div class="image product-imageblock"> <a href="#"><img src="{{asset('front/image/product/6product50x59.jpg')}}" alt="iPhone" title="iPhone" class="img-responsive" /></a>
                            <div class="button-group">
                                <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                <button type="button" class="addtocart-btn" >Add to Cart</button>
                                <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                        <div class="caption product-detail">
                            <h4 class="product-name"> <a href="product.html" title="iPhone">iPhone</a> </h4>
                            <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                        </div>
                        <div class="button-group">
                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                            <button type="button" class="addtocart-btn" >Add to Cart</button>
                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="content" class="col-sm-9">
            <div class="customtab">
                <div id="tabs" class="customtab-wrapper">
                    <ul class='customtab-inner'>
                        <li class='tab'><a href="#tab-latest">Latest</a></li>
                        <li class='tab'><a href="#tab-special">Special</a></li>
                        <li class='tab'><a href="#tab-bestseller">Bestseller</a></li>
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
                <div id="tab-bestseller" class="tab-content">
                    @livewire('front.best-seller')
                </div>
                <div id="subbanner4" class="banner" >
                    <div class="item"> <a href="#"><img src="{{asset('front/image/banners/subbanner4.jpg')}}" alt="Sub Banner4" class="img-responsive" /></a> </div>
                </div>
                <div id="subbanner5" class="banner" >
                    <div class="item"> <a href="#"><img src="{{asset('front/image/banners/subbanner5.jpg')}}" alt="Sub Banner5" class="img-responsive" /></a> </div>
                </div>
                <h3 class="productblock-title">Featured</h3>
                @livewire('front.featured')
                @livewire('front.blog-latest')
            </div>
            @livewire('front.slider2')
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
</body>
</html>
