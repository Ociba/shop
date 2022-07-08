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
<body class="checkout col-2 left-col">
<header>
    @include('frontlayouts.topheader')
    @include('frontlayouts.middle-topheader')
    @include('frontlayouts.menu')
</header>
@include('frontlayouts.css')
<div class="container">
  @include('frontlayouts.breadcrumb')
  <div class="row">
    <div id="column-left" class="col-sm-3 hidden-xs column-left">
      <div class="column-block">
        <div class="column-block">
          @livewire('front.side-categories')
        </div>
        @livewire('front.side-specials')
      </div>
    </div>
    @livewire('front.checkout')
  </div>
</div>
@include('frontlayouts.footer')
</body>

@include('frontlayouts.javascript')
</html>