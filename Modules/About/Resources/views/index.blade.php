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

<script src="{{ asset('front/javascript/jquery-2.1.1.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('front/javascript/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('front/javascript/template_js/jstree.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('front/javascript/template_js/template.js')}}"></script>
<script src="{{ asset('front/javascript/common.js')}}" type="text/javascript"></script>
<script src="{{ asset('front/javascript/global.js')}}" type="text/javascript"></script>
<script src="{{ asset('front/javascript/owl-carousel/owl.carousel.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('front/javascript/DioProgress.js')}}"></script>
</head>
<body>
@include('frontlayouts.preloader')
<header>
    @include('frontlayouts.topheader')
    @include('frontlayouts.middle-topheader')
</header>
@include('frontlayouts.menu')
<div class="container">
   @include('frontlayouts.breadcrumb')
  <div class="row">
    
    <div class="wwd">
      <div class="col-sm-6"><img class="img-responsive" src="{{ asset('front/image/blog/blog_4.jpg')}}" alt="#"></div>
      <div class="col-sm-6">
        <div class="column-inner ">
          <div class="wrapper">
            <h4 class="tf">We made a unique &amp; Beautyfull theme </h4>
            <div class="desc">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="buttton">
              <button class="btn">READ MORE</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="services">
          <div class="col-sm-4">
            <h4 class="tf">What we do</h4>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p><a class="btn" href="#">Read more</a></p>
          </div>
          <div class="col-sm-4">
            <h4 class="tf">What we do</h4>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p><a class="btn" href="#">Read more</a></p>
          </div>
          <div class="col-sm-4">
            <h4 class="tf">What we do</h4>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p><a class="btn" href="#">Read more</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="features">
      <div class="col-md-3">
        <div class="icon clearfix  "> <a href="#"><i class="circle fa fa-delicious"></i>
          <div class="content">
            <h4 class="tf">Clean design</h4>
            <p>Elegant layouts that help you organize your content in the best way</p>
          </div>
          </a></div>
      </div>
      <div class="col-md-3">
        <div class="icon clearfix  "><a href="#"><i class="circle fa fa-html5"></i>
          <div class="content">
            <h4 class="tf">Html5 &amp; css3</h4>
            <p>Built with modern technologies like HTML5 and CSS3, SEO optimised</p>
          </div>
          </a></div>
      </div>
      <div class="col-md-3">
        <div class="icon clearfix  "><a href="#"><i class="circle fa fa-desktop"></i>
          <div class="content">
            <h4 class="tf">Responsive layout</h4>
            <p>Compatible with various desktop, tablet, and mobile devices</p>
          </div>
          </a></div>
      </div>
      <div class="col-md-3">
        <div class="icon clearfix  "><a href="#"><i class="circle fa fa-pencil-square-o"></i>
          <div class="content">
            <h4 class="tf">Customization</h4>
            <p>Clear code and documentation, build with Bootstrap 3</p>
          </div>
          </a></div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="Experiences">
      <div class="col-md-6">
        <h4 class="tf">Experiences</h4>
        <div class="exp-detail">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>
    <div class="skill">
      <div class="col-md-6">
        <h4 class="tf">Skills</h4>
        <ul>
          <li>
            <h3>78% Graphic design</h3>
            <div id="progress1"> </div>
          </li>
          <li>
            <h3>92% web design</h3>
            <div id="progress2"> </div>
          </li>
          <li>
            <h3>76% Marketing</h3>
            <div id="progress3"> </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 team">
      <h4 class="tf">Our Team </h4>
    </div>
  </div>
  <div class="row team">
    <div class="col-md-3 col-sm-3 team1 ">
      <div class="photo">
        <div class="imageblock"> <img alt="#" src="{{ asset('front/image/team1.jpg')}}" class="img-responsive"> </div>
        <div class="name"> <a href="#">IBRAHIM ISTALIK</a> </div>
        <h3>Founder and CEO</h3>
        <p>Page editors now use Lorem Ipsum as their default modelum sites</p>
      </div>
    </div>
    <div class="col-md-3 col-sm-3 team1 ">
      <div class="photo">
        <div class="imageblock"> <img alt="#" src="{{ asset('front/image/team2.jpg')}}" class="img-responsive"> </div>
        <div class="name"> <a href="#">IBRAHIM ISTALIK</a> </div>
        <h3>Founder and CEO</h3>
        <p>Page editors now use Lorem Ipsum as their default modelum sites</p>
      </div>
    </div>
    <div class="col-md-3 col-sm-3 team1 ">
      <div class="photo">
        <div class="imageblock"> <img alt="#" src="{{ asset('front/image/team3.jpg')}}" class="img-responsive"> </div>
        <div class="name"> <a href="#">IBRAHIM ISTALIK</a> </div>
        <h3>Founder and CEO</h3>
        <p>Page editors now use Lorem Ipsum as their default modelum sites</p>
      </div>
    </div>
    <div class="col-md-3 col-sm-3 team1 ">
      <div class="photo">
        <div class="imageblock"> <img alt="#" src="{{ asset('front/image/team4.jpg')}}" class="img-responsive"> </div>
        <div class="name"> <a href="#">IBRAHIM ISTALIK</a> </div>
        <h3>Founder and CEO</h3>
        <p>Page editors now use Lorem Ipsum as their default modelum sites</p>
      </div>
    </div>
  </div>
</div>

<!-- Footer block Start  -->
@include('frontlayouts.footer')
<!-- Footer block End  -->


<script type="text/javascript">
		$( "#progress1" ).appendSimpleProgressBar();
		$( "#progress1" ).slow( { width:"78" } );
		
		$( "#progress2" ).appendSimpleProgressBar();
		$( "#progress2" ).slow( { width:"92" } );
		
		$( "#progress3" ).appendSimpleProgressBar();
		$( "#progress3" ).slow( { width:"76" } );
		
		$( "#progress4" ).appendSimpleProgressBar();
		$( "#progress4" ).slow( { width:"98" } );
		

</script> 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 

<script src="js/jQuery.html"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.html"></script>
</body>
</html>
