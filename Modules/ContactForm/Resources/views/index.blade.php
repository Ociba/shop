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
<body class="contact col-2 left-col">
<header>
    @include('frontlayouts.topheader')
    @include('frontlayouts.middle-topheader')
</header>
@include('frontlayouts.menu')
<div class="container">
  <ul class="breadcrumb">
    <li><a href="index.html"><i class="fa fa-home"></i></a></li>
    <li><a href="contact.html">Contact Us</a></li>
  </ul>
  <div class="row">
    <div id="column-left" class="col-sm-3 hidden-xs column-left">
      <div class="column-block">
        <div class="column-block">
        @livewire('front.side-categories')
        @livewire('front.side-specials')
        </div>
        
      </div>
    </div>
    <div class="col-sm-9" id="content">
      <h1>Contact Us</h1>
      <h3>Our Location</h3>
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="row">
            <div class="col-sm-4 left">
              <address>
              <strong> Name: </strong>Joome Shopping Center <br>
              <br>
              <strong>Address:</strong>
              <div class="address"> Opposite Soroti University,Main Gate, 6km Moroto Road</div>
              <br>
              <strong>Location:</strong> Soroti Municipality <br><br>
              <strong>Country:</strong> Uganda <br>
              <br>
              <strong>Phone: </strong>0775401793 | 0753 926367 <br><br>
              <strong>Email: </strong>joomeproperty2022@gmail.com
              </address>
            </div>
            <div class="col-sm-8 rigt">
             @livewire('front.contact-form')
            </div>
            @livewire('front.carousel')
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