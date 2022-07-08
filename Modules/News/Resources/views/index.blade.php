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
<header>
    @include('frontlayouts.topheader')
    @include('frontlayouts.middle-topheader')
</header>
@include('frontlayouts.menu')
<div class="container">
  @include('frontlayouts.breadcrumb')
  <div class="row">
    
    @livewire('front.news')
    </div>
    <div id="column-right" class="col-sm-6 hidden-xs column-left">
      <div class="column-block">
        @livewire('front.side-categories')
      </div>
      <div class="blog-categories-block category_block">
        <div class="banner" style="margin-bottom:20px;" >
          <div class="item" style="margin-bottom:20px;" > <a href="#"><img src="{{ asset('front/image/banners/LeftBanner.jpg')}}" alt="Left Banner" class="img-responsive" /></a> </div>
        </div>
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