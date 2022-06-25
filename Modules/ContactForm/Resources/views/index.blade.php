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
@include('frontlayouts.preloader')
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
              <strong> Store Name: </strong>Focus privated limited <br>
              <br>
              <strong>Address:</strong>
              <div class="address"> Warehouse & Offices 12345 Street name,California</div>
              <br>
              <strong>Country:</strong> USA <br>
              <br>
              <strong>Phone: </strong>+ 0987-654-321
              </address>
            </div>
            <div class="col-sm-8 rigt">
             @livewire('front.contact-form')
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