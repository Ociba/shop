<!DOCTYPE html>

<html lang="en">
<head>
@include('frontlayouts.title')
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="e-commerce site well design with responsive view." />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
@include('frontlayouts.css')
</head>
<body class="category col-2 left-col">
@include('frontlayouts.preloader')
<header>
    @include('frontlayouts.topheader')
    @include('frontlayouts.middle-topheader')
</header>
@include('frontlayouts.menu')
<div class="container">
  @include('frontlayouts.breadcrumb')
  <div class="row">
    <div id="column-left" class="col-sm-3 hidden-xs column-left">
      @livewire('front.side-refine-search')
      @livewire('front.side-specials')
    </div>
    <div id="content" class="col-sm-9">
        @livewire('front.food-details', ['food_id'=>$food_id])
        @livewire('front.carousel')
    </div>
  </div>
</div>
@include('frontlayouts.footer')
@include('frontlayouts.javascript')
</body>
</html>
