<!DOCTYPE html>

<html lang="en" class="default-style layout-fixed layout-navbar-fixed">
<head>
   @include('layouts.title')

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description"
        content="" />
    <meta name="keywords" content="">
    <meta name="author" content="" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/ionicons.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/linearicons.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/open-iconic.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/feather.css')}}">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-material.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/shreerang-material.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/uikit.css')}}">

    <!-- Libs -->
    <link rel="stylesheet" href="{{ asset('assets/libs/perfect-scrollbar/perfect-scrollbar.css')}}">
   <style>
        html,
        body {
            background: #fff !important;
        }

        body> :not(.invoice-print) {
            display: none !important;
        }

        .invoice-print {
            min-width: 768px !important;
            font-size: 15px !important;
        }

        .invoice-print * {
            border-color: #aaa !important;
            color: #000 !important;
        }
    </style>

</head>

<body>
    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->

     @livewire('admin.print-customer-orders-now',['user_id'=>$user_id])
     yeyeyt
    
    <!-- Core scripts -->
    <script src="{{ asset('assets/js/pace.js')}}"></script>
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('assets/js/material-ripple.js')}}"></script>
    <script src="{{ asset('assets/js/layout-helpers.js')}}"></script>
    <script src="{{ asset('assets/libs/popper/popper.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.js')}}"></script>
    <script src="{{ asset('assets/js/sidenav.js')}}"></script>

    <!-- Libs -->
    <script src="{{ asset('assets/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <!-- Demo -->
    <script src="{{ asset('assets/js/demo.js')}}"></script><script src="{{ asset('assets/js/analytics.js')}}"></script>
   <script>
        // -------------------------------------------------------------------------
        // Print on window load

        $(function() {
            window.print();
        });
    </script>
</body>
</html>
