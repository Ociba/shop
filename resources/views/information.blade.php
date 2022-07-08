<!DOCTYPE html>
<html lang="en">
<head>
@include('frontlayouts.title')
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="e-commerce site well design with responsive view." />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="front/image/catalog/cart.html" rel="icon" />
<link href="{{ asset('front/css/bootstrap.min.css')}}" rel="stylesheet" media="screen" />
<link href="{{ asset('front/javascript/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
<link href="{{ asset('front/css/stylesheet.css')}}" rel="stylesheet">
<link href="{{ asset('front/css/responsive.css')}}" rel="stylesheet">
<link href="{{ asset('front/javascript/owl-carousel/owl.carousel.css')}}" type="text/css" rel="stylesheet" media="screen" />
<link href="{{ asset('front/javascript/owl-carousel/owl.transitions.css')}}" type="text/css" rel="stylesheet" media="screen" />
</head>
<body>
<header>
    @include('frontlayouts.topheader')
    @include('frontlayouts.middle-topheader')
</header>
@include('frontlayouts.menu')
<div class="container col-2">
    <h4 style="font-weight:bold; color:black; font-size:30px;">Delivery Information</h4>
    <p>We deliver your Goods that is to say Shop and Agriculture Equipments based on your order within 60 minutes from the time You ordered. Our team will deliver to you <b>Cash on Delivery</b> to the place you specified when entering order details. Our delivery starts at 8:30am - 5:00pm.</p>
    <p>Our Delivery team will call you using the phone number you submitted to find where you. <b>You have to sign our delivery form to confirm the delivery.we encourage you to be situated in a right place and not in the hidden place.</b></p>
    <p>
    <h4 style="font-weight:bold; color:black; font-size:30px;">Joome Policies</h4>
    The Joome respects and protects the data and privacy of the Customers, Buyers, suppliers, Farmers and other individuals who we come into contact with in order to carry out our work. Joome is committed to being open with individuals about how we use their information and who we give it to and will comply with all applicable data protection regulations. Further information on what data we collect, why we collect it and what we do with it can be found in our privacy policies below:
    </p>
    <p><span style="color:green;">Joome Privacy Policy </span> - This policy explains how Joome uses personal data when people access the Joome websites; use the Joome's official app; order Joome shop items; contact the property & Agriculture Produce Owners; engage with the Joome (or we engage with their content) on social media platforms; and/or when they otherwise interact or communicate with Joome. </p>
    <p><span style="color:green;">Joome Enforcement Privacy Policy</span> – This policy explains how Joome collects and uses personal data as part of its efforts to protect and enforce its intellectual property rights.</p>
    <h4 style="font-weight:bold; color:black; font-size:30px;">Terms & Conditions</h4>
    <p>
      In these Terms of Use, any use of the words <b>"you", "yours" or similar expressions</b> shall mean any user of this website and the app whatsoever. Terms such as <b>"we", "us, "our" or similar expressions</b> shall mean the Joome Shopping Center.
    </p>
    <p>
      This website, <a href="https://joome.com" style="color:green;">https://joome.com</a> (the “Website”), and the Joome mobile application (the “App”) are operated by the Joome Shopping Center Limited, a company registered in Soroti under company number 02719699 with registered office at The Arapai, Opposite Soroti University MAin Gate, Along Soroti-moroto Road, Soroti Municipality.
    </p>
    <p>Terms and conditions are:</p>
    <p>1. All orders should be from 8:30am -5:00pm for easy delivery.</p>
    <p>2. Our Delivery Team stop working at 5:45pm unless there is mechanical problem on their way to deliver.</p>
    <p>3. State your details clearly for easy location and to easy the work of Delivery Team</p>
    <p>4. No delivery is to be done in any hidden place o Location as the delivery will be guided on their work</p>
    <p>5. Check the product delivered carefully and if electronics appliances,Equipment before delivry person leaves your Location</p>
    <p>6.Our customers are given a guarantee of two weeks for any inconvinieces that may arise on what was delivered to him or her for either replacement or repair. Our team will check the product toa certain the fault or problem realized whether its true or youare one who damaged or causedit it.</p>
    <p>
    <h4 style="font-weight:bold; color:black; font-size:30px;">Contact</h4>
      If you have any comments or questions about the Website or the App please contact us on 0775401793 or 0753926367.
    </p>
</div>
@include('frontlayouts.footer')
<script src="{{ asset('front/javascript/jquery-2.1.1.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('front/javascript/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('front/javascript/template_js/jstree.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('front/javascript/template_js/template.js')}}"></script>
<script src="{{ asset('front/javascript/common.js')}}" type="text/javascript"></script>
<script src="{{ asset('front/javascript/global.js')}}" type="text/javascript"></script>
<script src="{{ asset('front/javascript/owl-carousel/owl.carousel.min.js')}}" type="text/javascript"></script>
</body>
</html>
