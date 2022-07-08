<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
@include('frontlayouts.title')
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="e-commerce site well design with responsive view." />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
@include('frontlayouts.css')
</head>
<body class="product col-2 left-col">
<header>
   @include('frontlayouts.topheader')
   @include('frontlayouts.middle-topheader')
</header>
@include('frontlayouts.menu')
<div class="container">
    @include('frontlayouts.breadcrumb')
    <div class="row">
        <div id="column-left" class="col-sm-3 hidden-xs column-left">
            <div class="column-block">
            @livewire('front.side-refine-search')
            @livewire('front.side-specials')
            </div>
        </div>
        <div id="content" class="col-sm-9">
            @livewire('front.shop-items-details', ['shop_id'=>$shop_id])
             @livewire('front.carousel')
        </div>
    </div>
</div>
@include('frontlayouts.footer')
</body>

@include('frontlayouts.javascript')
</html>
