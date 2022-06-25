<!DOCTYPE html>

<html lang="en">
<head>
@include('frontlayouts.title')
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="e-commerce site well design with responsive view." />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="image/catalog/cart.html" rel="icon" />
@include('frontlayouts.css')
</head>
<body class="single-blog col-2">
@include('frontlayouts.preloader')
<header>
    @include('frontlayouts.topheader')
    @include('frontlayouts.middle-topheader')
</header>
@include('frontlayouts.menu')
<div class="container">
  @include('frontlayouts.breadcrumb')
  <div class="row">
    
    @livewire('front.blog')
    </div>
    <div id="column-right" class="col-sm-3 hidden-xs column-left">
      <div class="column-block">
        <div class="columnblock-title">Categories</div>
        <div class="blog-categories-block category_block">
          <div class="list-group"> <a class="list-group-item" href="#">Audio</a> <a class="list-group-item" href="#">Gallery</a> <a class="list-group-item" href="#">Link</a> <a class="list-group-item" href="#">Quote</a> <a class="list-group-item" href="#">Uncategorized</a> <a class="list-group-item last" href="#">Video</a> </div>
        </div>
      </div>
      <div class="productblock-title">Recent Posts</div>
      <div class="blog-categories-block category_block">
        <div class="list-group"> <a class="list-group-item" href="#">Gallery Post Format</a> <a class="list-group-item" href="#">Recent Posts</a> <a class="list-group-item" href="index-2.html#">Gallery Post Format</a> <a class="list-group-item" href="#">Standard Post Format</a> <a class="list-group-item last" href="#">Image Post Format</a> </div>
      </div>
      
      <!-- end blog-sidebar --> 
      
    </div>
    <!-- end blog-sidebar --> 
    
  </div>
</div>
<!-- end container -->

@include('frontlayouts.footer')

<!-- end info-footer -->
@include('frontlayouts.javascript')
</body>
</html>