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
<header>
    @include('frontlayouts.topheader')
    @include('frontlayouts.middle-topheader')
</header>
@include('frontlayouts.menu')
   @livewire('front.about')

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
