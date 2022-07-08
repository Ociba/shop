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
<body class="cart col-2">
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
        <div class="column-block">
          @livewire('front.side-categories')
        </div>
      </div>
    </div>
    <div class="col-sm-9" id="content">
       
      <h2>What would you like to do next?</h2>
      <p class="text-danger">Choose if you want to be part of as a rider for delivering Products or to partner with us.</p>
      <div id="accordion" class="panel-group">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" class="accordion-toggle" href="#collapse-coupon">Become Rider <i class="fa fa-caret-down"></i></a></h4>
          </div>
          <div class="panel-collapse collapse" id="collapse-coupon">
            <div class="panel-body">
               @livewire('front.become-rider')
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" class="accordion-toggle" href="#collapse-shipping">Become Partner <i class="fa fa-caret-down"></i></a></h4>
          </div>
          <div class="panel-collapse collapse" id="collapse-shipping">
            <div class="panel-body">
              <p>Become A Partner.</p>
                @livewire('front.become-partner')
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('frontlayouts.footer')

</body>
@include('frontlayouts.javascript')
</html>