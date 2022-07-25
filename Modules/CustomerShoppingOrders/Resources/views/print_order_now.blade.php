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

    <div class="invoice-print p-5">
        @foreach($print_customer_order as $order)
        <div class="row">
            <div class="col-sm-6 pb-4">
                <div class="media align-items-center mb-4">
                    <a href="index.html" class="navbar-brand app-brand demo py-0 mr-4">
                        <span class="app-brand-logo demo">
                            <img src="{{asset('front/image/logo1.jpg')}}" alt="Brand Logo" class="img-fluid">
                        </span>
                        <span class="app-brand-text demo font-weight-bold text-dark ml-2">Joome Shopping Center, <br>Along Moroto Road, <br>Opposite Soroti University</span>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 text-right pb-4">
                <h6 class="text-big text-large font-weight-bold mb-3">INVOICE #{{date('Y')}}0{{$order->user_id}}</h6>
                <div class="mb-1">Email:
                    <strong class="font-weight-semibold">joomeproperty2022@gmail.com</strong>
                </div>
                <div>Telephone Contact:
                    <strong class="font-weight-semibold">0775401793 | 0753926367</strong>
                </div>
                <div>Date:
                    <strong class="font-weight-semibold">{{ date('F d, Y', strtotime($order->created_at))}}</strong>
                </div>
            </div>
        </div>
        <hr class="mb-4">
        <div class="row">
                    <div class="col-sm-6 mb-4">
                        <div class="font-weight-bold mb-2">Invoice To:</div>
                        <div>{{$order->name}}</div>
                        <div>Address :{{$order->address}}</div>
                        <div>Email: {{$order->email}}</div>
                        <div>Division: {{$order->division}}</div>
                        <div>Plot Number: {{$order->plot_number}}</div>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="font-weight-bold mb-2">Payment Details:</div>
                        <table>
                            <tbody>
                                @php
                                $sum =\DB::table('customer_orders')->where('customer_orders.status','active')
                                ->whereDate('customer_orders.created_at' , '=',\Carbon\Carbon::today())
                                ->whereTime('customer_orders.created_at' , '>',\Carbon\Carbon::now()->subHours(1))
                                ->where('customer_orders.user_id',$order->user_id)->sum('price');
                                @endphp
                                <tr>
                                    <td class="pr-3">Total Due:</td>
                                    <td>
                                        <strong>Ugx :{{ number_format($sum)}}</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pr-3">Town:</td>
                                    <td>{{$order->town}}</td>
                                </tr>
                                <tr>
                                    <td class="pr-3">Phone Number:</td>
                                    <td>{{$order->telephone}}</td>
                                </tr>
                                <tr>
                                    <td class="pr-3">Street:</td>
                                    <td>{{$order->street}}</td>
                                </tr>
                                <tr>
                                    <td class="pr-3">Order Time:</td>
                                    <td>{{$order->created_at}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
        @endforeach
        <div class="table-responsive mb-4">
            <table class="table m-0">
                <thead>
                <tr>
                    <th class="py-3">
                        No
                    </th>
                    <th class="py-3">
                        Item
                    </th>
                    <th class="py-3">
                        Quantity
                    </th>
                    <th class="py-3">
                        Amount
                    </th>
                </tr>
                </thead>
                <tbody>
                            
                            <tr>
                            @php
                            $get_order_info =\DB::table('customer_orders')->join('users','users.id','customer_orders.user_id')
                            ->join('shops','shops.id','customer_orders.item_id')
                            ->where('customer_orders.status','active')
                            ->whereDate('customer_orders.created_at' , '=',\Carbon\Carbon::today())
                            ->whereTime('customer_orders.created_at' , '>',\Carbon\Carbon::now()->subHours(1))
                            ->where('customer_orders.user_id',$order->user_id)
                            ->get(['customer_orders.*','shops.item_name']);
                            @endphp
                            @foreach($get_order_info as $j=>$orders)
                                <td class="py-">
                                   {{$j+1}}
                                </td>
                                <td class="py-3">
                                    {{$orders->item_name}}
                                </td>
                                <td class="py-3">
                                    {{$orders->quantity}}
                                </td>
                                <td class="py-3">
                                    {{ number_format($orders->price)}}
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="3" class="py-3">
                                    <div class="font-weight-semibold">Total</div>
                                </td>
                                <td class="py-3">
                                    <strong>Ugx :{{ number_format($sum)}}</strong>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-right py-3">
                                    Subtotal:
                                    <br> Transport:
                                    <br>
                                    <span class="d-block text-big mt-2">Total:</span>
                                </td>
                                <td class="py-3">
                                    <strong>Ugx :{{ number_format($sum)}}</strong>
                                    <br>
                                    <strong>Ugx: 4,000</strong>
                                    <br>
                                    <strong class="d-block text-big mt-2">Ugx :{{ number_format($sum + 4000)}}</strong>
                                </td>
                            </tr>
                        </tbody>
            </table>
        </div>
        <div class="text-muted">
                    <strong>Note:</strong> Joome is glad to deliver this product (s) to You Please Check the product well and sign delivery form  when receiving to confirm that the order was delivered successfully before our delivering team leave your place.
                    
                </div>
                <div class="row mt-3">
                    <div class="col-sm-6 pb-4">
                      Name:............................
                    </div>
                    <div class="col-sm-6 pb-4">
                        Date & Sign: ....................
                    </div>
                      <p style="text-align:center"><em>For more information contact us using our address or contact numbers 0775401793, 0753926367, joomeproperty2022@gmail.com</em></p>
                      <p class="text-center" style="text-align:center"> Printed By {{auth()->user()->name}} at {{\Carbon\Carbon::now()}}</p>
                </div>
            </div>
    </div>
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
